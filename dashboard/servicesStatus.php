<?php
session_start();
require_once 'inc/dbconfig.php';
$id = $_GET['id'];
$serviceselect = "SELECT * FROM `services` WHERE `id` = '$id'";
if (isset($kufaDataBase)) {
    $serviceselectQuery = $kufaDataBase->query($serviceselect);
    $serviceselectQueryAssoc = $serviceselectQuery->fetch_assoc();

    if ($serviceselectQueryAssoc['status'] != 2) {
        $servicesUpdate = "UPDATE `services` SET `status`= 2 WHERE id = '$id'";
        if (isset($servicesUpdate)) {
            $servicesUpdateQuery = $kufaDataBase->query($servicesUpdate);
            header("Location:servicesView.php");
        }
    }

    if ($serviceselectQueryAssoc['status'] != 1) {
        $servicesUpdateT = "UPDATE `services` SET `status`= 1 WHERE id = '$id'";
        if (isset($servicesUpdateT)) {
            $servicesUpdateTQuery = $kufaDataBase->query($servicesUpdateT);
            header("Location:servicesView.php");
        }


    }
}