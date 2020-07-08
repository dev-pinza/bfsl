 <!-- ========== CTA - Newsletter Signup ========== -->

 <div class="cta-newsletter cta-dark">
          <div class="bg-overlay">
            <div class="cta-wrapper">

              <h3 class="cta-lead h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">Join our newsletter</h3>

              <form class="mc-ajax mc-form subscribe-form" _lpchecked="1">

                <!-- Email -->
                <input type="email" name="EMAIL" placeholder="Your email address" id="mc-email" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s" >
                
                <!-- Send Button -->
                <input type="submit" name="subscribe" value="Join Us" class="btn btn-light btn-large wow fadeInUp mc-send-btn" data-wow-delay=".1s" data-wow-duration="1s">

                <!-- Info (uncomment this for extra info) -->
                <!-- <label for="mc-email" class="mc-info"></label> -->

                <!-- Ajax message -->
                <div class="subscribe-result"></div>
                
              </form>

            </div><!-- / .cta-wrapper -->
          </div><!-- / .bg-overlay -->
        </div><!-- / .cta-newsletter -->



        <!-- ========== Footer Contact ========== -->
        
        <footer id="contact" class="footer-contact">
          <div class="container-fluid">
            <div class="row">

              <!-- Map and address -->
              <div class="col-lg-6 no-gap contact-info">

                <!-- Show Info Button -->
                <a href="#" class="show-info-link"><i class="fa fa-info"></i>Show info</a>

                <div id="map-canvas" class="footer-map"></div>

                <address class="contact-info-wrapper">
                  <ul>
                    <!-- Address -->
                    <li class="contact-group">
                      <span class="adr-heading">Address</span>
                      <span class="adr-info">3, Conackry street, Wuse zone 3, Abuja</span>
                    </li>
                    <!-- Email -->
                    <li class="contact-group">
                      <span class="adr-heading">Email</span>
                      <span class="adr-info">info@bfsl633.com</span>
                    </li>
                  </ul>
                  <ul>
                    <!-- Phone -->
                    <li class="contact-group">
                      <span class="adr-heading">Phone</span>
                      <span class="adr-info">+234 9068924487</span>
                    </li>
                    <!-- Mobile -->
                    <li class="contact-group">
                      <span class="adr-heading">Mobile</span>
                      <span class="adr-info">+234 8023530275</span>
                    </li>
                  </ul>                  
                  
                  <a href="#" class="show-map"><span class="linea-basic-geolocalize-05"></span>show on map</a>
                </address>

              </div><!-- / .col-lg-6 -->


              <!-- Contact Form -->
              <div class="col-lg-6 no-gap section contact-form">
                <header class="sec-heading">
                  <h2>Contact</h2>
                  <span class="subheading">Get in Touch, Make Enquiries</span>
                </header>

                <form action="assets/contact-form/contact-form.php" method="POST" class="form-ajax wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                  <!-- Name -->
                  <div class="form-group">
                    <input type="text" name="name" id="name-contact-1" class="form-control validate-locally" placeholder="Enter your name">
                    <label for="name-contact-1">Name</label>
                    <span class="pull-right alert-error"></span>
                  </div>

                  <!-- Email -->
                  <div class="form-group">
                    <input type="email" name="email" id="email-contact-1" class="form-control validate-locally" placeholder="Enter your email">
                    <label for="email-contact-1">Email</label>
                    <span class="pull-right alert-error"></span>
                  </div>

                  <!-- Message -->
                  <div class="form-group">
                    <textarea class="form-control" name="message" id="message-contact-1" rows="5" placeholder="Your Message"></textarea>
                    <label for="message-contact-1">Message</label>
                  </div>
                  <input type="submit" class="btn pull-right" value="Send Message">

                  <!-- Ajax Message -->
                  <div class="ajax-message col-md-12 no-gap"></div>

                </form>
              </div><!-- / .col-lg-6 -->

            </div><!-- / .row -->
          </div><!-- / .container-fluid -->


          <!-- Social Links -->
          <div class="dark-bg">
            <div class="container footer-social-links">
              <div class="row">
                
                <ul>
                  <li><a href="#">facebook</a></li>
                  <li><a href="https://twitter.com/ByolafemzyL">Twitter</a></li>
                  <li><a href="https://www.instagram.com/byolafemzy_services/">Instagram</a></li>
                  <!-- <li><a href="#">Behance</a></li> -->
                </ul>

              </div>
            </div><!-- / .container -->
          </div><!-- / .dark-bg -->


          <!-- Copyright -->
          <div class="copyright">
            <div class="container">
              <div class="row">
                
                <div class="col-md-6">
                  <small>&copy; 2020 BFSL. Made by <a class="no-style-link" href="https://github.com/flash-code1" target="_blank">Oluwaseun</a></small>
                </div>

                <div class="col-md-6">
                  <small><a href="#page-top" class="pull-right to-the-top">To the top<i class="fa fa-angle-up"></i></a></small>
                </div>

              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .copyright -->
        </footer><!-- / .footer-contact -->

    

        <!-- ========== Scripts ========== -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/vendor/google-fonts.js"></script>
        <script src="assets/js/vendor/jquery.easing.js"></script>
        <script src="assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/vendor/smoothscroll.js"></script>
        <script src="assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="assets/js/vendor/jquery.parallax.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="assets/js/vendor/countup.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/vendor/packery-mode.pkgd.min.js"></script>
        <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/jquery.ajaxchimp.js"></script>
        <script src="assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
        <script src="assets/js/vendor/animDots.js"></script>

        <!-- Google Maps -->
        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4P_0XbKNrYj4B44YT3wCGr9ONYo7UxJM"></script>

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
