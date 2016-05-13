<?php
    // for studiopictures.php
    require_once "../config.php";
    $pdo = new PDO("mysql: host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
?>


<?php
    if (empty($_SESSION['user']))
        exit();
    if ($_POST["Add Image"]) {
        $group_id = filter_input(INPUT_POST, "group_id", FILTER_SANITIZE_NUMBER_INT);
        $description = filter_input(INPUT_POST, "image_desc", FILTER_SANITIZE_SPECIAL_CHARS);
        $new_image = $_FILES['image_upload'];
        $image_name = $new_image['name'];
        // file
        if ($new_image['errno'] == 0) {
            $temp_name = $new_image['tmp_name'];
            move_uploaded_file($temp, "../images/$image_name");
            // create smaller version
            $image_file = False
            if (preg_match("/\.jpe?g$/i", $image_name))
                $image_file = imagecreatefromjpeg("../images/$image_name");
            else if (preg_match("/\.png$/i", $image_name))
                $image_file = imagecreatefrompng("../images/$image_name");
            $image_path_info =  pathinfo($image_name);
            $small_file_name = $image_path_info["filename"] . "_small" . $image_path_info['extension'];
            if ($image_file) {
                // create a smaller copy of image
                $small_image = imagecreatetruecolor(300, 169);
                imagecopyresized($small_image, $image_file, 0, 0, 0, 0, 300, 169, imagesx($image_file), imagesy($image_file));
                // save downsized image to a file
                if (preg_match("/\.jpe?g$/i", $image_name))
                    imagejpeg($small_image, "../images/$small_file_name");
                else if (preg_match("/\.png$/i", $image_name))
                    imagepng($small_image, "../images/$small_file_name");
            }
            else 
                copy("../images/$image_name", "../images/$small_file_name");
        }
        else
            echo "<h1>Error uploading photo</h1>";
        // database
        $pdo->beginTransaction();
        $insert_stmt = $pdo->prepare(
            "INSERT INTO images (filename, description)
             VALUES (:filename, :description");
        $insert_stmt->bindParam(":filepath", $image_name);
        $insert_stmt->bindParam(":description", $description);
        if ($insert_stmt->execute()) {
            $image_id = $pdo->lastInsertId;
            $group_stmt = $pdo->prepare(
                "INSERT INTO images_in_groups (image_id, group_id)
                 VALUES (:imageid, :groupid");
            $group_stmt->bindParam(":imageid", $image_id);
            $group_stmt->bindParam(":groupid", $group_id);
            if ($group_stmt->execute())
                $pdo->commit();
            else
                $pdo->rollBack();
        }
        else
            $pdo->rollBack();
        
    }
?>