<?php

require "../views/users/functions/connection.php";

if($_SERVER["REQUEST_METHOD"] != "GET" || !isset($_GET["delCat"])) {
    header("location: ../categories.php");
    exit();
} else {
    $id = $_GET["delCat"];
    $query = "DELETE FROM cat WHERE `id` = $id";
    $run = mysqli_query($connection , $query);
        if($run) {
            header("location: ../categories.php");
        }
}

?>
