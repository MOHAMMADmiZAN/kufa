<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $img = $_FILES['image'];
    $imgName = $img['name'];
    $imgSize = $img['size'];
    $imgExplode = explode(".", $imgName);
    $imgExtension = end($imgExplode);
    $supportedExtension = ["jpg", "jpeg", "png", "svg", "ico", "PNG", "JPG", "JPEG", "webp"];
    if ($imgName !== '') {
        if (in_array($imgExtension, $supportedExtension, true)) {
            $newName = random_int(0, 1000) . '~' . $imgName;
            $newLoc = 'upload/' . $newName;
            move_uploaded_file($img['tmp_name'], $newLoc);
            $imageInsert = " INSERT INTO `brands` (`images`) VALUES ('$newName')";
            if (isset($kufaDataBase)){
                $imageInsertQuery = $kufaDataBase->query($imageInsert);
                $kufaDataBase->close();
                if (isset($imageInsertQuery)){
                    header("Location:brand.php");
                }
            }

        }
    }

} else {
    header('Location:brand.php');
}
