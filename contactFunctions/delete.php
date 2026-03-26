<?php
require "../admin/views/users/functions/connection.php";

$id = $_GET["msgId"];
$query = "DELETE FROM `messages` WHERE `id` = '$id'";
$run = mysqli_query($connection , $query);

if($run) {
    header("location: ../admin/messages.php");
}

?>
