<?php
    echo '<div class="indent">';
    foreach(array_chunk($studio_pictures, 3) as $triplet) {
        echo '
                        <div class="picture-triple-container">
                            <img class="picture-triple" src="' . $triplet[0] . '" alt="' . pathinfo($triplet[0])["filename"] . '">
                        </div>
                        <div class="picture-triple-container">
                            <img class="picture-triple" src="' . $triplet[1] . '" alt="' . pathinfo($triplet[1])["filename"] . '">
                        </div>
                        <div class="picture-triple-container rightmost">
                            <img class="picture-triple" src="' . $triplet[2] . '" alt="' . pathinfo($triplet[2])["filename"] . '">
                        </div>
';
    }
    echo "                </div>\n";
?>