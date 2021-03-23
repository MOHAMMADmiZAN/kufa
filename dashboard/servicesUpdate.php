<?php

require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateId = $_POST['u-id'];
    $updateTitle = $_POST['u-name'];
    $updateIcon = $_POST['u-icon'];
    $updateText = $_POST['u-text'];
    $servicesUpdate = "UPDATE `services` SET `title`= '$updateTitle',`icon`='$updateIcon',`details`='$updateText'  WHERE `id` LIKE '$updateId'";
    if (isset($kufaDataBase, $servicesUpdate)) {
        $servicesUpdateQuery = $kufaDataBase->query($servicesUpdate);
        if ($servicesUpdateQuery) {
            header("Location:servicesView.php");
        } else {
            echo ' update Query failed';
        }
    }


} else {
    header('Location:servicesView.php');
}
