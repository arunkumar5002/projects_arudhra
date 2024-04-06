<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Gallery</div>
            <div class="card-body">
              <form action="savegallery.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Image(400px * 400px)</b></label>
						<input type="file" class="form-control bg-light" name="file">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Description</b></label>
						<input type="text" class="form-control bg-light" name="description" placeholder="Display Text">
					</div>
					
              </div>
			  <input type="submit" class="btn btn-primary mt-3" value="submit">
			</form> 
            </div>
          </div>
            </div>
		</div>	


<?php include "includes/footer.php"; ?>