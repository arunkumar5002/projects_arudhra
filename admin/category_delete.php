<?php

$id = $_GET['id'];
 include "../includes/config.php";
$conn->query("Update category Set status = '0' WHERE id = '$id'");

?>
<?php

header("location:category_list.php");
?>