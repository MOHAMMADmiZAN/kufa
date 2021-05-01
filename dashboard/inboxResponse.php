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
    $inboxTable = "CREATE TABLE IF NOT EXISTS `kufa`.`inbox` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `messages` TEXT NOT NULL ,`readStatus` INT NOT NULL DEFAULT '1',`tashStatus` INT NOT NULL DEFAULT '1', PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    if (isset($kufaDataBase, $inboxTable)) {
        $inboxTableQuery = $kufaDataBase->query($inboxTable);
    } else {
        echo "table error";
    }
    
    $inboxInsert = "INSERT INTO `inbox` (`name`,`email`,`messages`) VALUES ('$name','$email','$filterMsg')";
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