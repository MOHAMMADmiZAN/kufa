<?php
require_once './includes/dataBase.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    /// Login Verify Query ///
    $logVerify = "SELECT COUNT(*) as emailverified,password,id,email,status FROM `users` WHERE `email` =  '$email' and `status` LIKE 1";
    $logVerifyTemp = "SELECT COUNT(*) as emailverified,password,id,email,status FROM `users` WHERE `email` =  '$email' and `status` LIKE 2";
    if (isset($dataBase)) {
        $logVerifyQuery = $dataBase->query($logVerify);
        $logVerifyTemp = $dataBase->query($logVerifyTemp);
        if (isset($logVerifyTemp)) {
            $logVerifyTempAssoc = $logVerifyTemp->fetch_assoc();
            if ($logVerifyTempAssoc['emailverified'] > 0) {
                $_SESSION['tempUser'] = 'Your Email Has been Delete From Active User Database , Please Contact your administrator';
                header("Location:login.php");
            }
        }
        if (isset($logVerifyQuery)) {
            $logVerifyAssoc = $logVerifyQuery->fetch_assoc();
            if (isset($logVerifyAssoc) && $logVerifyAssoc['emailverified'] > 0) {
                $dbPassword = $logVerifyAssoc['password'];
                if (isset($dbPassword)) {
                    $logPasswordVerify = Password_verify($password, $dbPassword);
                    if ($logPasswordVerify) {
                        $_SESSION['email'] = $logVerifyAssoc['email'];
                        $_SESSION['id'] = $logVerifyAssoc['id'];
                        header("Location:dashboard/index.php");
                    } else {
                        $_SESSION['passwordError'] = "password Invalid";
                        header("Location:login.php");
                    }

                } else {
                    die("dbpassword nai");
                }

            } else {
                $_SESSION['EmailError'] = 'Not yet a member? <a href="register.php" class="tx-info">Sign Up</a>';
                header("Location:login.php");
            }

        }

    } else {
        echo "dataBase Error";
    }


} else {
    header("Location:login.php");
}