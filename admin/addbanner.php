<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Categories</div>
            <div class="card-body">
              <form action="savebanner.php" method="POST" enctype="multipart/form-data">
              <div class="row">
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>Title</b></label>
						<input type="text" class="form-control bg-light text-dark" name="title" placeholder="Title">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>SubTitle</b></label>
						<input type="text" class="form-control bg-light text-dark" name="subtitle" placeholder="SubTitle">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>ButtonText</b></label>
						<input type="text" class="form-control bg-light text-dark" name="text" placeholder="SubTitle">
					</div>
					<div class="col-md-6 mt-3">
					    <label class="text-dark"><b>ButtonLink</b></label>
						<input type="text" class="form-control bg-light text-dark" name="link" placeholder="SubTitle">
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