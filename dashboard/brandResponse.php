<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
// random string //
function random_str(
    int $length = 5,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string
{
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces [] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

//
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $img = $_FILES['image'];
    $imgName = $img['name'];
    $imgSize = $img['size'];
    $imgExplode = explode(".", $imgName);
    $imgExtension = end($imgExplode);
    $supportedExtension = ["jpg", "jpeg", "png", "svg", "ico", "PNG", "JPG", "JPEG", "webp"];
    if ($imgName !== '') {
        if (in_array($imgExtension, $supportedExtension, true)) {
            $newName = random_str(25) . '.' . 'Sponsors' . '.' . $imgExtension;
            $newLoc = 'upload/brand/';
            if (!file_exists($newLoc)) {
                mkdir($newLoc, 0777, true);
            }
            $updatedNewLoc = 'upload/brand/' . $newName;
            move_uploaded_file($img['tmp_name'], $updatedNewLoc);
            $imageInsert = " INSERT INTO `brands` (`images`) VALUES ('$newName')";
            if (isset($kufaDataBase)) {
                $imageInsertQuery = $kufaDataBase->query($imageInsert);
                $kufaDataBase->close();
                if (isset($imageInsertQuery)) {
                    header("Location:brand.php");
                }
            } else {
                echo "dataBase Error";
            }

        } else {
            $_SESSION["supportedExtension"] = 'PLEASE PROVIDE VALID IMAGE !!';
            header('Location:brand.php');
        }
    } else {
        $_SESSION["imgInsert"] = 'PLEASE SELECT IMAGE !!';
        header('Location:brand.php');

    }

} else {
    header('Location:brand.php');
}
