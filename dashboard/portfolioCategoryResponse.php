<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = strtoupper($_POST['c-name']);
    if (isset($kufaDataBase)) {
        $createCategoriesTable = "CREATE TABLE IF NOT EXISTS `kufa`. `categories` (`id` INT NOT NULL AUTO_INCREMENT, `c_name` VARCHAR(255) NOT NULL,PRIMARY KEY (`id`) )ENGINE = InnoDB;";
        $createCategoriesTableQuery = $kufaDataBase->Query($createCategoriesTable);

    } else {
        echo "TABLE Error";
    }


    $categoryInsert = "INSERT INTO `categories`(`c_name`) values ('$categoryName')";

    if (isset($kufaDataBase, $categoryInsert,$createCategoriesTableQuery)) {
        $categoryInsertQuery = $kufaDataBase->query($categoryInsert);
        if ($categoryInsertQuery === true) {
            header("Location:portfolio.php");
        } else {
            echo 'data Query Failed';
        }
    } else {
        echo " Data Insert error";
    }
}