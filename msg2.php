<?php
session_start();

$fname = $_SESSION["fname"];
$mname = $_SESSION["mname"];
$lname = $_SESSION["lname"];
$email = $_SESSION["email"];
$type = $_SESSION["type"];
if ($fname != "" && $lname != "" && $email != "" && $type == "error"){
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Application Exist</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="assets/fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="assets/styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="assets/styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="assets/styles/main.css">
        <link rel="stylesheet" href="assets/styles/responsive.css">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="assets/images/loader.svg" alt="Loading...">
        </div>



        <!-- ========== Coming Soon - Timer ========== -->

        <div class="comingsoon-2">
          <div class="content-wrapper">

            <div class="container">
              <div class="row">
                
                <div class="col-md-6">
                  <header>
                    <h1>An Error Occured</h1>
                    <p>Report This Error at The Enquiry!</p>
                  </header>
                  <form class="mc-ajax mc-form subscribe-form" _lpchecked="1">
                    <h5>For the main time Explore our Site</h5>
                    <div class="form-group form-inline">
                      <!-- <input type="email" name="EMAIL" placeholder="Enter your email" id="mc-email" class="form-control"> -->
                      <a href="index.php" class="btn">Explore</a>
                    </div>

                    <!-- Ajax message -->
                    <div class="subscribe-result"></div>
                  </form>
                </div>

              </div>
            </div>

          </div><!-- / .content-wrapper -->
        </div><!-- / .comingsoon -->
        <!-- think -->
    

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
        <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/jquery.ajaxchimp.js"></script>

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>

<?php
} else {
    echo '<script type="text/javascript">
    $(document).ready(function(){
     swal({
      type: "error",
      title: "Vault Authorization",
      text: "You Dont Have permission to View this report",
     showConfirmButton: false,
      timer: 2000
      }).then(
      function (result) {
        history.go(-1);
      }
      )
      });
     </script>
    ';
}
?>