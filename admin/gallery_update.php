    <?php
   
     include "../includes/config.php";
	
	$id = $_POST['id'];
	$description = $_POST['description'];
	
		 if(!empty($_FILES['file']['tmp_name'])){
	  $extension = PATHINFO ($_FILES ['file'] ['name'],PATHINFO_EXTENSION);
	  $filename = rand().rand().".".$extension;
	  move_uploaded_file($_FILES['file'] ['tmp_name'],'image/'
	  .$filename);
  }
	
	
	
	$result = $conn->query("UPDATE gallery SET description = '$description',image = '".$filename."' where id = '$id'");

?>

<?php

    header("location:gallery_list.php");

?>