<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryName = $_POST['c-name'];

    $categoryInsert = "INSERT INTO `categories`(`name`) values ('$categoryName')";
    if (isset($kufaDataBase, $categoryInsert)) {
        $categoryInsertQuery = $kufaDataBase->query($categoryInsert);
        if ($categoryInsertQuery === true) {
            header("Location:portfolio.php");
        }
    } else {
        echo " Data Insert error";
    }
}