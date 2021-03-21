<?php
session_start();
require_once 'inc/dbconfig.php';
$id = $_GET['id'];
$inboxSelect = "SELECT * FROM `inbox` WHERE `id` = '$id'";
if (isset($kufaDataBase)) {
    $inboxSelectQuery = $kufaDataBase->query($inboxSelect);
    if (isset($inboxSelectQuery)) {
        $inboxSelectQueryAssoc = $inboxSelectQuery->fetch_assoc();
        if (isset($inboxSelectQueryAssoc)) {
            if ($inboxSelectQueryAssoc['readStatus'] != 1) {
                $inboxUpdate = "UPDATE `inbox` SET `readStatus` = 1 WHERE `id` = '$id'";
                $inboxUpdateQuery = $kufaDataBase->query($inboxUpdate);
                if (isset($inboxUpdateQuery)) {
                    header("Location:inbox.php");
                }


            }
            if ($inboxSelectQueryAssoc['readStatus'] != 2) {
                $inboxUpdate = "UPDATE `inbox` SET `readStatus` = 2 WHERE `id` = '$id'";
                $inboxUpdateQuery = $kufaDataBase->query($inboxUpdate);
                if (isset($inboxUpdateQuery)) {
                    header("Location:inbox.php");
                }


            }

        }

    }


}