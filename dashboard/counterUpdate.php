<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateId = $_POST['u-id'];
    $updateIcon = $_POST['u-icon'];
    $updateNumber = $_POST['u-number'];
    $updateTitle = $_POST['u-title'];

    $counterUpdate = "UPDATE `counters` SET `title`= '$updateTitle',`icon`='$updateIcon',`number`='$updateNumber'  WHERE `id` LIKE '$updateId'";
    if (isset($kufaDataBase, $counterUpdate)) {
        $counterUpdateQuery = $kufaDataBase->query($counterUpdate);
        if ($counterUpdateQuery) {
            header("Location:counter.php");
        } else {
            echo ' update Query failed';
        }
    }


} else {
    header('Location:counter.php');
}
