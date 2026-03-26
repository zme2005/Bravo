<?php
session_start();
require "../admin/views/users/functions/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../contact.php");
    exit();
} else {
    extract($_POST);

    $errors = [];

    // name validation
    if(is_numeric($name)) {
        $errors["name"] = "Name cannot be a number!";
    } elseif(strlen($name) < 3) {
        $errors["name"] = "Name is too short!";
    }

    // email validation
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email is invalid!";
    }

    // phone validation
    if(!is_numeric($phone)) {
        $errors["phone"] = "Invalid phone number!";
    } elseif(strlen($phone) != 11) {
        $errors["phone"] = "Phone number must contain 11 numbers!";
    } elseif(!preg_match("/^01(0|1|2|5)/" , $phone)) {
        $errors["phone"] = "Invalid phone number key!";
    }

    if(empty($errors)) {
        $query = "INSERT INTO `messages`(`name`, `email`, `phone`, `message`, `viewed`) VALUES ('$name','$email','$phone','$msg','0')";
        $run = mysqli_query($connection , $query);
        if($run) {
            echo "<div class='alert alert-primary'>Message sent successfully!</div>";
        }
    } else {
        $_SESSION["errors"] = $errors;
    }

}

?>
