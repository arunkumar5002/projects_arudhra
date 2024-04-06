<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

 <?php

$id = $_GET['id'];
 include "../includes/config.php";
$result = $conn->query("SELECT * FROM clients where id = '$id'");
$row = $result->fetch_assoc();

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header">Clients</div>
            <div class="card-body">
              <form action="clients_update.php" method="POST" enctype="multipart/form-data">
			  <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $row['id'];?>">
              
              <div class="row">
                    <div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Name</b></label><br>
						<input type="radio" name="type" value="client"<?php
						    if($row["type"]=='client')
							{
								echo "checked";
							}
						?>
						>Client
						<input type="radio" name="type" value="partner"<?php
						    if($row["type"]=='partner')
							{
								echo "checked";
							}
						?>
						>Partner
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Name</b></label><br>
						<input type="text" class="form-control bg-light" name="name" placeholder="name" value="<?php echo $row['name'];?>">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Description</b></label><br>
						<input type="text" class="form-control bg-light" name="description" placeholder="description" value="<?php echo $row['description'];?>">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Image(300px*300px)</b></label>
						<input type="file" class="form-control bg-white" name="file">
					</div>
					
              </div>
			  <input type="submit" class="btn btn-primary mt-3" value="update">
			</form> 
            </div>
          </div>
            </div>
		</div>	


<?php include "includes/footer.php"; ?>