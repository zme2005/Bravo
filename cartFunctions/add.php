<?php

session_start();
require "../admin/views/users/functions/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("location: ../index.php");
    exit();
} else {
    $proId = $_POST["proId"];
    $userId = $_SESSION["loggedUser"]["id"];

    $query = "SELECT * FROM `cart` WHERE `product_id` = '$proId' AND `user_id` = '$userId'";
    $run = mysqli_query($connection , $query);

    if(mysqli_num_rows($run) == 1) {
        $pro = mysqli_fetch_assoc($run);
        $count = $pro["count"] + 1;
        $query_update = "UPDATE `cart` SET `count` = $count WHERE `product_id` = '$proId' AND `user_id` = '$userId'";
        $run_update = mysqli_query($connection , $query_update);
    } else {
        $query_insert = "INSERT INTO `cart`(`product_id`, `user_id`, `count`) VALUES ('$proId','$userId', 1)";
        $run_insert = mysqli_query($connection , $query_insert);
    }

}

?>
