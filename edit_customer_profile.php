<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<script src="js/jquery-3.2.1.js"> </script>
<script src="js/oh-autoval-script.js"></script>
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
	<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
</head>
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
<?php
include 'dbcon.php';
$g=$_SESSION["logid"];
//echo $g;
$sql = mysqli_query($con,"SELECT * FROM customer,login where customer.logid=login.logid and customer.logid='$g'");
$sq3l = mysqli_query($con,"SELECT * FROM login where `logid`='$g'");
if(isset($_POST['update']))
{
$user=$_POST["username"];
$l=$_POST["logid"];
$name=$_POST["name"];
$email=$_POST["email"];
$g=$_SESSION["logid"];
$sql2="UPDATE `customer` SET `name`='$name',`email_id`='$email' WHERE `logid`=$g";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `username`='$user',`email`='$email' WHERE `logid`='$g'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('delete successfull');</script>";
header("location:edit_customer_profile.php");
}
?>
<center>
	<br><br>
<h3 style="margin-top:100px;" >CUSTOMER PROFILE</h3>
<?php
$email="";
$name="";
$username="";
while($row=mysqli_fetch_array($sql)){
	$name= $row['name'];
	$email=$row['email_id'];
	$username=$row['username'];
}
	?>
	<form action="" method="post" id="cust-edit" class="oh-autoval-form" onsubmit="return">
		<table  width="549" height="508" border="0" style="margin-top:50px;" >
	<tr>
	    <tr><th></th><td></td></tr>
		<tr><th>&nbsp; &nbsp;Name</th><td> &nbsp;<input  width="100" type="text" class="txxs av-name" av-message="Invalid Name"  name="name" value="<?php echo $name?>">
</td></tr>
		<tr><th>&nbsp; &nbsp;E_mail</th><td>&nbsp; &nbsp;<input class="txxs av-email" type="text" name="email" av-message="Invalid Email Address"  value="<?php echo  $email?>"></td></tr>
		<tr><th>&nbsp; &nbsp;User Name</th><td>&nbsp; &nbsp;<input class="txxs av-username" type="text" name="username"  av-message="Invalid Username" value="<?php echo $username ?>"></td></tr>
		<input type="hidden" name="logid" value="<?php echo $row['logid'];?>">
		<tr><th></th><td> &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" class="form-submit-button" name="update" value="update"></td> </tr>
	</tr></table></form>
</center>
<script src="js/oh-autoval-script.js"></script>
</body>
</html>
