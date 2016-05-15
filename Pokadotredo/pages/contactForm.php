<?php
    // $initial_values = array(
    //     "name" => "Name",
    //     "email" => "Email Address",
    //     "subject" => "Subject",
    //     "msg" => "Message"
    // );
    $submitted = $_SERVER["REQUEST_METHOD"] == "POST";
    // $valid = array_fill_keys(array_keys($initial_values), "");
    // $all_valid = false;
    echo($submitted); 
    if ($submitted) {
        $name = strip_tags(trim($_POST["name"]));
        $name = strip_tags(trim($_POST["subject"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $msg = strip_tags(trim($_POST["msg"]));

        if ( empty($name) or empty($msg) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class="line-after">There was a problem sending your message! Please try again.</p>";
            exit;
        }

    
        $to = "gopokadot@gmail.com";
        $subject = "POKADOT customer contact: ".$name." [".$_POST['subject']."]";
        $message = "From ".$_POST['name']." <".$_POST['email']."> (add to email list: ".(isset($_POST['add-mailing-list']) ? "yes" : "no").")\n--------------------------\n\n".$_POST['msg'];
        mail($to, $subject, $message);
        echo '<p class="line-after">Thank you, '.htmlspecialchars($_POST["name"]).', for sending us a message!</p>
                <p class="soft-text block-quote">'.str_replace("\n", "<br>", htmlspecialchars($_POST["msg"])).'</p>';
    }
?>