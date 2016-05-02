<?php
    echo "<div class='col-sm-12 studio-picture-container'>\n";
    foreach($studio_pictures as $pic) {
        $alt = pathinfo($pic)["filename"];
        echo "<div class='studio-picture'><img class='studio-picture-img' src='$pic' alt='$alt'></div>\n";
    }
    echo "</div>\n";
?>