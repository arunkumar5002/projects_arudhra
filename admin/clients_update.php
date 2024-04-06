    <?php
   
     include "../includes/config.php";
	
	$id = $_POST['id'];
	$type = $_POST['type'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	
		 if(!empty($_FILES['file']['tmp_name'])){
	  $extension = PATHINFO ($_FILES ['file'] ['name'],PATHINFO_EXTENSION);
	  $filename = rand().rand().".".$extension;
	  move_uploaded_file($_FILES['file'] ['tmp_name'],'image/'
	  .$filename);
  }
	
	
	$result = $conn->query("UPDATE clients SET type = '$type',image = '".$filename."',name = '$name',description = '$description' where id = '$id'");

?>

<?php

    header("location:clients_list.php");

?>