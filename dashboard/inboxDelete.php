<?php
require_once 'inc/dbconfig.php';
$deletedId = $_GET['deletedId'];
$recoverId = $_GET['recoverId'];

if (isset($kufaDataBase)) {

    /// Permanent Delete Query ///
    if (isset($deletedId)) {
        /// delete query ///
        $delete = "DELETE FROM `inbox` WHERE `id` = '$deletedId'";
        if (isset($delete)) {
            $deleteQuery = $kufaDataBase->query($delete);
            $kufaDataBase->close();
            if (isset($deleteQuery)) {
                if ($deleteQuery) {
                    header("Location:inboxTask.php");
                } else {
                    echo "DELETE NOT WORKING";
                }
            }

        }
    }
    if (isset($recoverId)) {
        // recover query //
        $recover = "UPDATE `inbox` SET `tashStatus` = 1 WHERE `id` = '$recoverId'";
        if (isset($recover)) {
            $recoverQuery = $kufaDataBase->query($recover);
            $kufaDataBase->close();
            if (isset($recoverQuery)) {
                if ($recoverQuery) {
                    header("Location:inboxTask.php");
                } else {
                    echo "RECOVER NOT WORKING";
                }
            }
        }
    }

}

