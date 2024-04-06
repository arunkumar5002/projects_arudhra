<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Categories</div>
            <div class="card-body">
              <form action="savecategory.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Parent</b></label>
						<select class="form-control bg-light text-dark" name="parent_id">
						<option name="parent_id" value="0">Parent category</option>
						<?php include "../includes/config.php";
						$result = $conn->query("SELECT *FROM category where status = 1 AND parent_id = 0");
						while($row = $result->fetch_assoc()){
						?>
                        <option name="parent_id" value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
						<?php } ?>
                        
                        </select>
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Name</b></label>
						<input type="text" class="form-control bg-light text-dark" name="name" placeholder="Name" required>
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