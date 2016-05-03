<?php

    /*
    This file already has some form validation implemented. However, we 
    want to improve the validation by preventing code injection by
    stripping HTML tags and elements. Furthermore, we need to integrate
    the validation feedback by detecting which fields have invalid inputs
    and display appropriate feedback messages. We will use regexes and 
    filter input functions to implement further form validation. 
    */

    $initial_values = array(
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

    $submitted = $_SERVER["REQUEST_METHOD"] == "POST";

    $valid = array_fill_keys(array_keys($initial_values), "");
    $all_valid = false;

    if ($submitted) {
        $_POST = array_map(function($str) {return trim($str);}, $_POST); // trim whitespace from answers
        $valid = array(
            "name" => $_POST["name"],
            "email" => filter_var($_POST["email"], FILTER_VALIDATE_EMAIL),
            "phone" => filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT),
        );
        array_walk($valid, function(&$valid_entry, $field) {
            $valid_entry = $valid_entry ? "" : " invalid";
        });
        $all_valid = !array_filter($valid);
    }

    if ($submitted and $all_valid) {
        $to = "gopokadot@gmail.com";
        $subject = "POKADOT customer contact: " . $_POST['name'] . "";
        $message = "From {$_POST['name']} <{$_POST['email']}> (add to email list: " . (isset($_POST['add-mailing-list']) ? "yes" : "no") . ")\n--------------------------\n\n"  . 
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
    } else {
        $values = $submitted ? $_POST : $initial_values;

        $soft_text = array_fill_keys(array_keys($initial_values), " soft-text");
        if ($submitted)
            foreach ($soft_text as $field => $value)
                if ($_POST[$field] != $initial_values[$field])
                    $soft_text[$field] = "";

        echo '<form id="signup-form" class="form" method="post" action="../pages/workshops.php#signup-form">
                    <input id="name" class="short-text' . $valid["name"] . $soft_text["name"] . '" type="text" name="name" placeholder="' . $initial_values["name"] . '" maxlength="100" required title="Please enter your name.">
                    <input id="email" class="short-text' . $valid["email"] . $soft_text["email"] . '" type="text" name="email" placeholder="' . $initial_values["email"] . '" required title="Please enter a email.">
                    <input id="phone" class="short-text' . $valid["phone"] . $soft_text["phone"] . '" type="tel" name="phone" placeholder="' . $initial_values["phone"] . '" title="Please enter a phone number.">
                    <input id="date" class="short-text' . $valid["date"] . $soft_text["date"] . '" type="datetime-local" name="date" required title="Please enter a date.">';
                echo '<select name="workshop-type" class="short-text' . $valid["workshop_type"] . $soft_text["workshop_type"] . '" required title="Please select a workshop!">
                        <option selected="selected" value>Workshop</option>';

                        for ($i = 0; $i < count($workshops); $i++) {
                            echo "<option value='{$i}'>{$workshops[$i]}</option>";
                        } 

                echo  '</select>
                    <textarea id="comments" class="wide-text' . $valid["comments"] . $soft_text["comments"] . '" form="signup-form" name="comments" rows=8 placeholder="' . $initial_values["comments"] . '"></textarea>';

        // foreach ($initial_values as $field => $value) {
        //     echo "\n<label for=\"$field\" class=\"no-show\">$value</label>";
        // }

        echo    '<input id="add-mailing-list" name="add-mailing-list" type="checkbox">
                        <label for="add-mailing-list">Add me to the email list</label>
                    <input type="submit" value="Sign Up">
                </form>
                ';
    }

?>