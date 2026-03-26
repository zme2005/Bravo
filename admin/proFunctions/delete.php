<?php
require '../views/users/functions/connection.php';

if(!isset($_GET["delPro"])) {
    header("location: ../products.php");
    exit();
} else {
    $id = $_GET["delPro"];

    $query0 = "SELECT `img` FROM products WHERE `id` = '$id'";
    $run0 = mysqli_query($connection , $query0);

    if($run0) {
        $row = mysqli_fetch_assoc($run0);
        $oldImgs = explode("-" , $row["img"]);

        foreach($oldImgs as $val) {
            unlink("../images/" . $val);
        }
    }

    $query = "DELETE FROM products WHERE `id` = '$id'";
    $run = mysqli_query($connection , $query);

    if($run) {
        header("location: ../products.php");
    }
}

?>
