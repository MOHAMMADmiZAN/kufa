<?php
require_once 'dashboard/inc/dbconfig.php';
$social = "SELECT * FROM `socials` WHERE `status` LIKE 1 LIMIT 5";
$services = "SELECT * FROM `services` WHERE `status` LIKE 1 LIMIT 6";
$counters = "SELECT * FROM `counters`  LIMIT 4 ";
$brands = "SELECT * FROM `brands`";
$feedback = "SELECT * FROM `testimonials`";
$portfolio = "SELECT * FROM `portfolios` INNER JOIN `categories` ON portfolios.categories_id = categories.id";
$education = "SELECT * FROM `education`";


if (isset($kufaDataBase)) {
    $socialQuery = $kufaDataBase->Query($social);
    $servicesQuery = $kufaDataBase->Query($services);
    $countQuery = $kufaDataBase->Query($counters);
    $brandQuery = $kufaDataBase->Query($brands);
    $feedbackQuery = $kufaDataBase->Query($feedback);
    $portfolioQuery = $kufaDataBase->Query($portfolio);
    $educationQuery = $kufaDataBase->Query($education);

}

?>


<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .l-46 {
            line-height: 46px;
        }

        .h-fix {
            height: fit-content;
        }
    </style>
</head>
