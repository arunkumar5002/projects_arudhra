<?php

$id = $_GET['id'];
 include "../includes/config.php";
$conn->query("Update products Set status = '0' WHERE id = '$id'");

?>
<?php

header("location:product_list.php");
?>