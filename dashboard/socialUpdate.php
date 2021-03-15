<?php

require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateId = $_POST['u-id'];
    $updateName = $_POST['u-name'];
    $updateIcon = $_POST['u-icon'];
    $updateLink = $_POST['u-link'];
    $socialUpdate = "UPDATE `socials` SET `name`= '$updateName',`icon`='$updateIcon',`link`='$updateLink'  WHERE `id` LIKE '$updateId'";
    if (isset($kufaDataBase, $socialUpdate)) {
        $socialUpdateQuery = $kufaDataBase->query($socialUpdate);
        if ($socialUpdateQuery) {
            header("Location:socials.php");
        } else {
            echo ' update Query failed';
        }
    }


} else {
    header('Location:socials.php');
}
