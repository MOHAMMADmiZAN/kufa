<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $socialName = $_POST['s-name'];
    $socialIcon = $_POST['s-icon'];
    $socialLink = $_POST['s-link'];
    $socialsTable = "CREATE TABLE IF NOT EXISTS `kufa`.`socials` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `icon` VARCHAR(255) NOT NULL , `link` VARCHAR(255) NOT NULL ,`status` INT NOT NULL DEFAULT '1', PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    if (isset($kufaDataBase, $socialsTable)) {
        $socialsTableQuery = $kufaDataBase->query($socialsTable);
    } else {
        echo "table error";
    }
    $socialInsert = "INSERT INTO `socials`(`name`,`icon`,`link`) values ('$socialName','$socialIcon','$socialLink')";

    if (isset($kufaDataBase, $socialInsert)) {
        $socialInsertQuery = $kufaDataBase->query($socialInsert);
        if ($socialInsertQuery) {
            header("Location:socials.php");
        } else {
            echo 'Query failed';
        }
    }


} else {
    header('Location:socials.php');
}



