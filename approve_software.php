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
					<li><a href="employee.php" class="page-scroll">Home</a></li>
					<li><a href="approve_software.php" class="page-scroll">Approve_software</a></li>
					<li><a href="edit_employee_profile.php" class="page-scroll">Edit_profile</a></li>
					<li><a href="#four" class="page-scroll">Feedback&Rating</a></li>
					<li><a href="change_password.php" class="page-scroll">Change_Password</a></li>
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
	form-submit-button {
		background: #565356;
		color: #fff;
		border: 1px solid #eee;
		border-radius: 20px;
		box-shadow: 5px 5px 5px #eee;
		padding: 10px 22px;

		text-shadow:none;

	}

	form-submit-button:hover {
		background: #302f30   ;
		color: #fff;
		text-transform: uppercase;
		font-size: 14px;
		border: 1px solid #eee;
		border-radius: 20px;
		box-shadow: 5px 5px 5px #eee;
		padding: 15px 32px;
		text-shadow:none;
		font-weight:bold;

	}
	</style>
	<?php
	include 'dbcon.php';
	$sql = mysqli_query($con,"SELECT * FROM supload where `status`='u' ");


	if(isset($_POST['submit']))
	{
		$s=$_POST["sid"];
		$log=$_SESSION["logid"];
		$sql="SELECT `eid` FROM employee WHERE `logid`= '$log'";
		$r=mysqli_query($con,$sql) or die(mysqli_error("$con"));
		while($row=mysqli_fetch_array($r))
		{
			$aa=$row['eid'];
		}
		$sql2="UPDATE `supload` SET `eid`='$aa',`status`='1' WHERE `sid`='$s'";
		$result2=mysqli_query($con,$sql2) or die("error");
		$sqlq=mysqli_query($con,"SELECT * FROM supload where `sid`='$s'");
		while ($rowq=mysqli_fetch_array($sqlq)) {
			$name=$rowq['sname'];
			$os=$rowq['os'];
			$c=$rowq['byte'];
			mysqli_query($con,"UPDATE `request` SET `status`= 2 WHERE name='$name' and `os`='$os' and `byte`='$c'") or die(mysqli_error($con));
			echo "<script> alert('approved');</script>";
		//	header("location:approve_software.php");
		}
	}
	if(isset($_POST['reject']))
	{
		$s=$_POST["sid"];
		$log=$_SESSION["logid"];
		$sql="SELECT `eid` FROM employee WHERE `logid`= '$log'";
		$r=mysqli_query($con,$sql) or die(mysqli_error("$con"));
		while($row=mysqli_fetch_array($r))
		{
			$aa=$row['eid'];
		}

		$sql2="UPDATE `supload` SET `eid`='$aa',`status`='0' WHERE `sid`='$s'";
		$result2=mysqli_query($con,$sql2) or die("error");
		header("location:approve_software.php");
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
							<th>Approve</th>
							<th>Reject</th>

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
										"<?php echo $row['description'];?>"
									</textarea>
									<td><a href="<?php echo $row["software"]; ?>"><b>Download</b></a></td>

									<td><input type="submit"   style="padding:2px;color:white;background-color:green;border-radius:22px;" name="submit" value="Approve"></td>
									<td><input type="submit"  style="padding:2px;color:white;background-color:red;border-radius:22px; "name="reject" value="Reject"></td>

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
