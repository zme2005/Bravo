<?php
session_start();
require '../views/users/functions/connection.php';

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header('location: ../products.php?product=add');
    exit();
} else {
    extract($_POST);
    $id = $_GET["proId"];

    $errors = [];

    // name validation

    if(empty($name)) {
        $errors['name'] = 'Name is required!';
    } elseif(strlen($name) < 3) {
        $errors['name'] = 'Invalid name length';
    }

    // price validation

    if(empty($price)) {
        $errors['price'] = 'Price is required!';
    } elseif(!is_numeric($price)) {
        $errors['price'] = 'Price must be a number!';
    } elseif($price < 0) {
        $errors['price'] = 'Price cannot be negative!';
    }

    // sale validation

    if(empty($sale)) {
        $errors['sale'] = 'Sale is required!';
    } elseif(!is_numeric($sale)) {
        $errors['sale'] = 'Sale must be a number!';
    } elseif($sale < 0 || $sale > 99) {
        $errors['sale'] = 'Invalid sale value!';
    }

    // count validation

    if(empty($count)) {
        $errors['count'] = 'Count is required!';
    } elseif(!is_numeric($count)) {
        $errors['count'] = 'Count must be a number!';
    } elseif($count < 0) {
        $errors['count'] = 'Count cannot be negative!';
    }

    // category validation

    $query = "SELECT * FROM cat WHERE `id` = '$proCat'";
    $run = mysqli_query($connection , $query);

    if($run) {
        $cat = mysqli_fetch_assoc($run);
    }

    if(empty($proCat)) {
        $errors['proCat'] = 'Category is required!';
    } elseif(!is_numeric($proCat)) {
        $errors['proCat'] = 'Category must be a number!';
    } elseif($proCat != $cat['id']) {
        $errors['proCat'] = 'Invalid Category!';
    }

    // image(s) validation

    if(!isset($_FILES['img']) || empty($_FILES['img']['name'][0])) {
        $errors['img'] = 'Please choose an image!';
    } else {
        $files = $_FILES['img'];
        $allowed_extensions = ['png' , 'jpg' , 'jpeg' , 'webp' , 'avif'];
        $images_names = [];
        $temps = [];

        foreach($files['name'] as $k => $v) {
            $img_name = $files['name'][$k];
            $tmp_name = $files['tmp_name'][$k];
            $extension = strtolower(pathinfo($img_name , PATHINFO_EXTENSION));
            $size = ($files['size'][$k]) / (1024 * 1024);

            if(!in_array($extension , $allowed_extensions)) {
                $errors['img'] = 'Please enter a valid image!';
                break;
            } elseif($size > 3) {
                $errors['img'] = 'Image number ' . $k . "'size is " . $size . 'mb and the max size is 3 mb!';
                break;
            } else {
                $img_name = uniqid() . '.' . $extension;
                $images_names[] = $img_name;
                $temps[] = $tmp_name;
            }

        }
    }
    
    if(empty($errors)) {
        $query0 = "SELECT `img` FROM products WHERE `id` = $id";
        $run0 = mysqli_query($connection , $query0);

        if($run0) {
            $row = mysqli_fetch_assoc($run0);
            $oldProImgs = explode("-" , $row["img"]);
        }

        $stringfied_images = implode("-" , $images_names);

        $query2 = "UPDATE products SET `name` = '$name' ,
        `price` = '$price' ,
        `sale` = '$sale' ,
        `count` = '$count' ,
        `img` = '$stringfied_images' ,
        `cat_id` = '$proCat' WHERE `id` = $id";

        $run2 = mysqli_query($connection , $query2);

        if($run2) {
            foreach($oldProImgs as $img) {
                unlink("../images/" . $img);
            }

            foreach($temps as $key => $val) {
                move_uploaded_file($temps[$key] , '../images/'. $images_names[$key]);
            }
            header('location: ../products.php');
        }

    } else {
        $_SESSION['errors'] = $errors;
        header('location: ../products.php?product=add');
    }

}

?>
