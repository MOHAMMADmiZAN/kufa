<?php
require_once 'inc/dbconfig.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $degree = $_POST['degree'];
    $percents = $_POST['percents'];
    $year = $_POST['date'];


    if (isset($kufaDataBase)) {
        $createEducationTable = "CREATE TABLE IF NOT EXISTS `kufa`. `education` (`id` INT NOT NULL AUTO_INCREMENT, `degree` VARCHAR(255) NOT NULL,`percents` VARCHAR(255) NOT NULL,`year` INT NOT NULL,PRIMARY KEY (`id`) )ENGINE = InnoDB;";
        $createEducationTableQuery = $kufaDataBase->Query($createEducationTable);

    } else {
        echo "TABLE Error";
    }
    if (isset($kufaDataBase)) {
        $educationInsert = "INSERT INTO `education` (`degree`, `percents`, `year`) VALUES ('$degree','$percents','$year')";
        $educationInsertQuery = $kufaDataBase->Query($educationInsert);
        if ($educationInsertQuery === TRUE) {
            header("Location:education.php");
        } else {
            echo "insert fail";
        }
    }

}else{
    header("Location:education.php");
}
