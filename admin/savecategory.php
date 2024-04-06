<?php

    include "../includes/config.php";
	 
	$parent_id = $_POST['parent_id'];
	$name = $_POST['name'];
	$status = 1;
	
	 if(!empty($_FILES['file']['tmp_name'])){
	  $extension = PATHINFO ($_FILES ['file'] ['name'],PATHINFO_EXTENSION);
	  $filename = rand().rand().".".$extension;
	  move_uploaded_file($_FILES['file'] ['tmp_name'],'image/'
	  .$filename);
  }
	
	
	
	$result = $conn->query("INSERT INTO category (parent_id,name,image,status)values('$parent_id','$name','".$filename."','$status')");
	
    //print_r($result);
	//exit();
	
?>

<?php

    header('location:category_list.php');

?>