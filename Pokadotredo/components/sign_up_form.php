<?php
    include "googlecalendar.php";

    $appointment_info = array(
        "name" => "Name",
        "email" => "Email Address",
        "phone" => "Phone Number",
        "date" => "Date",
        "workshop_type" => "Workshop Type",
        "comments" => "Comments"
    );

    $workshops = array(
        "Pottery Painting - all ages",
        "Art - 1 year olds and up",
        "Art - 3 year olds and up",
        "Art - 5 to 105 years old",
    );

    // Trim input and strip HTML tags
    function test_input($input) {
        $input = strip_tags(htmlspecialchars(stripslashes(trim($input)))); 
        return $input;
    }

    if (isset($_POST['signup'])) { // Form was submitted
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $date = $workshopTimes[$_POST["date"]]; 
        $workshopType = $workshops[$_POST["workshop-type"]]; 
        $comments = test_input($_POST["comments"]);

        // Notify Pokadot about new workshop sign up
        $to = "gopokadot@gmail.com";
        $subject = "POKADOT customer contact: {$name}";
        $message = "From {$name} <{$email}> (add to email list: ".(isset($_POST['add-mailing-list']) ? "yes" : "no").")\n--------------------------\n\n" . 
            "Phone: {$phone}\n\n" .
            "Date: {$date}\n\n" .
            "Workshop Type: {$workshopType}\n\n" .
            "Comments: {$comments}";
        // mail($to, $subject, $message);

        // Notify user with confirmation email
        $confirmationSubject = "POKADOT Workshop Confirmation";
        $confirmationMessage = "Hi {$name}, \n\n Thank you for signing up for a workshop with Pokadot! Here are the details of your appointment:" . 
            "Phone: {$phone}\n\n" .
            "Date: {$date}\n\n" .
            "Workshop Type: {$workshopType}\n\n" .
            "Comments: {$comments}\n\n" .
            "We will contact you shortly!";
        // mail($email, $confirmationSubject, $confirmationMessage);

        // Update Available Workshop Times and Pokadot Google Calendars
        $summary = nl2br("<b>Name:</b> {$name} \n <b>Email:</b> {$email} \n <b>Phone Number:</b> {$phone} \n <b>Date:</b> {$date} \n <b>Workshop Type:</b> {$workshopType} \n <b>Comments:</b> {$comments}");

        $event = $calendarEvents[$_POST["date"]];
        $eventID = $event["id"];
        $deletedEvent = $cal->events->delete($calendarId, $eventID); // Delete event from available times calendar

        // Add event to main Pokadot Google Calendar
        // $newEvent = new Google_Event();
        // $newEvent->setSummary('Workshop with {$name}');
        // $newEvent->setDescription("Name: {$name} \n Email: {$email} \n Phone Number: {$phone} \n Date: {$date} \n Workshop Type: {$workshopType} \n Comments: {$comments}";
        // $start = new Google_EventDateTime();
        // $start->setDateTime($event->start->dateTime);
        // $newEvent->setStart($start);
        // $end = new Google_EventDateTime();
        // $end->setDateTime($event->end->dateTime);
        // $newEvent->setEnd($end);
        // $createdEvent = $cal->events->insert($privateCalendarId, $newEvent);

        // Show workshop sign up confirmation message
        echo '<h1 class="indexHeader">Thank you for signing up for a workshop!</h1>';
        echo '<p class="subheader-center">Your Appointment:</p>';
        echo '<p class="soft-text block-quote">'.$summary.'</p>';
        echo '<p class="header-center">We will get back to you shortly!</p>';
    } else { // No form submission: display sign up form
        echo '<h1 class="indexHeader">Sign Up For a Workshop!</h1>';
        echo '<p id="signup-error-message" class="subtitle"></p>';
        echo '<form id="signup-form" class="form" name="signupForm" method="post" action="../pages/signup.php" onsubmit="return validWorkshopSignupForm();" method="POST">
                    <input id="name-field" type="text" name="name" placeholder="'.$appointment_info["name"].'" maxlength="100" required title="Please enter your name.">
                    <div class="multifield-line">
                        <input id="email-field" type="text" name="email" placeholder="'.$appointment_info["email"].'" required title="Please enter a email.">
                        <input id="phone-field" type="tel" name="phone" placeholder="'.$appointment_info["phone"].' (XXX-XXX-XXXX)" title="Please enter a phone number.">
                    </div>
                    <div class="multifield-line">
                        <select id="workshop-type-field" name="workshop-type" onchange="changeColor(this);" required title="Please select a workshop!">
                            <option selected="selected" value>Workshop</option>';

                            for ($i = 0; $i < count($workshops); $i++) {
                                echo "<option value='{$i}'>{$workshops[$i]}</option>";
                            } 

                    echo '</select>';
                    echo '<select id="date-field" type="datetime-local" name="date" onchange="changeColor(this);" required title="Please select a workshop date and time.">
                            <option selected="selected" value>Date and Time</option>';

                            for ($i = 0; $i < count($workshopTimes); $i++) {
                                echo "<option value='{$i}'>{$workshopTimes[$i]}</option>";
                            } 

                    echo '</select>
                    </div>';

                echo '<textarea id="comments" form="signup-form" name="comments" rows=8 placeholder="'.$appointment_info["comments"].' (i.e. Preferred Location, Special Accommodations)"></textarea>
                    <input id="add-mailing-list" name="add-mailing-list" type="checkbox">
                    <label for="add-mailing-list">Add me to the email list</label>
                    <input class="signup-button" type="submit" name="signup" value="Sign Up">
              </form>';
    }

?>