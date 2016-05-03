<?php
    // this code will be modified to pull images from database instead of $studio_pictures parameter
    echo "<div class='col-sm-12 studio-picture-container'>\n";
    if (!empty($_SESSION['user']))
        include "../components/manage_image_group.php";
    foreach($studio_pictures as $pic) {
        $alt = pathinfo($pic)["filename"];
        echo "<div class='studio-picture'>\n";
        if (!empty($_SESSION['user'])) {
            // add button on images to give the option to delete them.
            // this button needs to be put in a form so that it can be made a submit button.
            echo "<div class='overlay-delete-image'>delete</div>\n";
        }
        echo "<img class='studio-picture-img' src='$pic' alt='$alt'>\n";
        echo "</div>\n";
    }
    echo "</div>\n";
?>