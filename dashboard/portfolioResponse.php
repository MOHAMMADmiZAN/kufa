<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $categories = $_POST['categories'];
    $text = $_POST['text'];
    $thumbnail = $_FILES['thumbnail'];
    $feature = $_FILES['feature'];
    $thumbnailName = $thumbnail['name'];
    $thumbnailSize = $thumbnail['size'];
    $thumbnailExplode = explode(".", $thumbnailName);
    $thumbnailExtension = end($thumbnailExplode);
    $featureName = $feature['name'];
    $featureSize = $feature['size'];
    $featureExplode = explode(".", $featureName);
    $featureExtension = end($featureExplode);
    $supportedExtension = ["jpg", "jpeg", "png", "svg", "PNG", "JPG", "JPEG", "webp"];
    if ($thumbnailName !== '' && $featureName !== '' && !empty($name) && !empty($categories) && !empty($text)) {
        if (in_array($thumbnailExtension, $supportedExtension, true) && in_array($featureExtension, $supportedExtension, true)) {
            if ($thumbnailSize < 5000000 && $featureSize < 500000000) {
                $thumbNewLoc = 'upload/portfolio/thumbnail/';
                $featureNewLoc = 'upload/portfolio/feature/';
                if (!file_exists($thumbNewLoc) && !file_exists($featureNewLoc)) {
                    mkdir($thumbNewLoc, 0777, true);
                    mkdir($featureNewLoc, 0777, true);
                }
                if (isset($kufaDataBase)) {
                    $portfolioInsert = "INSERT INTO `portfolios`( `name`, `category`,`body`,`thumbnail`,`feature` ) VALUES ('$name','$categories','$text','$thumbnailName','$featureName')";
                    $portfolioInsertQuery = $kufaDataBase->Query($portfolioInsert);
                    if ($portfolioInsertQuery === TRUE) {
                        $lastInsertId = $kufaDataBase->insert_id;
                        $newNameThumbnail = $lastInsertId . '~' . $thumbnailName;
                        $newNameFeature = $lastInsertId . '~' . $featureName;
                        $updateThumbnailLoc = 'upload/portfolio/thumbnail/' . $newNameThumbnail;
                        $updateFeaturebLoc = 'upload/portfolio/feature/' . $newNameFeature;
                        move_uploaded_file($thumbnail['tmp_name'], $updateThumbnailLoc);
                        move_uploaded_file($feature['tmp_name'], $updateFeaturebLoc);
                        $updateImages = "UPDATE `portfolios` SET `thumbnail` = '$newNameThumbnail',`feature` = '$newNameFeature' WHERE portfolio_ID = '$lastInsertId'";
                        $updateImagesQuery = $kufaDataBase->query($updateImages);
                        if ($updateImagesQuery === TRUE) {
                            header("Location:portfolio.php");
                        }


                    } else {
                        echo "data Insert Fail";
                    }
                }


            } else {
                echo "image size Error";
            }
        }


    }


}