<?php include "includes/header.php";

include "includes/config.php"; 

$result = $conn->query("select * from gallery where status = 1");


?>

      <div
        id="banner-area"
        class="banner-area"
        style="background-image: url(images/banner/banner4.jpg)"
        
      >
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mt-5">
              <div class="banner-heading">
                <h1 class="banner-title">GALERY</h1>
              </div>
            </div>
            <!-- Col end -->
          </div>
          <!-- Row end -->
        </div>
        <!-- Container end -->
      </div>
       
        <!-- Banner text end -->
      </div>
      <!-- Banner area end -->
      <!-- galery list -->
      <div class="container mt-5">
        <div class="row">
		<?php 
			   while($row = $result->fetch_assoc()){
			?>
          <div class="col-lg-4 col-md-4 mb-4">
            <div class="galery_deck">
              <div class="gallery-item" data-index="1">
                <img src="admin/image/<?php echo $row['image'];?>" />
                
                  <h6 class="text-center mb-0">
                    <?php echo $row["description"]; ?>
                    
                  </h6>
              
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    

      <!-- galery list end -->

      <!-- footer -->

<?php include "includes/footer.php";?>
