<?php include "includes/header.php";?>
<?php
include "includes/config.php";

$result = $conn->query("SELECT * FROM banner where status = 1");

?>



      <!--/ Header end -->
      <div class="banner-carousel banner-carousel-1 mb-0">
	  <?php

        while ($row = $result->fetch_assoc()) {
            
        ?>
        <div class="banner-carousel-item " style="background-image: url(admin/image/<?php echo $row['image'];?>">
          <div class="slider-content">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft"><?php echo $row["title"]; ?> </h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight"> <?php echo $row["subtitle"]; ?> </h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="<?php echo $row["link"]; ?>" class="slider btn btn-primary border"><?php echo $row["text"]; ?></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php } ?>
		
      </div>
      <section class="call-to-action-box no-padding">
        <div class="container">
          <div class="action-style-box">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title"> We understand your needs and demands </h3>
                </div>
              </div>
              <!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-dark" href="#">Request Quote</a>
                </div>
              </div>
              <!-- col end -->
            </div>
            <!-- row end -->
          </div>
          <!-- Action style box -->
        </div>
        <!-- Container end -->
      </section>
      <!-- Action end -->
      <!-- our industry -->
      <div class="container mt-5">
        <h3 class="section-sub-title text-center">OUR INDUSTRY</h3>
        <div class="industry__para">
          <p> Arudhra Techologies is a professionally managed Company established to deliver the best solutions available from internationally reputed manufacturers in the field of Research and Development, Water Quality, Oceanography, Hydrology, Meteorology, Marine and Fisheries. </p>
          <p> We committed to provide the best customer support across India in the areas of Product & application , Projects, Consultation, system integration, installation, maintenance, technical service, IQ/OQ documentation.. </p>
          <p> Our focus currently is to address the related needs of Research organizations, Institutions, universities, Fisheries and Industries which are active in the fields of Environmental sciences, Water Quality, Hydrology, Meteorology, Marine and Oceanography.. </p>
        </div>
      </div>
      <!-- We are specialist in -->
      <section>
        <div class="tabs-container container">
          <div class="tab" data-tab="1">MOORNING</div>
          <div class="tab" data-tab="2">BUOYS</div>
          <div class="tab" data-tab="3">WATER QUALITY & LAB</div>
          <div class="tab" data-tab="4">DESIGN AND FABRICATION</div>
          <div class="tab" data-tab="5">OCEAN RESEARCH</div>
          <div class="tab" data-tab="6">MARINE</div>
        </div>
        <div class="tab-content-container container mt-3">
          <div class="tab-content" data-content="1">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/mooring.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">Mooring Services</a>
                  </h3>
                  <p> Company has excellent manpower for Mooring. we do our activities ranges from shallow water to deep ocean. our mooring expert has decade of experience in mooring. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-1-end-->
          <div class="tab-content" data-content="2">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/buoys.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">BUOYS</a>
                  </h3>
                  <p> We Manufacture and supply Wide range Caution Marker Buoys , Navigational Buoys, Deep Sea Buoys, Environmental Monitoring Buoys, Channel Marking Buoys etc. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-2-end -->
          <div class="tab-content" data-content="3">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/water.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">WATER QUALITY & LAB</a>
                  </h3>
                  <p> The Products are Made for Observing the ocean — Recent advances in instruments and techniques for physical oceanography which can be used by Oceanographic research centers, major universities, the marine industry, Fisheries and and government agencies. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-3-end -->
          <div class="tab-content" data-content="4">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/design.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">DESIGN AND FABRICATION</a>
                  </h3>
                  <p> We Design Fabricate and Manufacture variety Cages and Floating Systems like GI Fish Cage, HDPE Fish Cage, Bio-Floc Units,& Floating Platforms for Aquaculture and Marine .We cater according to the customer needs. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-4-end -->
          <div class="tab-content" data-content="5">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/ocean.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">OCEAN RESEARCH</a>
                  </h3>
                  <p> Company has excellent manpower for Mooring. we do our activities ranges from shallow water to deep ocean. our mooring expert has decade of experience in mooring. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-5-end -->
          <div class="tab-content" data-content="6">
            <div class="specialist_back">
              <div class="specialist_info">
                <div class="specialist_view">
                  <img class="animate__animated animate__fadeInDown" src="images/specalist/marine.png" alt="" />
                </div>
                <div class="animate__animated animate__slideInRight">
                  <h3 class="specialist-box-title">
                    <a href="#">MARINE</a>
                  </h3>
                  <p> We Arudhra Technologies Encaged in Supply , Installation and Manufacturing of Wide range of Floating Devices, FRP Boats, Kayak Boats, FRP Tanks and Much More. Our Products emphasizing broad benefits of ease installation, Weather Proof performance, Excellent water resistance, Exceptional fire retardant properties and Maintenance free life. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- special-6-end -->
        </div>
      </section>
      <!-- specialist-area-end -->
      <!-- Project area end -->
      <section class="content">
        <div class="container">
          <div class="row">
            
            <!-- Col end -->
            <div class="col-lg-12 mt-5 mt-lg-0">
              <h3 class="column-title">OUR BRANCHES</h3>
              <!-- clients -->
              <div class="container">
                <div class="mob_view">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col">
                      <div class="client_prof">
                        <img src="./images/clients/kolkatha.png" alt="Chennai" />
                        <h3 class="service-box-title mb-0">
                          <a href="#">HEAD OFFICE</a>
                        </h3>
                        <p class="mb-0" style="line-height: 18px;font-size: 12px;">Star Complex , H-1 ,7-Block , Vymeethi Road, Thrippunithra, Kochi - 682 301.<br>Mob : +91 93606 45892<br> ph - 484 3365031 / 4037586.
                        </p>
                      </div>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4 col">
                      <div class="client_prof">
                        <img src="./images/clients/thutucorin.png" alt="Chennai" />
                        <h3 class="service-box-title mb-0">
                          <a href="#">FACTORY UNIT</a>
                        </h3>
                        <p class="mb-0" style="line-height: 18px;font-size: 12px;">No.6, R K Tharun Complex,Molasur Village,Tindivanam Taluk,<br>Viluppuram,Tamilnadu, 604 002<br> Mob : +91 89214 98791. </p>
                      </div>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-4 col">
                      <div class="client_prof">
                        <img src="./images/clients/chennai.png" alt="Chennai" />
                        <h3 class="service-box-title mb-0">
                          <a href="#">CHENNAI OFFICE</a>
                        </h3>
                        <p class="mb-0" style="line-height: 18px;font-size: 12px;">93, Angappan Naickan Street,<br>Parrys Chennai, 600 001<br> Mob : +91 97917 48380. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Clients row end -->
            </div>
            <!-- Col end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
      </section>
      <!-- Content end -->
      <!--/ News end -->
      <!-- footer -->
 <?php include "includes/footer.php";?>