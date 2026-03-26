<?php

$id = $_GET["deleteUser"];
require 'connection.php';
$query = "DELETE FROM admins WHERE `id` = $id";
$run = mysqli_query($connection , $query);

if($run) {
    header("location: ../../../users.php?");
}

?>
