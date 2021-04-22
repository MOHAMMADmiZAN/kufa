<?php
require_once 'inc/dbconfig.php';
$userId = $_GET["userId"];

if (isset($kufaDataBase) && isset($userId)) {
    $brandDelete = "DELETE FROM `brands` WHERE `id` LIKE '$userId'";
    $brandDeleteQuery = $kufaDataBase->Query($brandDelete);
    if ($brandDeleteQuery) {
        header("Location:brand.php");
    } else {
        echo " Query NOT WORKING";
    }

} else {
    header("Location:brand.php");
}
