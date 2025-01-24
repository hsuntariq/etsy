<?php
session_start();
include '../config.php';

$name = $_POST['name'];

$filename = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];


// store the image in the local storage

move_uploaded_file($tmp_name, '../category_images/' . $filename);


// query

$insert = "INSERT INTO category (name,image) VALUES ('{$name}','{$filename}')";

// execute / go

$res = mysqli_query($connection, $insert);


if ($res) {
    $_SESSION['success_category'] = 'Category added successfully';
}



header("Location: $base_url/admin/add-categories.php");