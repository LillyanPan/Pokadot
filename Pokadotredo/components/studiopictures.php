<?php
    // this code needs to be modified to pull images from database instead of $studio_pictures parameter
    echo "<div class='col-sm-12 studio-picture-container'>\n";
    if (!empty($_SESSION['user']))
        include "../components/manage_image_group.php";
    foreach($studio_pictures as $pic) {
        $alt = pathinfo($pic)["filename"];
        echo "<div class='studio-picture'>\n";
        if (!empty($_SESSION['user'])) {
            // add overlay on images to delete them
            // need to add js to make ajax call if this button clicked
            echo "<div class='overlay-delete-image'>delete</div>";
        }
        echo "<img class='studio-picture-img' src='$pic' alt='$alt'>\n";
        echo "</div>\n";
    }
    echo "</div>\n";
?>