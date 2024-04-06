    <?php
   
     include "../includes/config.php";
	
	$id = $_POST['id'];
	$category_id = $_POST['category_id'];
    $name = $_POST['name'];
	
	if (!empty($_FILES['file']['tmp_name'])) {
    $extension = PATHINFO($_FILES['file']['name'], PATHINFO_EXTENSION);
    $filename = rand() . rand() . "." . $extension;
    move_uploaded_file($_FILES['file']['tmp_name'], 'image/' . $filename);
}
	
	
	$result = $conn->query("UPDATE products SET category_id = '$category_id',sub_name = '$name' ,image = '$filename' where id = '$id'");

?>

<?php

    header("location:product_list.php");

?>