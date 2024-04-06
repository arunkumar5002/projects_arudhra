<?php

    include "../includes/config.php";
	
	$type = $_POST['type'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$status = 1;
	
	 if(!empty($_FILES['file']['tmp_name'])){
	  $extension = PATHINFO ($_FILES ['file'] ['name'],PATHINFO_EXTENSION);
	  $filename = rand().rand().".".$extension;
	  move_uploaded_file($_FILES['file'] ['tmp_name'],'image/'
	  .$filename);
  }
	
	//print_r($_POST);
	//exit();
	
	$result = $conn->query("INSERT INTO clients (type,image,description,name,status)values('$type','".$filename."','$description','$name','$status')");
	
?>

<?php

    header('location:clients_list.php');

?>