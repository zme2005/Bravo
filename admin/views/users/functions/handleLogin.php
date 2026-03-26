<?php
session_start();
require "connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../../../login.php");
    exit();
} else {
    extract($_POST);
    $errors = [];

    if(empty($adminEmail)) {
        $errors["adminEmail"] = "Email is required!";
    } elseif(!filter_var($adminEmail , FILTER_VALIDATE_EMAIL)) {
        $errors["adminEmail"] = "Invalid email format!";
    }

    if(empty($adminPassword)) {
        $errors["adminPassword"] = "Password is required!";
    }

    if(empty($errors)) {
        $query = "SELECT * FROM `admins` WHERE `email` = '$adminEmail'";
        $run = mysqli_query($connection , $query);
        if($run && mysqli_num_rows($run) > 0) {
            $user = mysqli_fetch_assoc($run);

            $validPassword = false;


            if(isset($user["password"]) && $user["password"] !== "") {
                if(password_verify($adminPassword , $user["password"])) {
                    $validPassword = true;
                } elseif($adminPassword === $user["password"]) {
                    $validPassword = true;
                }
            }

            if(!$validPassword) {
                $errors["adminPassword"] = "Wrong password try again!";
                $_SESSION["errors"] = $errors;
                header("location: ../../../login.php");
                exit();
            } elseif($user["role"] == "user") {
                $errors["adminPassword"] = "Only admins or owner are allowed here!";
                $_SESSION["errors"] = $errors;
                header("location: ../../../login.php");
                exit();
            } else {
                $_SESSION["loggedInUser"] = $user;
                header("location: ../../../users.php");
                exit();
            }
        } else {
            $errors["adminEmail"] = "This email is not registered!";
            $_SESSION["errors"] = $errors;
            header("location: ../../../login.php");
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../../../login.php");
    }
}

?>
