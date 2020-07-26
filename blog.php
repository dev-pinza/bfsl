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
                  <h4 class="h-alt hero-secondary">Blog & News</h4>
                  <a href="#blog" class="btn btn-light">View Post</a>
                  <!-- Scroller -->
                  <a href="#blog" class="scroller">
                    <span class="scroller-text">scroll down</span>
                    <span class="linea-basic-magic-mouse"></span>
                  </a>

                </div><!-- / .hero-content -->
              </div><!-- / .hero-content-wrapper -->

            </div><!-- / #large-header -->

          </div><!-- / .bg-overlay -->
        </div><!-- / #home -->


        <!-- ========== Blog - 3 Columns ========== -->
        
        <div id="blog" class="section container blog-columns blog-masonry">
          <div class="row">

            <div class="col-md-8">
              <div class="blog-container">

                <!-- Blog Post 1 -->
                <?php 
                include("functions/db/connect.php");
                $select_blog = mysqli_query($connection, "SELECT * FROM blog ORDER BY id DESC");
                while ($row = mysqli_fetch_array($select_blog)) {
                  ?>
                  <div class="col-lg-8 blog-selector">
                  <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">

                    <!-- Image -->
                    <a href="blog-post.html" class="post-img"><img src="super/functions/blog/<?php echo $row["img"];?>" alt="Blog Post 1"></a>

                    <div class="bp-content">
                      
                      <!-- Meta data -->
                      <div class="post-meta">
                        <a href="#" class="post-date">
                          <i class="fa fa-calendar-o"></i>
                          <span><?php echo $row["date"];?></span>
                        </a>
                        <a href="#" class="post-comments">
                          <i class="fa fa-comments-o"></i>
                          <span>12</span>
                        </a>
                      </div><!-- / .meta -->

                      <!-- Post Title -->
                      <a href="#" class="post-title"><h4><?php echo $row["heading"];?></h4></a>
                      <p><?php echo $row["sub_heading"]; ?></p>
                      <!-- Blurb -->
                      <p><?php echo $row["content"]; ?></p>

                      <!-- Link -->
                      <!-- <a href="blog-post.html" class="btn btn-small">Read More</a> -->

                    </div><!-- / .bp-content -->

                  </div><!-- / .blog-post -->
                </div><!-- / .col-lg-4 -->
                  <?php
                }
                ?>


              </div><!-- / .blog-container  -->


              <!-- Pagination -->

            </div><!-- / col-md-8 -->

            
            
            <!-- ========== Sidebar ========== -->

          </div><!-- / .row -->          
        </div><!-- / .container -->
<?php
include("footer.php");
?>