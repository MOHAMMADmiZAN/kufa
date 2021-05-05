<?php
require_once 'inc/dbconfig.php';
$deleteId = $_GET['deleteId'];

$educationDelete = "DELETE FROM `education` WHERE `id` ='$deleteId' ";
if (isset($kufaDataBase)) {
    $educationDeleteQuery = $kufaDataBase->query($educationDelete);
    if ($educationDeleteQuery === TRUE) {
        header("Location:education.php");
    }
}
