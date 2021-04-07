<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icon = $_POST['icon'];
    $number = $_POST['number'];
    $title = $_POST['title'];

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