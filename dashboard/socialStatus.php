<?php
session_start();
require_once 'inc/dbconfig.php';
$id = $_GET['id'];
$socialSelect = "SELECT * FROM `socials` WHERE `id` = '$id'";
if (isset($kufaDataBase)) {
    $socialSelectQuery = $kufaDataBase->query($socialSelect);
    $socialSelectQueryAssoc = $socialSelectQuery->fetch_assoc();



    if ($socialSelectQueryAssoc['status'] != 2) {
        $socialUpdate = "UPDATE `socials` SET `status`= 2 WHERE id = '$id'";
        if (isset($socialUpdate)) {
            $socialUpdateQuery = $kufaDataBase->query($socialUpdate);
            header("Location:socials.php");
        }
    }

    if ($socialSelectQueryAssoc['status'] != 1) {
        $socialUpdateT = "UPDATE `socials` SET `status`= 1 WHERE id = '$id'";
        if (isset($socialUpdateT)) {
            $socialUpdateTQuery = $kufaDataBase->query($socialUpdateT);
            header("Location:socials.php");
        }


    }
}