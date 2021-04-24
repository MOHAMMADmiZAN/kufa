<?php
require_once 'inc/dbconfig.php';
$userId = $_GET["userId"];

if (isset($kufaDataBase, $userId)) {
    $feedbackDelete = "DELETE FROM `testimonials` WHERE `id` LIKE '$userId'";
    $feedbackDeleteQuery = $kufaDataBase->Query($feedbackDelete);
    if ($feedbackDeleteQuery) {
        header("Location:testimonial.php");
    } else {
        echo " Query NOT WORKING";
    }

} else {
    header("Location:testimonial.php");
}
