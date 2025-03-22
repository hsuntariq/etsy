<?php
session_start();
include '../config.php';

// Escape input values to prevent SQL injection
$name = mysqli_real_escape_string($connection, $_POST['name']);
$color = mysqli_real_escape_string($connection, $_POST['color']);
$barcode = mysqli_real_escape_string($connection, $_POST['barcode']);
$editor = mysqli_real_escape_string($connection, $_POST['editor']);  // Description
$base_price = floatval($_POST['base_price']);  // Convert to float
$discounted_price = floatval($_POST['discount_price']);  // Convert to float
$tax = isset($_POST['tax']) ? 1 : 0;  // Convert to integer (1 or 0)
$stock = isset($_POST['stock']) ? 1 : 0;  // Convert to integer (1 or 0)
$category_id = intval($_POST['category_id']);  // Convert to integer
$status = mysqli_real_escape_string($connection, $_POST['status']);
$tags = mysqli_real_escape_string($connection, $_POST['tags']);

// Handle image upload
$product_image_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

// Move the file to the folder
move_uploaded_file($tmp_name, '../product_images/' . $product_image_name);

// SQL Query (Fixed)
$insert = "INSERT INTO product (name, color, barcode, description, base_price, discounted_price, tax, stock, image, category_id, status, tags) 
           VALUES ('$name', '$color', '$barcode', '$editor', $base_price, $discounted_price, $tax, $stock, '$product_image_name', $category_id, '$status', '$tags')";

// Execute Query
$result = mysqli_query($connection, $insert);

if ($result) {
    $_SESSION['product_success'] = 'Product added Successfully!';
}

// Redirect back



header("Location: {$_SERVER['HTTP_REFERER']}");