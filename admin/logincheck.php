<?php
   include "../includes/config.php";
   session_start();
   
   

      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         
         $_SESSION['login'] = $myusername;
         
         header("location: dashboard.php");
      }else {
         header("location: index.php");
      }
   
?>


