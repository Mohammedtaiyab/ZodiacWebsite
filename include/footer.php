      <!-- footer-section start -->
      <footer class="footer-section footer-section-two ptb-120" style="padding-bottom: 20px;">
          <div class="container">
              <div class="row ml-b-45">
                  <div class="col-lg-4 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Company</h3>
                          <img src="assets/images/logofullsize.png" alt="" style="width: 150px;">
                      </div>


                  </div>
                  <div class="col-lg-4 col-sm-6 mrb-30">
                      <div class="footer-widget widget-menu">
                          <h3 class="widget-title">Popular Links</h3>
                          <ul>
                              <li><a href="aboutus.php">About</a></li>
                              <li><a href="services.php">Services</a></li>
                              <li><a href="horoscope.php?sign=aries">Horoscope</a></li>
                              <li><a href="contact.php">Contact</a></li>
                          </ul>
                      </div>
                  </div>


                  <div class="col-lg-4 col-sm-6 mrb-30">
                      <div class=" widget-menu">
                          <h3 class="widget-title">Download</h3>
                          <ul>
                              <li><a href="#"><img src="https://aoexcel.com/wp-content/uploads/2019/11/android-download.png" alt="" style="width: 50%;"></a></li>
                              <li><a href="#"><img src="https://routenote.com/blog/wp-content/uploads/2016/06/2000px-Download_on_iTunes.svg-1280x465.png" alt="" style="width: 50%;"></a></li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <div class="privacy-area privacy-area-two">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <p>Copyright © 2020. All rights reserved</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- footer-section end -->

      <!-- jquery -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <!-- migarate-jquery -->
      <script src="assets/js/jquery-migrate-3.0.0.js"></script>
      <!-- bootstrap js -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- magnific-popup js -->
      <script src="assets/js/jquery.magnific-popup.js"></script>
      <!-- isotope -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- nice-select js-->
      <script src="assets/js/jquery.nice-select.js"></script>
      <!-- swipper js -->
      <script src="assets/js/swiper.min.js"></script>
      <!-- waypoints js link -->
      <script src="assets/js/jquery.waypoints.min.js"></script>
      <!-- counterup js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!--typed js-->
      <script src="assets/js/typed.js"></script>
      <script src="assets/js/jquery.syotimer.js"></script>
      <script src="assets/js/syotimer.lang.js"></script>
      <script src="assets/js/plugin.js"></script>
      <script src="assets/js/jquery.nav.js"></script>
      <!--particle js-->
      <script src="assets/js/particles.min.js"></script>
      <script src="assets/js/particles-app.js"></script>
      <!-- viewport js -->
      <script src="assets/js/viewport.jquery.js"></script>
      <!-- odometer js -->
      <script src="assets/js/odometer.min.js"></script>
      <!-- wow js file -->
      <script src="assets/js/wow.min.js"></script>
      <!-- main -->
      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
          function checkfun() {
              var ayanamsa = $("#ayanamsa").val();
              var datetime = $("#datetime").val();
              var location = $("#location").val();
              var check = "panchang"
              $.ajax({
                  url: "functionapi.php",
                  type: "POST",
                  data: 'ayanamsa=' + ayanamsa + "&datetime=" + datetime + "&location=" + location + "&check=" + check,
                  dataType: 'json',
                  success: function(data) {
                      $("#data").html(data);
                  }
              });

          }
      </script>
      <script>
        //   $(document).ready(function() {
        //       if (navigator.geolocation) {
        //           navigator.geolocation.getCurrentPosition(function(position) {
        //               var positionInfo = position.coords.latitude + "," + position.coords.longitude;
        //               document.getElementById("location").value = positionInfo;
        //           });
        //       } else {
        //           alert("Sorry, your browser does not support HTML5 geolocation.");
        //       }
        //   });
      </script>
      </body>

      </html>