<?php
session_start();

    include "includes/config.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	$status = 1;
	
	//print_r($_POST);
	//exit();
	
	$result = $conn->query("INSERT INTO contact
	(name,email,number,message,status)values
	('$name','$email','$number','$message','$status')");
	
	if($result){
				$_SESSION['status'] = "Submitted Successfully";
				header('location:contact.php');
			}else{
				echo "somenthing wrong";
			}
	
?>
