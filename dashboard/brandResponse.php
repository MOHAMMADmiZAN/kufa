<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $img = $_FILES['image'];
//    $imgName = $img['name'];
//    $imgSize = $img['size'];
//    $imgExplode = explode(".", $imgName);
//    $imgExtension = end($imgExplode);
//    $supportedExtension = ["jpg", "jpeg", "png", "svg", "ico", "PNG", "JPG", "JPEG", "webp"];
    print_r($img);
    die();
} else {
    header('Location:brand.php');
}
