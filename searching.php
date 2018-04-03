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
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
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

</head>
<style>
body {margin:0;}
.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 34px 20px;
  text-decoration: none;
  font-size: 17px;

}
.topnav b {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 30px 20px;
  text-decoration: none;
  font-size: 27px;

}


.topnav a:hover {
  background-color: gray;
  color: black;
}

.topnav a.active {
    background-color: gray;
    color: white;
}
</style>
<body style="background-color:white">
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
              <li><a href="customer.php" class="page-scroll">Home</a></li>
              <li><a href="edit_customer_profile.php" class="page-scroll">Profile</a></li>
              <li><a href="my_software_customer.php" class="page-scroll">Downloads List</a></li>
  			      <li><a href="change_password.php" class="page-scroll">Change password</a></li>
  						<li><a href="searching.php" class="page-scroll">search</a></li>
  						<li><a href="logout.php" class="page-scroll">Log Out</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
		<!-- [OUR TEAMsearch]
		============================================================================================================================-->
<br>
<br>
		<section class="our-team white-background black" id="three">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12"><br><br><br><br><br>
						<h3 class="title">Search <span class="themecolor">Softwares</span></h3>
					</div>
				</div>
        <br>
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
					</div> <!-- team-member -->
				</div> <!-- end row -->
			</div>
		</section>

		<!-- [/OUR TEAMsearch]
		============================================================================================================================-->
</body>
</html>
