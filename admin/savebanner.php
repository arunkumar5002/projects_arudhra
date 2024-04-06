<?php

    include "../includes/config.php";
	
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$text = $_POST['text'];
	$link = $_POST['link'];
	$status = 1;
	
	 if(!empty($_FILES['file']['tmp_name'])){
	  $extension = PATHINFO ($_FILES ['file'] ['name'],PATHINFO_EXTENSION);
	  $filename = rand().rand().".".$extension;
	  move_uploaded_file($_FILES['file'] ['tmp_name'],'image/'
	  .$filename);
  }
	
	//print_r($_POST);
	//exit();
	
	$result = $conn->query("INSERT INTO banner (title,subtitle,text,link,image,status)values('$title','$subtitle','$text','$link','".$filename."','$status')");
	
?>

<?php

    header('location:banner_list.php');

?>