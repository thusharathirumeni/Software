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
<?php
include 'dbcon.php';
$g=$_SESSION["logid"];
$sql=mysqli_query($con,"SELECT `did` FROM `developer` WHERE `logid`='$g'") or die(mysqli_error("$con"));
while($row=mysqli_fetch_array($sql))
{
	$did=$row['did'];
}
$sqlselect=mysqli_query($con,"select * from `supload` where `did`='$did' and `status`='0' or `status`='1' or `status`='u'") or die(mysqli_error("$con"));

if(isset($_POST['submitt']))
{
	$soft=$_POST["software"];
	echo "<script> alert('$soft');</script>";
$a=$_POST["Software_Name"];
$m="photo/".time()."".htmlspecialchars($_FILES['software']['name']);
          move_uploaded_file($_FILES['software']['tmp_name'], $m);
					echo "<script> alert('$m');</script>";
$c=$_POST["byte"];
$d=$_POST["size"];
$f=$_POST["description"];
$s=$_POST["sid"];
$sq="UPDATE `supload` SET `sname`='$a',`software`='$m',`byte`='$c',`size`='$d',`description`='$f',`status`='u' WHERE `sid`='$s'";
$result1=mysqli_query($con,$sq) or die("error");
header("location:my_software_developer.php");
}
if(isset($_POST['reject']))
{
$s=$_POST["sid"];
$sql2="UPDATE `supload` SET `status`='d' WHERE `sid`='$s'";
$result2=mysqli_query($con,$sql2) or die("error");
echo "<script> alert('rejected');</script>";
header("location:my_software_developer.php");
}
?>
<center>
	<h2 style="margin-top:100px"><b><U>MY UPLOADS</U></b></h2>
<table  width="149"  border="0" style="margin:50px" overflow-y:"scroll" >
<tr><th>Software_Name</th>
<th>Byte</td>
<th>Size</th>
<th>Date&Time</th>
<th>Last_update</td>
<th>Description</td>
<th>Status</th>
<th>Software</th>
<th>update</th>
<th></th>
<th></th>
</tr>
<?php
while($row=mysqli_fetch_array($sqlselect)){
	?><form action="#" method="post" enctype="multipart/form-data">
	<tr>
		<td><input class="txts" type="text" name="Software_Name" value="<?php echo $row['sname'];?>"></td>
		<td><input class="txt" type="text" name="byte" value="<?php echo $row['byte'];?>"></td>
		<td><?php echo $row['size'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['lastupdate'];?></td>
		<td><textarea rows="1" name="description" cols="20">
<?php echo $row['description'];?>
</textarea>
    <td><?php  $st=$row['status'];
		if ($st=="u"){ echo "Pending";}
		elseif ($st=='1') {
			echo "Approved";
		}
		else {
			echo "Rejected";
		}
		?></td>
		<td><a href="<?php echo $row["software"]; ?>">Download</a></td>
		<td><input name="software" type="file" ></td>
		<td><b><input type="submit" name="submitt" style="padding:2px;color:white;background-color:green;border-radius:22px;" value="Update"></b></td>
		<td><b><input type="submit"  style="padding:2px;color:white;background-color:red;border-radius:22px; "name="reject" value="Delete"></b></td>
	<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
	<input type="hidden" name="did" value="<?php echo $row['did'];?>">
	<input  type="hidden" name="eid" value="<?php echo $row['eid'];?>">
	</tr></form>
	<?php
}
?>
</table>
</center>
</html
