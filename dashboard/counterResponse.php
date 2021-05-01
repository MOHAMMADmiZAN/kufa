<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icon = $_POST['icon'];
    $number = $_POST['number'];
    $title = $_POST['title'];
    $countersTable = "CREATE TABLE IF NOT EXISTS `kufa`.`counters` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `icon` VARCHAR(255) NOT NULL , `number` INT NOT NULL , `title` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    if (isset($kufaDataBase, $countersTable)) {
        $countersTableQuery = $kufaDataBase->query($countersTable);
    } else {
        echo "table error";
    }

    $counterInsert= "INSERT INTO `counters`(`icon`,`number`,title)VALUES ('$icon','$number','$title')";
 if (isset($kufaDataBase,$counterInsert)){
     $counterInsertQuery= $kufaDataBase->query($counterInsert);
     if($counterInsertQuery){
         header("Location:counter.php");
     }else{
         echo "Query Failed";
     }
 }else{
     echo "dataBase Not Found";
 }

} else {
    header("Location:counter.php");
}