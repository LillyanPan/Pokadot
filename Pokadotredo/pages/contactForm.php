<?php
    $submitted = $_SERVER["REQUEST_METHOD"] == "POST";
    if ($submitted) {
        $name = strip_tags(trim($_POST["name"]));
        $subject = strip_tags(trim($_POST["subject"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $msg = strip_tags(trim($_POST["msg"]));


        if ( empty($name) ) {
            echo "Invalid name. Please try again!";
            exit;
        } 
        else if ( empty($subject) ) {
            echo "Invalid subject. Please try again!";
            exit;
        } 
        else if ( empty($msg) ) {
            echo "Invalid message. Please try again!";
            exit;
        } 
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email! Please try again.";
            exit;
        } 
        else {
            $to = "gopokadot@gmail.com";
            $subject = "POKADOT customer contact: ".$name." [".$_POST['subject']."]";
            $message = "From ".$_POST['name']." <".$_POST['email']."> (add to email list: ".(isset($_POST['add-mailing-list']) ? "yes" : "no").")\n--------------------------\n\n".$_POST['msg'];
            mail($to, $subject, $message);
            echo '
                    Thank you, ' . htmlspecialchars($_POST["name"]) . ', for sending us a message! We will get back to you soon.';
        }
    }
?>