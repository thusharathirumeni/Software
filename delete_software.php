<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">

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
				</div>
				<li><a href="admin_approve_software.php" class="page-scroll">Approve_software</a></li>
				<li><a href="admin_change_password.php" class="page-scroll">Change_password</a></li>
				<li><a href="feedview.php" class="page-scroll">View_feedback</a></li>
	      <li><a href="logout.php" class="page-scroll">Log_out</a></li>
	          </ul>

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container-fluid -->
	    </nav>
		<style>
		th,td
		{
			padding-left: 16px;
		}
		</style>
		<?php
		include 'dbcon.php';
		$sql = mysqli_query($con,"SELECT * FROM supload where `status`='1' ");

		if(isset($_POST['reject']))
		{
		$s=$_POST["sid"];
		$sql2="UPDATE `supload` SET `eid`='1',`status`='0' WHERE `sid`='$s'";
		$result2=mysqli_query($con,$sql2) or die("error");
		echo "<script> alert('rejected');</script>";
		header("location:delete_software.php");
		}
		?>
		<center>
		<table  width="249"  border="0" style="margin-top:180px;" >
		<tr><th>Software_Name</th>
		<th>Byte</td>
		<th>Size</th>
		<th>Date&Time</th>
		<th>Last_update</td>
		<th>Description</td>
		<th>Software</th>
		<th></th>
		</tr>
		<?php
		while($row=mysqli_fetch_array($sql)){
			?><form action="#" method="post">
			<tr>
				<td><input class="txts" type="text" name="Software_Name" value="<?php echo $row['sname'];?>"></td>
				<td><input class="txt" type="text" name="byte" value="<?php echo $row['byte'];?>"></td>
				<td><input class="txt" type="text" name="size" value="<?php echo $row['size'];?>"></td>
				<td><input class="txts" type="text" name="time" value="<?php echo $row['time'];?>"></td>
				<td><input class="txts" type="text" name="photo" value="<?php echo $row['lastupdate'];?>"></td>
				<td><textarea rows="1"  cols="20">
<?php echo $row['description'];?>
</textarea>
				<td><a href="<?php echo $row["software"]; ?>">Download</a></td>
				<td><input type="submit"  style="padding:2px;color:white;background-color:red;border-radius:22px; "name="reject" value="delete"></td>
				<td><input class="txt" type="hidden" name="sid" value="<?php echo $row['sid'];?>"></td>
      	<td><input class="txt" type="hidden" name="did" value="<?php echo $row['did'];?>"></td>
        <td><input class="txt" type="hidden" name="eid" value="<?php echo $row['eid'];?>"></td>
			</tr></form>
			<?php
		}
		?>
		</table>
		</center>
</body>
</html>
