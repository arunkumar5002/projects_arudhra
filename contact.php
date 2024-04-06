<?php
session_start();
 include "includes/header.php";?>

      <div
        id="banner-area"
        class="banner-area"
        style="background-image: url(images/banner/banner5.jpg)"
      >
        <div class="banner-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mt-5">
                <div class="banner-heading">
                  <h1 class="banner-title">CONTACT</h1>
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
      <!-- main content -->
      <div class="contact_head">
        <h2 class="text-center mb-0">CONTACT US</h2>
		<?php 
    
                if(isset($_SESSION['status']))
                {
            ?>
                 	  						<div class="alert alert-success" id="success" role="alert" style="position: absolute;right: 63px;top: 70px; z-index: 1111;"> 	
<img src="" alt="" class="" style="width:35px; height:auto;" /> <?= $_SESSION['status']; ?>
</div>
                <?php 
                unset($_SESSION['status']);
            }

            ?>
      </div>
	  


      <div class="">
        <div class="container"> 
          <div class="row contact_page">
            <div class="col-lg-7">
              <div class="contact_fill">
                <form method="POST" action="save_contact.php">
                  <div class="">
                    <label for="exampleInputName" class="form-label"
                      >Name</label
                    >
                    <input
                      type="Name"
                      class="form-control form_deck"
                      id="exampleInputName" name="name"
                    />
                  </div>
                  <div class="">
                    <label for="exampleInputEmail1" class="form-label"
                      >Email address</label
                    >
                    <input
                      type="email"
                      class="form-control form_deck"
                      id="exampleInputEmail1" name="email"
                      aria-describedby="emailHelp"
                    />
                  </div>
                  <div class="">
                    <label for="exampleInputmobile" class="form-label"
                      >Mobile Number</label
                    >
                    <input
                      type="number"
                      class="form-control form_deck"
                      id="exampleInputmobile" name="number"
                    />
                  </div>
                  <div class="">
                    <label for="exampleInputmessage" class="form-label"
                      >Message</label
                    >
                    <textarea
                      class="form-control form-control-message form_deck"
                      name="message"
                      id="message"
                      placeholder=""
                      rows="10"
                      required
                    ></textarea>
                  </div>

                  <!-- <div class=" form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1"
                    />
                    <label class="form-check-label" for="exampleCheck1"
                      >Check me out</label
                    >
                  </div> -->
                  <button type="submit" class="btn btn-primary form_deck mt-5 mb-5">
                    Submit
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-5">
              
              <div class="contact_root">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d125753.08434930055!2d76.355141!3d9.951931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0873e1b2fae16b%3A0xc854da1578af6e2d!2sStar%20apartments!5e0!3m2!1sen!2sin!4v1712383924990!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
	  <script>
	        setInterval(function () {
				  $("#success").hide();
				  }, 2000);
	  </script>

<?php include "includes/footer.php";?>
