<div class="row">
    <div class="col-md-2 col-sm-1"></div>
    <div class="col-md-8 col-sm-10 studio-picture-container">
    <?php
        $group_id = $group_id; // this parameter should be set before including this file
        if (!empty($_SESSION['user']))
            include "../components/manage_image_group.php";
        $stmt = $pdo->prepare(
           "SELECT filename, description
            FROM images LEFT JOIN images_in_groups
                ON images.image_id=images_in_groups.image_id
            WHERE images_in_groups.group_id=:groupid");
        $stmt->bindParam(":groupid", $group_id);
        $stmt->execute();
        $pictures = $stmt->fetchAll();
        foreach($pictures as $pic) {
            $src = $pic['filepath'];
            $alt = $pic["description"];
            echo "<div class='col-md-4 col-sm-12'>\n";
            if (!empty($_SESSION['user'])) {
                // add button on images to give the option to delete them.
                // this button needs to be put in a form so that it can be made a submit button.
                echo "<div class='overlay-delete-image'>delete</div>\n";
            }
            echo "<img class='studio-picture-img' src='$src' alt='$alt'>\n";
            echo "</div>\n";
        }
    ?>
    </div>
    <div class="col-md-2 col-sm-1"></div>
</div>