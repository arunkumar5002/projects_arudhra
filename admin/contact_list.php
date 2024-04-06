<?php include "includes/header.php"; ?>
<?php include "includes/leftmenu.php"; ?>

<?php
 include "../includes/config.php";
 
 ?>
 
 <?php
    $result = $conn->query("SELECT * FROM contact where status = 1");
	
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin stretch-card">
              <div class="card mb-4">
            <div class="card-header text-white" style="background-color:#09346B;">Contact</div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
			    <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover pt-3">
					    <thead>
                            <tr class="">
                                <th>S.No</th>
                                <th>Name</th>
								<th>Email</th>
								<th>number</th>
                                <th>Message</th>
                            </tr>
                        </thead>
	                    
		                <tbody>
						<?php
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                         ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row["name"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["number"]; ?></td>
								<td><?php echo $row["message"]; ?></td>

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