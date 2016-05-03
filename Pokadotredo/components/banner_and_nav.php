<?php

$path_to_root = $current ? "../" : "";

$classes = array_fill(0, 3, "");
$classes[$current] = 'class="selected" ';

echo '<!-- banner -->
        <div id="banner">
            <a href="' . $path_to_root . 'index.php">
                <img id="logo" src="' . $path_to_root . 'images/logo.png" alt="Pok-A-Dot logo">
            </a>
        </div><!-- banner div -->

        <div class="menubar">
            <a ' . $classes[0] . 'href="' . $path_to_root . 'index.php">Who We Are</a>
            <div id="whatwedo">
            <a ' . $classes[1] . 'href="#">What We Do</a>
                <div id="whatwedo-menu">
                    <a href="' . $path_to_root . 'pages/events.php">Parties and Events</a>
                    <br>
                    <a href="' . $path_to_root . 'pages/gifts.php">Personalized Gifts</a>
                    <br>
                    <a href="' . $path_to_root . 'pages/workshops.php">Workshops and Classes</a>
                </div>
            </div>
            <a ' . $classes[2] . 'href="' . $path_to_root . 'pages/contactus.php">Contact Us</a>
            ' . (empty($_SESSION['user']) ? "" : 
                    "<a href='{$path_to_root}pages/login.php'>Logout</a>"
            ) . '
        </div><!-- navigation -->

';
?>
