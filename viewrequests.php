<?php
include 'dbcon.php';
$userid='';
if(isset($_SESSION['logid']))
{
  $userid=$_SESSION['logid'];
}
else {
  header('location:login.php');
}
if(isset($_POST['requestsubmitt']))
{
  $name=$_POST["name"];
  $budget=$_POST["budget"];
  $duration=$_POST["duration"];
  $byte=$_POST["byte"];
  $os=$_POST["os"];
  mysqli_query($con,"INSERT INTO `request`( `name`, `price`, `cid`, `time`,`os`,`byte`) VALUES ('$name',$budget,$userid,$duration,'$os','$byte')") or die(mysqli_error($con));
}
if(isset($_POST['delete'])){
  $item=$_POST["request_id"];
  mysqli_query($con,"UPDATE `request` SET `status` = 0 WHERE `requestid`=$item") or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>The Nim- Responsive Landing Page</title>
  <!-- [ FONT-AWESOME ICON ]
  =========================================================================================================================-->
  <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
  <!-- [ PLUGIN STYLESHEET ]
  ===========================+==============================================================================================-->
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
<body style="background-image:url(images/main.jpg);">
>
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
                <a class="navbar-brand" href="index.html">So<span class="themecolor">ftte</span>ch</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="developer.php" class="page-scroll">Home</a></li>
                <li><a href="edit_developer_profile.php" class="page-scroll">Edit Profile</a></li>
                <li><a href="my_software_developer.php" class="page-scroll">My Software</a></li>
                <li><a href="upload.php" class="page-scroll">Upload</a></li>
    						<li><a href="dchange_password.php" class="page-scroll">Change Password</a></li>
    						<li><a href="viewrequests.php" class="page-scroll">View Requests</a></li>
    						<li><a href="logout.php" class="page-scroll">Log out</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <!-- [/NAV]
    ============================================================================================================================-->
    <!-- [RECENT-WORKS]
    ============================================================================================================================-->
    <section class="recent-works text-center" id="two">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br></br>
            <h3 class="title">Recent <span class="themecolor">Requests</span></h3>
            <p class="a-slog">Request the software that you need</p>
            <br></br>
          </div>
        </div>
        <div class="gap"></div>
        <div class="row">
          <?php
          $qury=mysqli_query($con,"select * from request where `status`=1");
          if (mysqli_num_rows($qury)<1)
          {
            echo "<h1>No any previous requests found..!</h1>";
          }
          else{
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
                  <h3><?php echo $row['name'];?></h3>
                  <span>Budget : <?php echo $row['price'];?></span><br>
                    <span>Time Limit : <?php echo $row['time'];?> weeks</span><br>
                  <span><?php echo $row['os'];?>(<?php echo $row['byte'];?> Bits)</span>
                </div>
                <div class="work-desc">
                    <a href="upload.php" class="down_log">Goto Upload Page</a>
                </div>
              </div> <!-- /portfolio-item -->
            <?php }
          }
            ?>
          </div> <!-- /row -->
        </div> <!-- /container -->
      </section>
      <!-- / Portfolio -->
      <!-- [/OUR-RECENT WORKS]
      ============================================================================================================================-->
      <!-- [OUR TEAM]
      ============================================================================================================================-->

  </form>
</div>
        </div>
      </section>
      <!-- [/OUR TEAM]
      ============================================================================================================================-->
      <!-- [FOOTER]
      ============================================================================================================================-->
<br><br><br><br><br>
      <footer class="site-footer section-spacing text-center " id="eight">

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>
            </div>
            <div class="col-md-4"> <small>&copy; 2015 Nim. All rights reserved.</small></div>
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
