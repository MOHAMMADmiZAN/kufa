<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servicesName = $_POST['s-name'];
    $servicesIcon = $_POST['s-icon'];
    $servicesText = $_POST['s-text'];
    $servicesInsert = "INSERT INTO `services`(`title`,`icon`,`details`) values ('$servicesName','$servicesIcon','$servicesText')";

    if (isset($kufaDataBase, $servicesInsert)) {
        $servicesInsertQuery = $kufaDataBase->query($servicesInsert);
        if ($servicesInsertQuery) {
            header("Location:servicesView.php");
        } else {
            echo 'Query failed';
        }
    }


} else {
    header('Location:servicesView.php');
}



