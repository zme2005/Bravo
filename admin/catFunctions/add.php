<?php
require "../views/users/functions/connection.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../categories.php");
    exit();
} else {
    extract($_POST);

    $errors = [];
    
    if(empty($catName)) {
        $errors["catName"] = "Category name is required!";
    }

    if(empty($errors)) {
        $query = "INSERT INTO cat(`name`) VALUES('$catName')";
        $run = mysqli_query($connection , $query);
        if($run) {
            header("location: ../categories.php");
        }
    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../categories.php");
    }
}

?>
