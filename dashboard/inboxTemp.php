<?php
require_once 'inc/dbconfig.php';
$id = $_GET['id'];
$inboxSelect = "SELECT * FROM `inbox` WHERE `id` = '$id'";
if (isset($kufaDataBase)) {
    $inboxSelectQuery = $kufaDataBase->query($inboxSelect);
    if (isset($inboxSelectQuery)) {
        $taskUpdate = "UPDATE `inbox` SET `tashStatus` = 2 WHERE `id` = '$id'";
        $kufaDataBase->query($taskUpdate);
        header("Location:inbox.php");
    }

}