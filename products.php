<?php include "includes/header.php";

include "includes/config.php"; 

$result = $conn->query("select * from category where status = 1");


?>
      <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner6.jpg)">
        <div class="banner-text">
          <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="banner-heading">
                      <h1 class="banner-title">OUR PRODUCTS</h1>
                      
                    </div>
                </div><!-- Col end -->
              </div><!-- Row end -->
          </div><!-- Container end -->
        </div><!-- Banner text end -->
      </div><!-- Banner area end --> 

      <!--/ Header end -->
      <!-- single product -->
     <div class="container mt-5 mb-5">
      <div class="row">
	  <?php 
			   while($row = $result->fetch_assoc()){
			?>
        <div class="col-lg-4 col-md-6">
          <a href="">
            <div class="product_slide">
              <div class="product_view">
                <img class="inner-img" src="admin/image/<?php echo $row['image'];?>" alt="water_quality">
              </div>
              <h4 class="ts-name text-center mb-0"><?php echo $row["name"]; ?></h4>

            </div>
          </a>

        </div>
       <?php } ?>
      </div>
     </div>
     
     
      
      
      <!-- single product end -->
      

      
      <!-- footer -->

<?php include "includes/footer.php";?>
