<!DOCTYPE html>
<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
$a=$_POST["email"];
$b=$_POST["password"];
$r="SELECT email FROM login WHERE email= '$a' ";
$result = mysqli_query($con,$r);
if(mysqli_num_rows($result) == 0) {
   //  header("Location: registration.php");
	 $b=SHA1($b);
	 $sqlc="INSERT INTO `login`( `username`, `password`, `email`, `user_type`, `apstatus`, `status`) VALUES ('$a','$b','$a','e','a',1)";
	 $resultc = mysqli_query($con,$sqlc);
	 echo "<script> alert('email id ok customer added');</script>";
	   header("Location: add_employee.php");
} elseif (mysqli_num_rows($result) !== 0) {
	echo "<script> alert('email id alredy exist please try another one');</script>";

}
}

?>
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
	<link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/rose.css">
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
	            <li><a href="admin.php" class="page-scroll">Home</a></li>
							<div class="dropdown" style="float:left;">
								<button class="dropbtn page-scroll">Add</button>
								<div class="dropdown-content" style="left:0;">
								<a href="add_developer.php" class="page-scroll">Add_developer</a>
									<a href="add_employee.php" class="page-scroll">Add_employee</a>
								</div>
							</div>
				<div class="dropdown" style="float:left;">
					<button class="dropbtn">Delete</button>
					<div class="dropdown-content" style="left:0;">
						<a href="edit_customer.php" class="page-scroll">Delete customer</a>
						<a href="edit_developer.php" class="page-scroll">Delete developer</a>
						<a href="edit_employee.php" class="page-scroll">Delete Employee</a>
					</div>
				</div><div class="dropdown" style="float:left;">
					<button class="dropbtn">Software</button>
					<div class="dropdown-content" style="left:0;">
				<li><a href="admin_approve_software.php" class="page-scroll">Approve_software</a></li>
				<li><a href="delete_software.php" class="page-scroll">Delete_software</a></li>
			</div>
		</div>
				<li><a href="admin_change_password.php" class="page-scroll">Change_password</a></li>
				<li><a href="feedview.php" class="page-scroll">View_feedback</a></li>
				      <li><a href="index.php" class="page-scroll">Log_out</a></li>
	          </ul>

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container-fluid -->
	    </nav>
		<form action="#" method="post">

<center>
<table width="200" height="608" border="0" style="margin-top:180px;">
<tr><th><center style="margin-top:30px;"><h3><i>Add Employee</i></h3></center>
<div width="300" height="608" border="1" style="margin-top:40px;">
Email &nbsp; &nbsp; &nbsp; <input  name="email" type="email" required>
</div>
<div width="300px" height="608" border="1" style="margin-top:40px;">
Password &nbsp; &nbsp; &nbsp; <input name="password" type="text" required>
</div>
<center><div  border="1" style="margin-top:20px;"><input  type="submit" name="submit">
</div></center>
</th><tr>
	</table
</center>
</form>


</html>
