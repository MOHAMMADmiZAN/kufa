<?php
require_once 'inc/dbconfig.php';
require_once 'inc/session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $socialName = $_POST['s-name'];
    $socialIcon = $_POST['s-icon'];
    $socialLink = $_POST['s-link'];
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



