<?php include "includes/header.php";

include "includes/config.php"; 

$result = $conn->query("select * from clients where status = 1 AND type = 'partner'");

?>

      <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <div class="banner-text">
          <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="banner-heading">
                      <h1 class="banner-title">PARTNERS</h1>
                      
                    </div>
                </div><!-- Col end -->
              </div><!-- Row end -->
          </div><!-- Container end -->
        </div><!-- Banner text end -->
      </div><!-- Banner area end --> 

      <!--/ Header end -->
      <section id="main-container" class="main-container">
        <div class="container">
          <div class="row">

            <div class="col-12">
              
      
      
              <div class="row shuffle-wrapper">
      		  <?php 
			   while($row = $result->fetch_assoc()){
			?>
                <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                  <div class="project-img-container">
                    <a class="gallery-popup" href="images/partners/hach.jpg">
                      <img class="img-fluid" src="admin/image/<?php echo $row['image'];?>" alt="project-image">
                      
                    </a>
                    <div class="project-item-info">
                      <div class="project-item-info-content">
                        <h3 class="project-item-title">
                          <a href="projects-single.html"><?php echo $row['name'];?></a>
                        </h3>
                       
                      </div>
                    </div>
                  </div>
                </div>
               <?php } ?>
              </div><!-- shuffle end -->
              
             
              
          </div><!-- shuffle end -->
		  
            </div>
      
           
      
          </div><!-- Content row end -->
      
        </div><!-- Conatiner end -->
      </section><!-- Main container end -->

      
      <!-- footer -->

    
<?php include "includes/footer.php";?>
