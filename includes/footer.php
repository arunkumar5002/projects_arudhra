     <footer id="footer" class="footer bg-overlay" style="background-color:#09346B;!important">
        <div class="footer-main" style="padding: 20px 0 0px;!important">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6  mt-lg-0 footer-widget">
                <h3 class="widget-title">Services</h3>
                <ul class="list-arrow">
                  <li>
                    <a href="service-single.html">MOORING SERVICES</a>
                  </li>
                  <li>
                    <a href="service-single.html">BUOYS</a>
                  </li>
                  <li>
                    <a href="service-single.html">WATER QUALITY & LAB</a>
                  </li>
                  <li>
                    <a href="service-single.html">DESIGN AND FABRICATION </a>
                  </li>
                  <li>
                    <a href="service-single.html">OCEAN RESEARCH</a>
                  </li>
                  <li>
                    <a href="service-single.html">MARINE</a>
                  </li>
                </ul>
              </div>
              <!-- Col end -->
              <div class="col-lg-4 col-md-6 footer-widget  mt-md-0">
                <h3 class="widget-title">head office</h3>
                <div class="working-hours">
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-location-dot" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p> Star complex, H-1, Block no 7, Vymeethi Road, Thrippunithra, Kochi - 682301. </p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-mobile" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>+91 93606 45892</p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-phone-volume" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>0484 – 4865272</p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-envelope" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>info@arudhratech.com</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- Col end -->
              <div class="col-lg-4 col-md-6 footer-widget  mt-md-0">
                <h3 class="widget-title">chennai office</h3>
                <div class="working-hours">
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-location-dot" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p> 93 Angappan Naicken street Parrys Chennai - 600001, Tamilnadu, India. </p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-mobile" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>+91 9791748380</p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-phone-volume" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>044-4806 1931</p>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="d-flex footer_head">
                      <div>
                        <i class="fa-solid fa-envelope" style="color: #b6b6b6"></i>
                      </div>
                      <div>
                        <p>info@arudhratech.com</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- Col end -->
            </div>
            <!-- Row end -->
          </div>
          <!-- Container end -->
        </div>
        <!-- Footer main end -->
      </footer>
      <div class="footer_last">
        <div class="d-flex call_text">
          <div class="">
            <a href="">
              <p class="mb-0">@2024 ARUDHRA TECHNOLOGYS</p>
            </a>
          </div>
          <div>
            <a href="">
              <i class="fa-brands fa-square-facebook" style="color: #e9e9e9"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Footer end -->
      <!-- whatsup -->
      <div class="chat_box">
        <div class="whatsup">
         <a href="https://wa.me/919360645892"  target="_blank"> <img src="images\whatsup.svg" alt=""></a>
        </div>

      </div>
      <!-- whatsup_end -->
      <!-- Javascript Files
  ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="plugins/jQuery/jquery.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
      <!-- Slick Carousel -->
      <script src="plugins/slick/slick.min.js"></script>
      <script src="plugins/slick/slick-animation.min.js"></script>
      <!-- Color box -->
      <script src="plugins/colorbox/jquery.colorbox.js"></script>
      <!-- shuffle -->
      <script src="plugins/shuffle/shuffle.min.js" defer></script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var tabs = document.querySelectorAll(".tab");
          var tabContents = document.querySelectorAll(".tab-content");
          var currentIndex = 0;

          function activateTab(index) {
            tabs.forEach((tab) => tab.classList.remove("active"));
            tabs[index].classList.add("active");
          }

          function activateTabContent(index) {
            tabContents.forEach((content) => content.classList.remove("active"));
            tabContents[index].classList.add("active");
          }

          function cycleTabs() {
            currentIndex = (currentIndex + 1) % tabs.length;
            activateTab(currentIndex);
            activateTabContent(currentIndex);
          }

          function autoCycle() {
            cycleTabs();
            setTimeout(autoCycle, 3000); // Adjust the interval as needed (3 seconds in this example)
          }
          // Initial activation
          activateTab(currentIndex);
          activateTabContent(currentIndex);
          // Start auto-cycling
          autoCycle();
          // Add click event listeners to tabs for manual cycling
          tabs.forEach(function(tab, index) {
            tab.addEventListener("click", function() {
              currentIndex = index;
              activateTab(currentIndex);
              activateTabContent(currentIndex);
            });
          });
        });
      </script>
      <!-- Google Map API Key-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
      <!-- Google Map Plugin-->
      <script src="plugins/google-map/map.js" defer></script>
      <!-- Template custom -->
      <script src="js/script.js"></script>
    </div>
    <!-- Body inner end -->
  </body>
</html>