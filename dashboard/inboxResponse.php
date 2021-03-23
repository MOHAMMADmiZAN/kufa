<?php
require_once 'inc/dbconfig.php';
function xssCleaner($inputStr)
{
    $returnStr = str_replace(array('<', '>', "'", '"', ')', '('), array('&lt;', '&gt;', '&apos;', '&#x22;', '&#x29;', '&#x28;'), $inputStr);
    $returnStr = str_ireplace('%3Cscript', '', $returnStr);
    return $returnStr;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $filterMsg = xssCleaner($message);
    $inboxInsert = "INSERT INTO `inbox`(`name`,`email`,`message`) VALUES('$name','$email','$filterMsg')";
    if (isset($kufaDataBase)) {
        $inboxInsertQuery = $kufaDataBase->query($inboxInsert);
        if (isset($inboxInsertQuery)) {
            header("Location:../index.php#contact");
        }


    } else {
        echo 'database nai';
    }


} else {
    echo "chk issue";
}