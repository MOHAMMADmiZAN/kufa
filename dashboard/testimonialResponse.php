<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $feedback = trim($_POST['feedback'],' ');
    $img = $_FILES['image'];
    $imgName = $img['name'];
    $imgSize = $img['size'];
    $imgExplode = explode(".", $imgName);
    $imgExtension = end($imgExplode);
    $supportedExtension = ["jpg", "jpeg", "png", "svg", "PNG", "JPG", "JPEG", "webp"];
    if ($imgName !== '' && isset($name, $designation, $feedback)) {
        if (in_array($imgExtension, $supportedExtension, true)) {
            $newName = 'client' . '~' . $imgName;
            $newLoc = 'upload/feedback/';
            if (!is_dir($newLoc)) {
                mkdir($newLoc, 0777, true);
            }
            $updatedNewLoc = 'upload/feedback/' . $newName;
            move_uploaded_file($img['tmp_name'], $updatedNewLoc);
            $testimonialsTable = "CREATE TABLE IF NOT EXISTS `kufa`.`testimonials` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `designation` VARCHAR(255) NOT NULL , `feedback` TEXT NOT NULL , `image` varchar(255) NOT NULL,PRIMARY KEY (`id`)) ENGINE = InnoDB;";
            if (isset($kufaDataBase, $testimonialsTable)) {
                $testimonialsTableQuery = $kufaDataBase->query($testimonialsTable);
            } else {
                echo "table error";
            }
            $FeedBackInsert = " INSERT INTO `testimonials` (`name`,`designation`,`feedback`,`image`) VALUES ('$name','$designation','$feedback','$newName')";
            if (isset($kufaDataBase)) {
                $FeedBackInsertQuery = $kufaDataBase->query($FeedBackInsert);
                $kufaDataBase->close();
                if (isset($FeedBackInsertQuery)) {

                    header("Location:testimonial.php");
                }
            } else {
                echo "dataBase Error";
            }

        } else {
            $_SESSION["supportedExtension"] = 'PLEASE PROVIDE VALID IMAGE !!';
            header('Location:testimonial.php');
        }
    } else {
        $_SESSION["imgInsert"] = 'PLEASE INSERT Your Valuable Data!!';
        header('Location:testimonial.php');

    }
} else {
    header('Location:testimonial.php');
}