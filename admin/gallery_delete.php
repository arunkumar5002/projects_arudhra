<?php

$id = $_GET['id'];
 include "../includes/config.php";
$conn->query("Update gallery Set status = '0' WHERE id = '$id'");

?>
<?php

header("location:gallery_list.php");
?>