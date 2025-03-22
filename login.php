<?php
session_start();
include './config.php';
$email = $_POST['email'];
$password = $_POST['password'];


// find the email and password that matches

$findUser = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";

$result = mysqli_query($connection, $findUser);
if (mysqli_num_rows($result) > 0) {
    foreach ($result as $item) {
        $_SESSION['user_success'] = $item['username'];
        $_SESSION['role'] = $item['role'];
    }
    if ($item['role'] == 'admin') {
        header("Location: $base_url/admin/dashboard.php");
    } else {
        header("Location: /");
    }
} else {
    $_SESSION['invalid_credentials'] = 'Invalid Credentials';
    header("Location: {$_SERVER['HTTP_REFERER']}");
}