<?php
session_start();
require "../admin/views/users/functions/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../login.php");
    exit();
} else {
    extract($_POST);

    $errors = [];

    // email validation
    if(empty($email)) {
        $errors["email"] = "Email is required!";
    } elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email!";
    }

    // password validation
    if(empty($password)) {
        $errors["password"] = "Password is required!";
    }

    if(empty($errors)) {
        $query = "SELECT * FROM admins WHERE `email` = '$email'";
        $run = mysqli_query($connection , $query);

        if($run) {
            $numRows = mysqli_num_rows($run);
        }

        if($numRows == 0 || !isset($numRows)) {
            $errors["email"] = "This email is not registered!";
            $_SESSION["errors"] = $errors;
            header("location: ../login.php");
            exit();
        } else {
            $user = mysqli_fetch_assoc($run);
            if(!password_verify($password , $user["password"])) {
                $errors["password"] = "Wrong password!";
                header("location: ../login.php");
                exit();
            } elseif($user["role"] != "user") {
                $errors["password"] = "Only users can login here!";
                header("location: ../login.php");
                exit();
            } else {
                $_SESSION["loggedUser"] = $user;
                header("location: ../index.php"); 
            }
        }

    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../login.php");
    }

}

?>
