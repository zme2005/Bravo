<?php
session_start();
require "connection.php";
$id = $_GET["updateUser"];

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../../../users.php?");
    exit();
} else {
    extract($_POST);

    $errors = [];

    if(empty($name)) {
        $errors["name"] = "Please enter your name!";
    } elseif(strlen($name) < 3) {
        $errors["name"] = "Invalid name length!";
    } elseif(is_numeric($name)) {
        $errors["name"] = "Name cannot be a number!";
    }

    if(empty($email)) {
        $errors["email"] = "Please enter your email!";
    } elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format!";
    }

    if(empty($gender)) {
        $errors["gender"] = "Gender cannot be empty!";
    } elseif($gender !== "male" && $gender !== "female") {
        $errors["gender"] = "Invalid gender";
    }
    
    if(empty($role)) {
        $errors["role"] = "Role cannot be empty!";
    } elseif($role !== "owner" && $role !== "admin" && $role !== "user") {
        $errors["role"] = "Invalid role";
    }

    if(empty($phone)) {
        $errors["phone"] = "Phone number is required!";
    } elseif(!is_numeric($phone)) {
        $errors["phone"] = "Invalid phone number!";
    } elseif(strlen($phone) != 11) {
        $errors["phone"] = "Phone number must contain 11 numbers!";
    } elseif(!preg_match("/^01(0|1|2|5)/" , $phone)) {
        $errors["phone"] = "Invalid phone number key!";
    }

    if(empty($errors)) {
        $query = "SELECT `password` FROM admins WHERE `id` = $id";
        $run = mysqli_query($connection , $query);
        $user = mysqli_fetch_assoc($run);
        $oldPassword = $user["password"];

        if(isset($password) && !empty($password)) {
            $password = password_hash($password , PASSWORD_DEFAULT);
        } else {
            $password = $oldPassword;
        }

        $query = "UPDATE admins SET `name` = '$name' ,
        `email` = '$email' ,
        `password` = '$password' ,
        `gander` = '$gender' ,
        `role` = '$role' ,
        `phone` = '$phone' WHERE `id` = $id";
        $run = mysqli_query($connection , $query);

        if($run) {
            header("location: ../../../users.php?");
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../../../users.php?editUser=$id");
        exit();
    }
}

?>
