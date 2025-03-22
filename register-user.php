<?php
session_start();
include './config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$consent = isset($_POST['consent']) ? true : false;


try {
    $insert = "INSERT INTO users (username,email,password,consent) VALUES ('{$username}','{$email}','{$password}',$consent)";
    $result = mysqli_query($connection, $insert);
    if ($result) {
        $_SESSION['user_success'] = $username;
        header("Location: $base_url");
    }
} catch (Exception $e) {

    if ($e->getCode() == 1062) {
        $_SESSION['duplicate_entry'] = 'Email already exists!';
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
}