<?php
include 'dbcon.php';
if(isset($_POST['down_log'])){
  if(session_status()==PHP_SESSION_NONE)
  {
  	session_start();
  }
  $_SESSION['temp_software']=$_POST['soft_id'];
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Nim- Responsive Landing Page</title>

  <!-- [ FONT-AWESOME ICON ]
  =========================================================================================================================-->
  <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

  <!-- [ PLUGIN STYLESHEET ]
  =========================================================================================================================-->
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <!-- [ Boot STYLESHEET ]
  =========================================================================================================================-->
  <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
  <!-- [ DEFAULT STYLESHEET ]
  =========================================================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/color/rose.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
<style>
  .down_log{
    background-color: black;
    color: white;
    border-radius: 20px;
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
     border: 1px solid black;
  }
 .down_log:hover{
   background-color: #f8198d;
   color: black;
   font-weight: bold;
 }
</style>
</head>
<body >
  <!-- [ LOADERs ]
  ================================================================================================================================-->
  <div class="preloader">
    <div class="loader theme_background_color">
      <span></span>

    </div>
  </div>
  <!-- [ /PRELOADER ]
  =============================================================================================================================-->
  <!-- [WRAPPER ]
  =============================================================================================================================-->
  <div class="wrapper">
    <!-- [NAV]
    ============================================================================================================================-->
    <!-- Navigation
    ==========================================-->
    <nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">sof<span class="themecolor">tt</span>ech</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">


            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#one" class="page-scroll">About</a></li>
            <li><a href="#two" class="page-scroll">Our Works</a></li>
            <li><a href="#seven" class="page-scroll">Services</a></li>
            <li><a href="#eight" class="page-scroll">Contact</a></li>
            <li><a href="#three" class="page-scroll">Search</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- [/NAV]
    ============================================================================================================================-->

    <!-- [/MAIN-HEADING]
    ============================================================================================================================-->
    <section class="main-heading" id="home">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="main-heading-content col-md-12 col-sm-12 text-center">
              <h1 class="main-heading-title">We are<span class="main-element themecolor" data-elements="Creative,Developers,Responsible"></span></h1>
              <p class="main-heading-text">welcome to Softtech<br/>Here you can fnd your software as per your need.</p>
              <div class="btn-bar">
                <a href="login.php" class="btn btn-custom theme_background_color">Login</a>
                <a href="registration.php" class="btn btn-custom-outline">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- [/MAIN-HEADING]
    ============================================================================================================================-->


    <!-- [ABOUT US]
    ============================================================================================================================-->
    <section class="aboutus white-background black" id="one">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center black">
                    <h3 class="title">ABOUT <span class="themecolor">US</span></h3>
               <p class="a-slog">Welcome to sottech we are creative,here you can download software as per your need... </p>
                </div>
            </div>
            <div class="gap">

            </div>

            <div class="row about-box">
             <div class="col-sm-4 text-center">
               <div class="margin-bottom">
                 <i class="fa fa-newspaper-o"></i>
                 <h4>POWER OF FLEXIBILITY</h4>
                 <p class="black"></p>
               </div> <!-- / margin -->
             </div> <!-- /col -->
             <div class="col-sm-4 about-line text-center">
               <div class="margin-bottom">
                 <i class="fa fa-diamond"></i>
                 <h4>FULLY RESPONSIVE</h4>
                 <p class="black"></p>
               </div> <!-- / margin -->
             </div><!-- /col -->
             <div class="col-sm-4 text-center">
               <div class="margin-bottom">
                 <i class="fa fa-area-chart"></i>
                 <h4>GREAT WEB IDEAS</h4>
                 <p class="black"></p>
               </div> <!-- / margin -->
             </div><!-- /col -->
           </div> <!-- /row -->




        </div>
    </section>


    <!-- [/ABOUTUS]
    ============================================================================================================================-->



    <!-- [RECENT-WORKS]
    ============================================================================================================================-->
    <section class="recent-works text-center" id="two">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title">Trending <span class="themecolor">Softwares</span></h3>
            <p class="a-slog"></p>
          </div>
        </div>

        <div class="gap"></div>
        <div class="row">
          <?php
          $qury=mysqli_query($con,"select * from supload where status=1 limit 8");
          while ($row=mysqli_fetch_array($qury)){
            ?>
            <div class="col-sm-3 port-item margin-bottom">
              <div class="item-img-wrap">
                <img src="images/work-1.jpg" class="img-responsive" alt="workimg">
                <a href="images/work-1.jpg" class="show-image">
                  <span></span>
                </a>
              </div>
              <div class="work-desc">
                <form action="" method="post">
                  <input type="hidden" name="soft_id" value="<?php echo $row['sid'];?>">
                <h3><a href="#"><?php echo $row['sname'];?></a></h3>
                <span><?php echo $row['description'];?>(<?php echo $row['byte'];?>)</span>
                <br><span>Price:<?php echo $row['price'];?></span>

								<br>
                <input type="submit" class="down_log"value="Login to Download" name="down_log">
              </form>
              </div>
            </div> <!-- /portfolio-item -->
          <?php }
          ?>


        </div> <!-- /row -->

        <div class="row">
          <div class="col-md-12 text-center">
            <a href="#" class="btn btn-custom theme_background_color">Load More</a>
          </div>
        </div> <!-- /row -->

      </div> <!-- /container -->
    </section>
    <!-- / Portfolio -->


    <!-- [/OUR-RECENT WORKS]
    ============================================================================================================================-->

    <!-- [OUR TEAMsearch]
    ============================================================================================================================-->
    <section class="our-team white-background black" id="three">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h3 class="title">Search <span class="themecolor">Softwares</span></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-12">
            <form action="search_in_search.php" method="post">
              <input type="text" name="search-term" class="search-tb col-md-4" required>
              <div class="col-sm-12">
                <div class="col-sm-2" style=" width:18%; margin:10px;">
                  <b>Category</b>
                  <div class="radioLeft">
                    <br>  <input type="radio"  value="" name="catvalue" checked>All</input>
                    <br>  <input type="radio"  value="and category='videoeditor'" name="catvalue">Video Editor</input>
                    <br>  <input type="radio"  value="and category='os'" name="catvalue">OS</input>
                    <br>  <input type="radio"  value="and category='accounting'" name="catvalue">Accounting</input>
                  </div>
                </div>
                <div class="col-sm-2" style=" width:18%; margin:10px">
                  <b>OS</b>
                  <div class="radioLeft">
                    <br>  <input type="radio"  value="" name="osvalue" checked>All</input>
                    <br>  <input type="radio"  value="and os='windows'" name="osvalue">Windows</input>
                    <br>  <input type="radio"  value="and os='linux'" name="osvalue">Linux</input>
                    <br>  <input type="radio"  value="and os='mac'" name="osvalue">Mac-os</input>
                  </div>
                </div>
                <div class="col-sm-2" style=" width:18%; margin:10px">
                  <b>Type</b>
                  <div class="radioLeft">
                    <br>  <input type="radio"  value="" name="bytevalue" checked>All</input>
                    <br>  <input type="radio"  value="and byte='64-bit'" name="bytevalue">64bit</input>
                    <br>  <input type="radio"  value="and byte='32-bit'" name="bytevalue">32bit</input>
                  </div>
                </div>
                <div class="col-sm-2" style=" width:18%; margin:10px">
                  <b>Price</b>
                  <div class="radioLeft">
                    <br>  <input type="radio"  value="" name="pricevalue" checked>All</input>
                    <br>  <input type="radio"  value="and price=0" name="pricevalue">Free</input>
                    <br>  <input type="radio"  value="and price between 0 and 99" name="pricevalue">0-99</input>
                    <br>  <input type="radio"  value="and price between 100 and 499" name="pricevalue">100-499</input>
                    <br>  <input type="radio"  value="and price between 500 and 999" name="pricevalue">500-999</input>
                    <br>  <input type="radio"  value="and price between 1000 and 4999" name="pricevalue">1000-4999</input>
                    <br>  <input type="radio"  value="and price > 5000" name="pricevalue">Greater than 5000</input>
                  </div>
                </div>
                <div class="col-sm-2" style=" width:18%; margin:10px">
                  <b>Size </b>
                  <div class="radioLeft">
                    <br>  <input type="radio"  value="" name="sizevalue" checked>All</input>
                    <br>  <input type="radio"  value="and size < 10485760" name="sizevalue">Less than 10MB</input>
                    <br>  <input type="radio"  value="and size between 10485760 and 104857600" name="sizevalue">10MB to 100MB</input>
                    <br>  <input type="radio"  value="and size between 104857600 and 1048576000" name="sizevalue">100MB to 1GB</input>
                    <br>  <input type="radio"  value="and size > 1048576000" name="sizevalue">Greater than 1GB</input>
                  </div>
                </div>
              </div>
              <div class="row margin-top">
                <div class="col-md-12 text-center">
                  <input type="submit" class="btn btn-custom theme_background_color" value="Search Software">
                </div> <!-- /col -->
              </div> <!-- /row -->
            </form>
          </div> <!-- team-member -->

        </div> <!-- end row -->



      </div>
    </section>

    <!-- [/OUR TEAMsearch]
    ============================================================================================================================-->




    <!-- [INSPIRATION]
    ============================================================================================================================-->
    <section class="inspiration" id="four">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <article class="col-md-12 text-center">
              <div class="intermediate-container">
                <div class="subheading">
                  <h4>Are You Ready To <span class="themecolor">Go?</span></h4>
                </div>
                <div class="heading">
                  <h2>Inspired By You!</h2>
                </div>
                <div class="">
                  <a class="btn btn-custom-outline" href="#"><span>get started</span></a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- [/INSPIRATION]
    ============================================================================================================================-->

    <!-- [STATS]
    ============================================================================================================================-->
    <section class="our-stats" id="five">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="our-stats-box text-center">
              <div class="our-stat-icon">
                <span class="fa fa-ge"></span>
              </div>
              <div class="our-stat-info">
                <span class="stats" data-from="4763904" data-to="4764504" data-speed="5000"
                data-refresh-interval="50"></span>

                <h5>Total Downloaded</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-stats-box text-center">
              <div class="our-stat-icon">
                <span class="fa fa-git-square"></span>
              </div>
              <div class="our-stat-info">
                <span class="stats" data-from="1" data-to="504" data-speed="5000"
                data-refresh-interval="50"></span>

                <h5>Editors Supported</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-stats-box text-center">
              <div class="our-stat-icon">
                <span class="fa fa-globe"></span>
              </div>
              <div class="our-stat-info">
                <span class="stats" data-from="1" data-to="359" data-speed="5000"
                data-refresh-interval="50"></span>

                <h5>Languages Detected</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-stats-box text-center">
              <div class="our-stat-icon">
                <span class="fa fa-gears"></span>
              </div>
              <div class="our-stat-info">
                <span class="stats" data-from="3500" data-to="5000" data-speed="5000"
                data-refresh-interval="50"></span>

                <h5>Happy Clients</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- [/STATS]
    ============================================================================================================================-->



    <!-- [TESTIMONIAL]
    ============================================================================================================================-->
    <section class="client-testimonial text-center white" id="six">

               <div class="container">
                   <div class="row">
                   <div class="col-md-12">
                       <h3 class="title">Our <span class="themecolor">Policy</span></h3>
             </div>

                       <div class="col-md-8 col-md-offset-2 grey">
                           <div id="testimonial" class="owl-carousel owl-theme">
                               <div class="item">
                                   <h5>Our Quality Policy:
   We are committed to provide defect free software products conforming to customer requirements by conformin the requirements.</h5>
                                   <p><strong>Thushara Thirumeni</strong>,Softech.</p>
                               </div>

                               <div class="item">
                                   <h5>Quality Objectives:
   We have quality dvelopers to develope quality products.</h5>
                                   <p><strong>Thushara Thirumeni</strong>,Softech.</p>
                               </div>

                               <div class="item">
                                   <h5>Objectve: Provide products and services that lead to customer satisfaction,Lay emphasis on proper understanding of the requirements of our users and customers,
   Minimize users and customers complaints by taking all possible measures like, feedback received from them.
   </h5>
                                   <p><strong>Thushara Thirumeni</strong>,Softech .</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>



    </section>

    <!-- [/TESTIMONIAL]
    ============================================================================================================================-->

    <!-- [/SERVICES]
    ============================================================================================================================-->


    <section class="services white-background black" id="seven">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h3 class="title">We Are <span class="themecolor">Good In</span></h3>
            <p class="a-slog">Our objectve is provide products and services that lead to customer satisfaction,Lay emphasis on proper understanding of the requirements of our users and customers,
Minimize users and customers complaints by taking all possible measures like, feedback received from them.</p>
          </div> <!-- /col -->
        </div> <!-- /row -->
        <div class="gap"></div>

        <div class="row">
          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-diamond"></i>
              <div class="nim-service-detail">
                <h4>Strategy Solutions</h4>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-tablet"></i>
              <div class="nim-service-detail">
                <h4>Digital Design</h4>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->





          <div class="col-sm-4">
            <div class="nim-service margin-bottom">
              <i class="fa fa-map-marker"></i>
              <div class="nim-service-detail">
                <h4>Analystics</h4>
              </div> <!-- /nim-service-detail -->
            </div> <!-- /nim-service margin-bottom -->
          </div> <!-- /col -->

    </section>


    <!-- [/SERVICES]
    ============================================================================================================================-->


    <!-- [CONTACT]
    ============================================================================================================================-->
    <!--sub-form-->
    <section class="sub-form text-center" id="eight">
      <div class="container">
        <div class="col-md-12">
          <h3 class="title">Subscribe to Us <span class="themecolor"> News letter</span></h3>
          <p class="lead">Drop your email_id here and getin touch with us...</p>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3"></div>
          <div class="col-md-6 center-block col-sm-6 ">
            <form id="mc-form">
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default">SUBSCRIBE <i class="fa fa-envelope"></i> </button>
                </span> </div>
                <label for="mc-email" id="mc-notification"></label>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--sub-form end-->



      <!-- [/CONTACT]
      ============================================================================================================================-->


      <!-- [FOOTER]
      ============================================================================================================================-->

      <footer class="site-footer section-spacing text-center " id="eight">

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="footer-links"><a href="#">Thushara</a> <a href="#">Thirumeni</a></p>
            </div>
            <div class="col-md-4"> <small>&copy; 2018 SoftTech. All rights reserved.</small></div>
            <div class="col-md-4">
              <!--social-->

              <ul class="social">
                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
              </ul>

              <!--social end-->

            </div>
          </div>
        </div>
      </footer>



      <!-- [/FOOTER]
      ============================================================================================================================-->



    </div>


    <!-- [ /WRAPPER ]
    =============================================================================================================================-->

    <!-- [ DEFAULT SCRIPT ] -->
    <script src="library/modernizr.custom.97074.js"></script>
    <script src="library/jquery-1.11.3.min.js"></script>
    <script src="library/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- [ PLUGIN SCRIPT ] -->
    <script src="library/vegas/vegas.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- [ TYPING SCRIPT ] -->
    <script src="js/typed.js"></script>
    <!-- [ COUNT SCRIPT ] -->
    <script src="js/fappear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <!-- [ SLIDER SCRIPT ] -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>

    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>

  </body>


  </html>
