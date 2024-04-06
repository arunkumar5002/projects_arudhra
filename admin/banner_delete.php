<?php

$id = $_GET['id'];
 include "../includes/config.php";
$conn->query("Update banner Set status = '0' WHERE id = '$id'");

?>
<?php

header("location:banner_list.php");
?>