<?php
    require_once "../config.php";
    $pdo = new PDO("mysql: host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    // image add
    if (!empty($_SESSION['user']) && !empty($_POST["add_image"])) {
        $group_name = filter_input(INPUT_POST, "group_name", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "image_desc", FILTER_SANITIZE_SPECIAL_CHARS);
        $new_image = $_FILES['image_upload'];
        $image_name = $new_image['name'];
        // file
        if ($new_image['error'] == 0) {
            $temp_name = $new_image['tmp_name'];
            move_uploaded_file($temp_name, "../images/$image_name");
            // create smaller version
            $image_file = False;
            if (preg_match("/\.jpe?g$/i", $image_name))
                $image_file = imagecreatefromjpeg("../images/$image_name");
            else if (preg_match("/\.png$/i", $image_name))
                $image_file = imagecreatefrompng("../images/$image_name");
            $image_path_info =  pathinfo($image_name);
            $small_file_name = $image_path_info["filename"] . "_small." . $image_path_info['extension'];
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
            "INSERT INTO images (filepath, description)
             VALUES (:filepath, :description);");
        $insert_stmt->bindParam(":filepath", $small_file_name);
        $insert_stmt->bindParam(":description", $description);
        if ($insert_stmt->execute()) {
            $image_id = $pdo->lastInsertId();
            $group_stmt = $pdo->prepare(
                "INSERT INTO images_in_groups (image_id, group_id)
                 SELECT $image_id, group_id FROM groups WHERE group_name=:groupname;");
            // $group_stmt->bindParam(":imageid", $image_id);
            $group_stmt->bindParam(":groupname", $group_name);
            if ($group_stmt->execute()) {
                $pdo->commit();
            }
            else {
                echo "<h1>Error updating database</h1>";
                $pdo->rollBack();
            }
        }
        else{
            echo "<h1>Error updating database</h1>";
            $pdo->rollBack();
        }
    }
    // image delete
    else if (!empty($_SESSION['user']) && !empty($_POST["delete_image"])) {
        $image_id = filter_input(INPUT_POST, "image_id", FILTER_SANITIZE_NUMBER_INT);
        // database
        $pdo->beginTransaction();
        $file_stmt = $pdo->prepare("SELECT filepath FROM images WHERE image_id=:imageid");
        $file_stmt->bindParam(":imageid", $image_id);
        $file_stmt->execute();
        $filename = $file_stmt->fetch()['filepath'];
        $remove_image_groups_stmt = $pdo->prepare(
            "DELETE FROM images_in_groups WHERE image_id=:imageid");
        $remove_image_groups_stmt->bindParam(":imageid", $image_id);
        $remove_image_groups_stmt->execute();
        if ($remove_image_groups_stmt->execute()) {
            $remove_image_stmt = $pdo->prepare("DELETE FROM images WHERE image_id=:imageid");
            $remove_image_stmt->bindParam(":imageid", $image_id);
            if ($remove_image_stmt->execute())
                $pdo->commit();
            else {
                echo "<h1>Error removing image</h1>";
                $pdo->rollBack();
                exit();
            }

        }
        else {
            echo "<h1>Error removing image</h1>";
            $pdo->rollBack();
            exit();
        }
        // file
        $filepath = "../images/$filename";
        unlink($filepath);
        unlink(str_replace("_small", "", $filepath));
    }
?>