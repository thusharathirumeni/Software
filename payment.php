<?php
include 'dbcon.php';
  if(session_status()==PHP_SESSION_NONE)
  {
  	session_start();
  }
  if(isset($_POST['make_payment'])){
    $_SESSION['paid_sw']=$_SESSION['pay'];
    header("location:item_details.php");
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

    <!-- [OUR TEAM]
    ============================================================================================================================-->
<br></br>
<br></br>
    <section class="our-team white-background black" id="three">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h3 class="title">Pay <span class="themecolor">Now</span></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-12">
            <form action="" method="post">
              <input type="text" name="search-term" class="search-tb col-md-4" style="margin:10px"placeholder="Card Number"><br>
              <select name="month"  class="search-tb col-md-1" style="margin:10px"placeholder="Card Number">
                <option selected disabled>Month</option>
              <?php
              for($i=1;$i<=12;$i++){
                echo "<option value='$i'>$i</option>";
              } ?>
            </select>
            <select name="year"  class="search-tb col-md-1" style="margin:10px"placeholder="Year">
              <option selected disabled>Year</option>
            <?php
            for($i=2018;$i<=2100;$i++){
              echo "<option value='$i'>$i</option>";
            } ?>
          </select>
              <input type="text" name="search-term" class="search-tb col-md-2" style="margin:10px; width:12.666667%" placeholder="CVV"><br>
              <input type="text" name="search-term" class="search-tb col-md-4" style="margin:10px" placeholder="Card holder ">

              <div class="row margin-top">
                <div class="col-md-12 text-center">
                  <input type="submit" class="btn btn-custom theme_background_color" name="make_payment"value="Make Payment">
                </div> <!-- /col -->
              </div> <!-- /row -->
            </form>
          </div> <!-- team-member -->

        </div> <!-- end row -->



      </div>
    </section>

    <!-- [/OUR TEAM]
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
