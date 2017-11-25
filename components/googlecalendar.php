<?php
    require_once '../google-api-php-client/src/Google/autoload.php'; 
    require_once '../google-api-php-client/src/Google/Client.php';
    require_once '../google-api-php-client/src/Google/Service/Calendar.php';

    // Debugging
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // Google Calendar Credentials
    $applicationName = 'Pokadot Workshop Calendar';
    $developerKey = 'AIzaSyC6qF0bQUBISpB47eiGJaDKEK8JrICqhKE';
    $clientId = '730261096090-d4c97cn6jb1sv3aifooj8jvgtkt5kene.apps.googleusercontent.com';
    $clientSecret = 'ia1QgLUP3kO_srwnCQ58Rn1Q';
    $scopes = array('https://www.googleapis.com/auth/calendar');
    $redirectUri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    $service_account_name = 'pokadot-service-account@pokadot-1308.iam.gserviceaccount.com';
    $key_file_location = '../Pokadot-767a91b0fe40.p12';

    // Set credentials for access to Google Calendar API
    $client = new Google_Client();
    $client->setApplicationName($applicationName);
    $client->setDeveloperKey($developerKey);
    $client->setClientId($clientId);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->setScopes($scopes);
    $client->setAccessType('offline'); // Gets the refresh token
    $client->setApprovalPrompt('auto');

    /* Authenticate admin account */

    if (!strlen($service_account_name) || !strlen($key_file_location))
        echo missingServiceAccountDetailsWarning();

    if (isset($_SESSION['service_token'])) {
        $client->setAccessToken($_SESSION['service_token']);
    }

    $key = file_get_contents($key_file_location);
    $cred = new Google_Auth_AssertionCredentials(
        $service_account_name, 
        $scopes, 
        $key,
        'notasecret',                                 // Default P12 password
        'http://oauth.net/grant_type/jwt/1.0/bearer', // Default grant type
        'gopokadot@gmail.com'                         // User to impersonate
    );

    $client->setAssertionCredentials($cred);
    if($client->getAuth()->isAccessTokenExpired()) {
        $client->getAuth()->refreshTokenWithAssertion($cred);
    }
    $_SESSION['service_token'] = $client->getAccessToken();

    /* Get Google Calendar events */

    $cal = new Google_Service_Calendar($client);
    $calendarId = '8ck8ha14j21jmdhrtd43a6q6rg@group.calendar.google.com';
    $privateCalendarId = 'gopokadot@gmail.com';

    // Parameters for calendar events
    date_default_timezone_set('America/New_York');
    $params = array(
        'singleEvents' => true,
        'orderBy' => 'startTime',
        'timeMin' => date(DateTime::ATOM), // Only get events after current time
        'timeMax' => date(DateTime::ATOM, strtotime("+30 days")) // Only get events up to 30 days from now
    );

    $events = $cal->events->listEvents($calendarId, $params); // Get calendar events
    $calendarEvents = $events->getItems();
    $calTimeZone = $events->timeZone; // Timezone of calendar
    date_default_timezone_set($calTimeZone); // Set default time zone to local time zone

    $workshopTimes = array();
 
    foreach ($calendarEvents as $event) {
        $eventStartDateStr = $event->start->dateTime;
        $eventEndDateStr = $event->end->dateTime;

        if (empty($eventStartDateStr)) { // All day event
            $eventStartDateStr = $event->start->date;
        }

        if (empty($eventEndDateStr)) { // All day event
            $eventEndDateStr = $event->end->date;
        }
 
        // Set time zone
        $temp_timezone = $event->start->timeZone;
        $timezone = (!empty($temp_timezone)) ? new DateTimeZone($temp_timezone) : new DateTimeZone($calTimeZone);
        $eventLink = $event->htmlLink . "&ctz=" . $calTimeZone;

        // Event Start Date
        $eventStartDateTime = new DateTime($eventStartDateStr, $timezone);
        $eventStartDate = $eventStartDateTime->format("M j"); 
        $eventStartTime = $eventStartDateTime->format("g:ia");

        // Event End Date
        $eventEndDateTime = new DateTime($eventEndDateStr, $timezone);
        $eventEndDate = $eventEndDateTime->format("M j"); 
        $eventEndTime = $eventEndDateTime->format("g:ia");

        if ($eventStartDate == $eventEndDate) { // Same date
            $workshopTimes[] = "{$eventStartDate} ({$eventStartTime} - {$eventEndTime})";
        } else {
            $workshopTimes[] = "{$eventStartDate} {$eventStartTime} to {$eventEndDate} {$eventEndTime}";
        }
    }
?>