<div class="row">
    <div class="col-xs-12 studio-picture-container">
    <?php
        $group_name = $group_name; // this parameter should be set before including this file
        if (!empty($_SESSION['user']))
            include "../components/manage_image_group.php";
        $stmt = $pdo->prepare(
           "SELECT filepath, description
            FROM images 
                LEFT JOIN images_in_groups
                    ON images.image_id=images_in_groups.image_id
                LEFT JOIN groups
                    ON images_in_groups.group_id=groups.group_id
            WHERE groups.group_name=:groupname");
        $stmt->bindParam(":groupname", $group_name);
        $stmt->execute();
        $pictures = $stmt->fetchAll();
        foreach($pictures as $pic) {
            $src = '../images/' . $pic['filepath'];
            $alt = $pic["description"];
            echo "
                <div class='col-md-4 col-xs-12'>\n";
            if (!empty($_SESSION['user'])) {
                echo "
                    <form method='POST'>
                        <input type='hidden' name='group_name' value='$group_name'>
                        <input type='submit' name='delete-image' value='delete' class='delete-image-button'>
                    </form>";
            }
            echo "
                    <div class='studio-picture'>
                        <img class='studio-picture' src='$src' alt='$alt'>
                    </div>\n";
            echo "
                </div>\n";
        }
    ?>
    </div>
</div>