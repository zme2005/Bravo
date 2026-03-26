<?php
require "../admin/views/users/functions/connection.php";

$id = $_POST["id"];
$query = "UPDATE `messages` SET `viewed` = '1' WHERE `id` = '$id'";
$run = mysqli_query($connection , $query);


?>
