<?php
    include('../google-api-php-client/src/Google/autoload.php'); 

    $workshopTimes = array();
     
    // Set credentials for access to Google Calendar API
    $client = new Google_Client();
    $client->setApplicationName("Pokadot Workshop Calendar");
    $client->setDeveloperKey('AIzaSyC6qF0bQUBISpB47eiGJaDKEK8JrICqhKE');
    $cal = new Google_Service_Calendar($client);
    $calendarId = '8ck8ha14j21jmdhrtd43a6q6rg@group.calendar.google.com';

    // Parameters for calendar events
    $params = array(
        'singleEvents' => true,
        'orderBy' => 'startTime',
        'timeMin' => date(DateTime::ATOM), // Only get events after current time
        'timeMax' => date(DateTime::ATOM, strtotime("+30 days")) // Only get events up to 30 days from now
    );

    $events = $cal->events->listEvents($calendarId, $params); // Get calendar events
    $calTimeZone = $events->timeZone; // Timezone of calendar
    date_default_timezone_set($calTimeZone); // Set default time zone to local time zone
 
    foreach ($events->getItems() as $event) {
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