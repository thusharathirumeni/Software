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
$sql = mysqli_query($con,"SELECT * FROM developer where `status`='1'");
if(isset($_POST['delete']))
{
$d=$_POST["did"];
$l=$_POST["logid"];
$sql2="UPDATE `developer` SET `status`='0' WHERE `did`='$d'";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `status`='0' WHERE `logid`='$l'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('delete successfull');</script>";
header("location:edit_developer.php");

}
?>
<center>
<table width="100px" border="0" style="margin-top:180px;" >
<tr><th>Id</th>
<th>Name</th>
<th>DOB</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>E-mail</th>
<th>Language</th>
<th>Photo</th>
<th>Software</th>
<th></th><th></th>
</tr>

<?php
while($row=mysqli_fetch_array($sql)){
	?><form action="#" method="post">
	<tr>

		<td><?php echo $row['did'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['age'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><?php echo $row['email_id'];?></td>
		<td><?php echo $row['language'];?></td>
		<td><img src="<?php echo $row['photo'];?>" style="width: 90px; height: 80px; " alt=""></td>
		<td><a href="<?php echo $row["previous"]; ?>">Download</a></td>
		<td><input class="sub" type="submit" name="delete" value="delete"></td>
		<td><input class="txt" type="hidden" name="logid" value="<?php echo $row['logid'];?>"></td>
	</tr></form>
	<?php
}
?>
</table>
</center>


</html>
