<?php

    $initial_values = array(
        "name" => "Name",
        "email" => "Email Address",
        "subject" => "Subject",
        "msg" => "Message"
    );

    $submitted = $_SERVER["REQUEST_METHOD"] == "POST";

    $valid = array_fill_keys(array_keys($initial_values), "");
    $all_valid = false;

    if ($submitted) {
        $_POST = array_map(function($str) {return trim($str);}, $_POST); // trim whitespace from answers
        $valid = array(
            "name" => $_POST["name"] and strlen($_POST["name"]) < 100 and $_POST["name"] != $initial_values["name"],
            "email" => filter_var($_POST["email"], FILTER_VALIDATE_EMAIL),
            "subject" => $_POST["subject"] and $_POST["subject"] != $initial_values["subject"],
            "msg" => $_POST["msg"] and $_POST["msg"] != $initial_values["msg"]
        );
        array_walk($valid, function(&$valid_entry, $field) {
            $valid_entry = $valid_entry ? "" : " invalid";
        });
        $all_valid = !array_filter($valid);
    }

    if ($submitted and $all_valid) {
        $to = "gopokadot@gmail.com";
        $subject = "POKADOT customer contact: " . $_POST['name'] . " [" . $_POST['subject'] . "]";
        $message = "From " . $_POST['name'] . " <" . $_POST['email'] . "> (add to email list: " . (isset($_POST['add-mailing-list']) ? "yes" : "no") . ")\n--------------------------\n\n"  . $_POST['msg'];
        mail($to, $subject, $message);
        echo '<p class="line-after">
                    Thank you, ' . htmlspecialchars($_POST["name"]) . ', for sending us a message!
                </p>
                <p class=" soft-text block-quote">
                    ' . str_replace("\n", "<br>", htmlspecialchars($_POST["msg"])) . '
                </p>
        ';
        $_POST = array();
        $_SERVER["REQUEST_METHOD"] = "GET";
    }
    else {
        $values = $submitted ? $_POST : $initial_values;

        $soft_text = array_fill_keys(array_keys($initial_values), " soft-text");
        if ($submitted)
            foreach ($soft_text as $field => $value)
                if ($_POST[$field] != $initial_values[$field])
                    $soft_text[$field] = "";

        echo '<form id="contact-form" class="form" method="post" action="../pages/contactus.php#contact-form">
                    <div class="soft-text">All fields required.</div>
                    <input id="name" class="short-text' . $valid["name"] . $soft_text["name"] . '" type="text" name="name" title="' . $initial_values["name"] . '" value="' . $values["name"] . '">
                    <input id="email" class="short-text' . $valid["email"] . $soft_text["email"] . '" type="text" name="email" title="' . $initial_values["email"] . '" value="' . $values["email"] . '">
                    <input id="subject" class="wide-text' . $valid["subject"] . $soft_text["subject"] . '" type="text" name="subject" title="' . $initial_values["subject"] . '" value="' . $values["subject"] . '">
                    <textarea id="msg" class="wide-text' . $valid["msg"] . $soft_text["msg"] . '" form="contact-form" name="msg" rows=8 title="' . $initial_values["msg"] . '">' . $values["msg"] . '</textarea>';

        foreach ($initial_values as $field => $value) {
            echo "\n
                    <label for=\"$field\" class=\"no-show\">$value</label>";
        }

        echo '
                    <input id="add-mailing-list" name="add-mailing-list" type="checkbox">
                        <label for="add-mailing-list">Add me to the email list</label>
                    <input type="submit" value="Send Message">
                </form>
                ';
    }

?>