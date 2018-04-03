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
				      <li><a href="logout.php" class="page-scroll">Log_out</a></li>
	          </ul>

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container-fluid -->
	    </nav>
<?php
include 'dbcon.php';
$g=$_SESSION["logid"];
$sqlse=mysqli_query($con,"SELECT * FROM `feedback` f join `customer` c on f.cid=c.cid join supload s on s.sid=f.sid WHERE f.status=1") or die(mysqli_error("$con"));
//$sqlse=mysqli_query($con,"SELECT * FROM `supload` ,`feedback` WHERE `feedback`.sid=supload.sid and feedback.status=1") or die(mysqli_error("$con"));

if(isset($_POST['reject']))
{
$s=$_POST["fid"];
$time=$_POST["message"];

$sql2="UPDATE `feedback` SET `status`='0' WHERE `fid`='$s' and `message`='$time'";
$result2=mysqli_query($con,$sql2) or die("error");
echo "<script> alert('rejected');</script>";
header("location:feedview.php");
}
?>
<center>
	<h2 style="margin-top:100px"><b><U>All Feedback</U></b></h2>
<table  width="70%"  border="0" style="margin:50px" overflow-y:"scroll" >
	<th>Consumer_name</th>
<th>Software_id</td>
<th>Software_name</td>
<th>Message</th>
<th>Date_&_Time</th>
<th></th><th></th>
</tr>
<?php
while($row=mysqli_fetch_array($sqlse)){
	?><form action="#" method="post" enctype="multipart/form-data">
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['sid'];?></td>
		<td><?php echo $row['sname'];?></td>
		<td><?php echo $row['message'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><input class="txt" type="hidden" name="fid" value="<?php echo $row['fid'];?>"></td>

		<td><b><input type="submit"  style="padding:2px;color:white;background-color:red;border-radius:22px;" name="reject" value="DELETE"></b></td>


		</tr></form>
	<?php
}
?>
</table>
</center>
</html
