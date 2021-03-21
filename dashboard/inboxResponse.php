<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $statusId = $_GET['id'];
    $spamId = $_GET['spamId'];
    $inboxStatus = "SELECT * FROM `inbox` WHERE `id` LIKE '$statusId'";
    $inboxInsert = "INSERT INTO `inbox`(`name`,`email`,`message`) VALUES('$name','$email','$message')";
    if (isset($kufaDataBase)) {
        $inboxInsertQuery = $kufaDataBase->query($inboxInsert);
        if (isset($inboxInsertQuery)) {
            header("Location:../index.php");
        }


    } else {
        echo 'database nai';
    }


} else {
    echo "chk issue";
}