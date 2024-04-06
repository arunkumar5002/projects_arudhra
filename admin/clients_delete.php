<?php

$id = $_GET['id'];
 include "../includes/config.php";
$conn->query("Update clients Set status = '0' WHERE id = '$id'");

?>
<?php

header("location:clients_list.php");
?>