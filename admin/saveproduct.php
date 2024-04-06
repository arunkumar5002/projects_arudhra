<?php

include "../includes/config.php";

$category_id = $_POST['category_id'];
$name = $_POST['name'];
$status = 1;

if (!empty($_FILES['file']['tmp_name'])) {
    $extension = PATHINFO($_FILES['file']['name'], PATHINFO_EXTENSION);
    $filename = rand() . rand() . "." . $extension;
    move_uploaded_file($_FILES['file']['tmp_name'], 'image/' . $filename);
}

$result = $conn->query("INSERT INTO products (category_id,sub_name, image, status) VALUES ('$category_id', '$name', '$filename', '$status')");



header('location:product_list.php');

?>

