<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<?php
 include "../includes/config.php";
 
 ?>
 
 <?php
    $result = $conn->query("SELECT * FROM gallery where status = 1");
	
?>
<style>
    .img{
		width:200px !important;
		height:150px !important;
		border-radius:0 !important;
	}
</style>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <a href="addgallery.php" class="btn btn-primary mb-2 ml-2">New</a>
			<br>
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Gallery</div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
			    <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover pt-3">
					    <thead>
                            <tr class="">
                                <th>S.No</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
	                    
		                <tbody>
						<?php
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                         ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td style="width:50%"><?php echo $row["description"]; ?></td>
                                <td><?php if($row['image'] !=''){ ?>

<img class="img" src="image/<?php echo $row['image'];?>">
<?php }?></td>
                                <td>
                                <a class="btn btn-primary p-2" href="gallery_edit.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger p-2" href="gallery_delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
					</table>
                </div>
                  
					
              </div>
			</form> 
            </div>
          </div>
            </div>
		</div>	


<?php include "includes/footer.php"; ?>