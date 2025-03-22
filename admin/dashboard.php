<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/3984/3984329.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles.css">
    <?php include '../boot_css.php' ?>
    <title>Admin Dashboard</title>
    <style>
    body {
        overflow-x: hidden !important;
    }
    </style>
</head>

<body>

    <?php

    if (!isset($_SESSION['user_success'])) {
        header("Location: /");
    }

    if (isset($_SESSION['user_success']) && isset($_SESSION['role'])) {
        if ($_SESSION['role'] !== 'admin') {
            header("Location: /");
        }
    }
    ?>


    <div class="p-0 m-0" style="background-color: #F2EDF3;">
        <?php include './admin-nav.php' ?>
        <?php include './admin-main-content.php' ?>
    </div>




    <?php include '../boot_js.php' ?>


</body>



</html>