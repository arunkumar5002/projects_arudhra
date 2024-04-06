<?php

    include "../includes/config.php";
	
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
	
	$result = $conn->query("INSERT INTO gallery (description,image,status)values('$description','".$filename."','$status')");
	
?>

<?php

    header('location:gallery_list.php');

?>