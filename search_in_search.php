<?php
include 'dbcon.php';
$term=$_POST['search-term'];
$category=$_POST['catvalue'];
$os=$_POST['osvalue'];
$price=$_POST['pricevalue'];
$size=$_POST['sizevalue'];
$byte=$_POST['bytevalue'];
if(isset($_POST['down_log'])){
  if(session_status()==PHP_SESSION_NONE)
  {
  	session_start();
  }
  $_SESSION['temp_software']=$_POST['soft_id'];
  header("location:login.php");
}
if(isset($_POST['down_dir'])){
  if(session_status()==PHP_SESSION_NONE)
  {
  	session_start();
  }
  $_SESSION['temp_software']=$_POST['soft_id'];
  header("location:item_details.php");
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
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li><a href="#eight" class="page-scroll">Search</a></li>
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
            <h3 class="title">Search <span class="themecolor">Result</span></h3>
            <p class="a-slog">Here is the  softwares that are matching for your requirements</p>
            <br></br>
          </div>
        </div>

        <div class="gap"></div>
        <div class="row">
          <?php
          $qury=mysqli_query($con,"select * from supload where (sname like '%$term%' or description like '%$term%') and status=1 $category $os $price $size $byte");
          if (mysqli_num_rows($qury)<1)
          {
              ?>
              <h2>No software found..!</h2>
              <br>
              <h3>Make a request for your requirement, click make requet button below..!</h3>
              <br><br><br>
              <div class="row">
                <div class="col-md-12 text-center">
                  <a href="makerequest.php" class="btn btn-custom theme_background_color">Make Request</a>
                </div>
              </div>
              <?php
          }
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
                <h3><a href="#"><?php echo $row['sname'];?></a></h3>
                <span><?php echo $row['description'];?>(<?php echo $row['byte'];?>)</span>
              </div>

              <div class="work-desc">
                <form action="" method="post">
                  <input type="hidden" name="soft_id" value="<?php echo $row['sid'];?>">
                  <?php
                    if(isset($_SESSION["logid"])){
                      ?><input type="submit" class="down_log" value="Download" name="down_dir"><?php
                    }
                    else {
                      ?><input type="submit" class="down_log"value="Login to Download" name="down_log"><?php
                    }
                  ?>

              </form>
              </div>





            </div> <!-- /portfolio-item -->
          <?php }
          ?>


        </div> <!-- /row -->


        </div> <!-- /row -->

      </div> <!-- /container -->
    </section>
    <!-- / Portfolio -->


    <!-- [/OUR-RECENT WORKS]
    ============================================================================================================================-->

    <!-- [OUR TEAM]
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
              <input type="text" name="search-term" class="search-tb col-md-4">
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
