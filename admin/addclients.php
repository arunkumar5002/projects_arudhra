<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Clients</div>
            <div class="card-body">
              <form action="saveclients.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                    <div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Type</b></label><br>
						<input type="radio" name="type" value="client">Client
						<input type="radio" name="type" value="partner">Partner
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Name</b></label><br>
						<input type="text" class="form-control bg-light" name="name" placeholder="name">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Description</b></label><br>
						<input type="text" class="form-control bg-light" name="description" placeholder="description">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Image(300px*300px)</b></label>
						<input type="file" class="form-control bg-white" name="file">
					</div>
					
              </div>
			  <input type="submit" class="btn btn-primary mt-3" value="submit">
			</form> 
            </div>
          </div>
            </div>
		</div>	


<?php include "includes/footer.php"; ?>