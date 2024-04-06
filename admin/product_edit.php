<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

 <?php

$id = $_GET['id'];
 include "../includes/config.php";
$result = $conn->query("SELECT * FROM products where id = '$id'");
$row = $result->fetch_assoc();

?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Categories</div>
            <div class="card-body">
              <form action="saveproduct.php" method="POST" enctype="multipart/form-data">
              <div class="row">
			  <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php echo $row['id'];?>">
			        <div class="col-md-6 mt-3">
						<label class="text-dark"><b>Parent Id</b></label>
						<select class="form-control bg-light text-dark" name="category_id">
						<?php include "../includes/config.php";
						$result = $conn->query("SELECT *FROM category where status = 1");
						while($row = $result->fetch_assoc()){
							
						?>
                        <option name="category_id" value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
						<?php } ?>
                        </select>
					</div>
					
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Name</b></label>
						<input type="text" class="form-control bg-light text-dark" name="name" placeholder="Name" value="<?php echo $row['sub_name'];?>">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Image</b></label>
						<input type="file" class="form-control bg-light text-dark" name="file">
					</div>
					
              </div>
			  <input type="submit" class="btn btn-primary mt-3" value="submit">
			</form> 
            </div>
          </div>
            </div>
		</div>


<?php include "includes/footer.php"; ?>