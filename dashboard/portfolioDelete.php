<?php
require_once 'inc/dbconfig.php';
$id = $_GET['userId'];

if (isset($kufaDataBase)) {
    $portfolioDelete = "DELETE FROM `portfolios` WHERE `portfolio_ID` LIKE '$id'";
    $portfolioDeleteQuery = $kufaDataBase->query($portfolioDelete);
    if ($portfolioDeleteQuery === TRUE) {
        header('Location:portfolio.php');
    }

}

