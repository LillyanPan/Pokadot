<?php

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

    if (isset($_POST['submit'])) { // Form was successfully submitted
        $to = "gopokadot@gmail.com";
        $subject = "POKADOT customer contact: {$_POST['name']}";
        $message = "From {$_POST['name']} <{$_POST['email']}> (add to email list: ".(isset($_POST['add-mailing-list']) ? "yes" : "no").")\n--------------------------\n\n" . 
            "Phone: {$_POST['phone']}\n\n" .
            "Date: {$_POST['date']}\n\n" .
            "Workshop Type: {$_POST['workshop_type']}\n\n" .
            "Comments: {$_POST['comments']}";

        print "<p>Message: {$message}</p>";
        mail($to, $subject, $message);
        echo '<p class="line-after">
                    Thank you, ' . htmlspecialchars($_POST["name"]) . ', for signing up for a workshop!
                </p>
                <p class=" soft-text block-quote">
                    ' . str_replace("\n", "<br>", htmlspecialchars($_POST["workshop_type"])) . '
                </p>
        ';
        $_POST = array();
        $_SERVER["REQUEST_METHOD"] = "GET";

    } else { // No form submission: display sign up form
        echo '<form id="signup-form" class="form" method="post" action="../pages/workshops.php#signup-form" onsubmit="return validWorkshopSignupForm();" method="POST">
                    <input id="name-field" class="wide-text" type="text" name="name" placeholder="'.$appointment_info["name"].'" maxlength="100" required title="Please enter your name.">
                    <div class="multifield-line">
                        <input id="email-field" class="wide-text" type="text" name="email" placeholder="'.$appointment_info["email"].'" required title="Please enter a email.">
                        <input id="phone-field" class="wide-text" type="tel" name="phone" placeholder="'.$appointment_info["phone"].'" title="Please enter a phone number.">
                    </div>
                    <div class="multifield-line">
                        <select id="workshop-type-field" name="workshop-type" class="wide-text" required title="Please select a workshop!">
                            <option class="workshop-default" selected="selected" value>Workshop</option>';

                            for ($i = 0; $i < count($workshops); $i++) {
                                echo "<option value='{$i}'>{$workshops[$i]}</option>";
                            } 

                echo '</select>
                       <input id="date-field" class="wide-text" type="datetime-local" name="date" required title="Please enter a date.">
                    </div>
                    <textarea id="comments" class="wide-text" form="signup-form" name="comments" rows=8 placeholder="'.$appointment_info["comments"].'"></textarea>';

                echo '<input id="add-mailing-list" name="add-mailing-list" type="checkbox">
                    <label for="add-mailing-list">Add me to the email list</label>
                    <input type="submit" value="Sign Up">
              </form>';
    }

?>