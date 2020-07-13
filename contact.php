<?php
include("header.php");
?>
<div id="home" class="agency2-hero">
          <div class="bg-overlay">
            
            <div id="large-header" class="large-header">
              <canvas id="demo-canvas" class="demo-canvas"></canvas>

              <!-- Hero Content -->
              <div class="hero-content-wrapper">
                <div class="hero-content">
                  
                  <img src="image/logo/logo3.png" height="150px" width="150px" alt="Application">
                  <h1 class="hero-lead">BFSL</h1>
                  <h4 class="h-alt hero-secondary">Contact-Us</h4>
                  <a href="#connect" class="btn btn-light">Connect</a>
                  
                  <!-- Scroller -->
                  <a href="#connect" class="scroller">
                    <span class="scroller-text">scroll down</span>
                    <span class="linea-basic-magic-mouse"></span>
                  </a>

                </div><!-- / .hero-content -->
              </div><!-- / .hero-content-wrapper -->

            </div><!-- / #large-header -->

          </div><!-- / .bg-overlay -->
        </div><!-- / #home -->

        <!-- ========== Contact ========== -->

        <section id="connect" class="section contact-1">
          
          <header class="sec-heading">
            <h2>ASK QUESTIONS</h2>
            <span class="subheading">We love to discuss your idea</span>
          </header>
          
          <div class="contact-wrapper">
            <!-- Map -->
            <div class="gmap map-boxed">
            <iframe width=100% height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Suite%204%2C%20Louisiana%202%20Shopping%20Plaza%2C%20Opposite%20Valencia%20Garden%20Estate%2C%20Close%20to%20Sunnyvale%20Homes%2C%20Dakwo%20District%2C%20Locogoma%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>

            <!-- Show Info Button -->
                <div class="show-info-link">
                  <a href="#" class="show-info"><i class="fa fa-info"></i><h6>Show info</h6></a>
                </div>

            <div class="container">
              <div class="row ws-m">

                <!-- Address Info -->
                <div class="col-xs-offset-1 col-xs-11 col-md-offset-2 col-md-6 contact-info-wrapper">
                  <address>
                    <div class="row">

                      <!-- Phone -->
                      <div class="col-sm-6 address-group">
                        <span>Phone</span>
                        <a href="tel:+2349068924487">+234 8023530275</a>
                        <a href="tel:+2349068924487">+234 9068924487</a>
                      </div>

                      <!-- Address -->
                      <div class="col-sm-5 address-group">
                        <span>Address</span>
                        <p>Suite 4, Louisiana 2 Shopping Plaza, Opposite Valencia Garden Estate, Close to Sunnyvale Homes, Dakwo District, Locogoma, Abuja.
                        </p>
                      </div>

                    </div><!-- / .row -->

                    <div class="row">

                      <!-- Email -->
                      <div class="col-sm-6 address-group">
                        <span>Email</span>
                        <a href="mailto:info@bfsl633.com">info@bfsl633.com</a>
                      </div>

                      <!-- Hours -->
                      <div class="col-sm-5 address-group">
                        <span>Open Hours</span>
                        <p>Mon-Fri: 9am-5pm</p>
                        <p>Sat: 10am-1pm</p>
                      </div>

                    </div><!-- / .row -->

                    <!-- Show Map Button -->
                    <div class="row show-map-link">
                      <a href="#" class="show-map"><span class="icon-map-pin"></span>Show on map</a>
                    </div><!-- / .row -->
                  </address>
                </div><!-- / .contact-info-wrapper -->
              </div><!-- / .row -->
              
              <!-- Contact Form -->
              <div class="row">
                <form action="assets/contact-form/contact-form.php" method="POST" id="contact-form-1" class="form-ajax">
                  <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">

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

                  </div>

                  <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">

                    <!-- Message -->
                    <div class="form-group">
                      <textarea name="message" id="message-contact-1" class="form-control" rows="5" placeholder="Your Message"></textarea>
                      <label for="message-contact-1">Message</label>
                    </div>
                    <div>
                      <input type="submit" class="btn pull-right" value="Send Message">
                    </div>

                    <!-- Ajax Message -->
                    <div class="ajax-message col-md-12 no-gap"></div>

                  </div><!-- / .col-md-4 -->

                </form>
              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .contact-wrapper -->
        </section><!-- / .contact-1 -->
<?php
include("footer.php");
?>