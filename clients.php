<?php include "includes/header.php";

include "includes/config.php"; 

$result = $conn->query("select * from clients where status = 1 AND type = 'client'");


?>

      <div
        id="banner-area"
        class="banner-area"
        style="background-image: url(images/banner/banner7.jpg)"
      >
        <div class="banner-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mt-5">
                <div class="banner-heading">
                  <h1 class="banner-title">CLIENTS</h1>
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

      <!--/ Header end -->

      <!-- client list -->
      <section>
        <div class="container">
          <div class="row">
		   <?php 
			   while($row = $result->fetch_assoc()){
			?>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="item">
                <div class="ts-team-wrapper">
                  <div class="team-img-wrapper">
                    <img
                      loading="lazy"
                      class="w-100"
                      src="admin/image/<?php echo $row['image'];?>"
                      alt="team-img"
                    />
                  </div>
                  <div class="ts-team-content">
                    <h3 class="ts-name"><?php echo $row['name'];?></h3>
                    <p class="ts-designation"><?php echo $row['description'];?></p>
                    <!--/ social-icons-->
                  </div>
                </div>
                <!--/ Team wrapper end -->
              </div>
              <!-- Team 1 end -->
            </div>
          <?php } ?>
          </div>
        </div>
      </section>

      <!-- footer -->

<?php include "includes/footer.php";?>
