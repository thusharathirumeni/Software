<?php
include 'dbcon.php';

if(session_status()==PHP_SESSION_NONE)
{
	session_start();
}

if(isset($_SESSION['temp_software'])){
	header('location:item_details.php');
}

if(isset($_POST['down_log'])){
  $_SESSION['temp_software']=$_POST['soft_id'];
  header("location:item_details.php");
}
if(isset($_SESSION['make_req'])){
  header("location:makerequest.php");
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
.search-tb{
float: inherit;
border-radius:10px;
height:40px;
	border:1px solid #f8198d;
}
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
<body style="background-image:url(images/main.jpg);">
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
		<!-- [RECENT-WORKS]
		============================================================================================================================-->
<br><br>
<br><br>
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
<input class="down_log" type="submit" name="down_log" value="download">
<!-- <a class="down_log" href="<?php echo $row["software"]; ?>">Download	<button ></button> -->
</a></td>
							</form>
							</div>
						</div> <!-- /portfolio-item -->
					<?php }
					?>


				</div> <!-- /row -->



			</div> <!-- /container -->
		</section>
		<!-- / Portfolio -->


		<!-- [/OUR-RECENT WORKS]
		============================================================================================================================-->

</body>
</html>
