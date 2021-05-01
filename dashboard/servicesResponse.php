<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servicesName = $_POST['s-name'];
    $servicesIcon = $_POST['s-icon'];
    $servicesText = $_POST['s-text'];
    $servicesTable = "CREATE TABLE IF NOT EXISTS `kufa`.`services` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `icon` VARCHAR(255) NOT NULL , `details` VARCHAR(255) NOT NULL ,`status` INT NOT NULL DEFAULT '1', PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    if (isset($kufaDataBase, $servicesTable)) {
        $servicesTableQuery = $kufaDataBase->query($servicesTable);
    } else {
        echo "table error";
    }
    $servicesInsert = "INSERT INTO `services`(`title`, `icon`, `details`) values ('$servicesName','$servicesIcon','$servicesText')";

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



