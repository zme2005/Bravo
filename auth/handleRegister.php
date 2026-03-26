<?php

session_start();
require "../admin/views/users/functions/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../register.php");
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

    if(empty($password)) {
        $errors["password"] = "Please enter a password!";
    } elseif(strlen($password) < 3) {
        $errors["password"] = "Invalid passsword length!";
    } elseif(!preg_match("/[A-Z]/" , $password)) {
        $errors["password"] = "Password must have at least one upper case charecter!";
    } elseif(!preg_match("/[a-z]/" , $password)) {
        $errors["password"] = "Password must have at least one lower case charecter!";
    } elseif(!preg_match("/[0-9]{2}/" , $password)) {
        $errors["password"] = "Password must have at least two numbers!";
    } elseif(!preg_match("/[!@#$%^&*()_+\-=\[\]{};':\"\\|,.<>\/?]/" , $password)) {
        $errors["password"] = "Password must have at least one special charecter!";
    }

    if(empty($confirmPassword)) {
        $errors["confirmPassword"] = "Please confirm password";
    } elseif($confirmPassword !== $password) {
        $errors["confirmPassword"] = "Password mismatch";
    }

    if(empty($gender)) {
        $errors["gender"] = "Gender cannot be empty!";
    } elseif($gender !== "male" && $gender !== "female") {
        $errors["gender"] = "Invalid gender";
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
        $password = password_hash($password , PASSWORD_DEFAULT);

        $query = "INSERT INTO admins(`name` , `email` , `password` , `gander` , `role` , `phone`)
        VALUES('$name' , '$email' , '$password' , '$gender' , 'user' , '$phone')";
        $run = mysqli_query($connection , $query);

        if($run) {
            $query2 = "SELECT * FROM admins WHERE `email` = '$email'";
            $run2 = mysqli_query($connection , $query2);
            if($run2) {
                $user = mysqli_fetch_assoc($run2);
            }
            $_SESSION["loggedUser"] = $user;

            header("location: ../index.php");
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../register.php");
        exit();
    }
}

?>
