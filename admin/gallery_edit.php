<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

 <?php

$id = $_GET['id'];
 include "../includes/config.php";
$result = $conn->query("SELECT * FROM gallery where id = '$id'");
$row = $result->fetch_assoc();

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header">Gallery</div>
            <div class="card-body">
              <form action="gallery_update.php" method="POST" enctype="multipart/form-data">
			  <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $row['id'];?>">
              <div class="row">
                    <div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Image(400px * 400px)</b></label>
						<input type="file" class="form-control bg-light" name="file">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Description</b></label>
						<input type="text" class="form-control bg-light" name="description" placeholder="Display Text" value="<?php echo $row['description'];?>">
					</div>
					
              </div>
			  <input type="submit" class="btn btn-primary mt-3" value="update">
			</form> 
            </div>
          </div>
            </div>
		</div>	


<?php include "includes/footer.php"; ?>