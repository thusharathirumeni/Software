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
$sql = mysqli_query($con,"SELECT * FROM developer,login where developer.logid=login.logid and developer.logid='$g'");
$sq3l = mysqli_query($con,"SELECT * FROM login where `logid`='$g'");
if(isset($_POST['update']))
{
	//u.show();
$user=$_POST["username"];
//echo "<script> alert('$user');</script>";
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"];
//$photo=$_POST["photo"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$language=$_POST["language"];
$m="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
              move_uploaded_file($_FILES['photo']['tmp_name'], $m);
		$mp="photo/".time()."".htmlspecialchars($_FILES['previous']['name']);
              move_uploaded_file($_FILES['previous']['tmp_name'], $mp);
$sql2="UPDATE `developer` SET `name`='$name',`age`='$age',`gender`='$gender',`address`='$address',`phone`='$phone',`email_id`='$email',`language`='$language',`previous`='$mp',`photo`='$m' WHERE `logid`=$g";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `username`='$user',`email`='$email' WHERE `logid`='$g'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('data entered successfull');</script>";
header("location:edit_developer_profile.php");


}
?>
<center>
<i><h3 style="margin-top:120px;" color="red" >Developer Edit Profile</h3></i>
<?php
$name="";
$age="";
$gender="";
$address="";
$email="";
$phone="";
$language="";
$username="";
$previous="";
$photo="";
while($row=mysqli_fetch_array($sql)){
	$name= $row['name'];
	$age=$row['age'];
	$gender=$row['gender'];
	$address=$row['address'];
	$email=$row['email'];
	$phone=$row['phone'];
	$language=$row['language'];
	$username=$row['username'];
	$previous=$row['previous'];
	$photo=$row['photo'];
}
?>
<form action="#" method="post" class="oh-autoval-form" enctype="multipart/form-data">
<table  width="449" height="408" border="0"  style="margin-top:50px;" >
	<tr>
		<tr><th><img src="<?php echo $photo?>" style="width: 150px; height: 130px; "></th><td></td></tr>
		<tr><th>Name</th><td><input class="txxs av-name" av-message="Invalid Name" width="100" type="text" name="name" value="<?php echo $name?>"></td></tr>
		<tr><th>Date Of Birth</th><td><?php echo $row['age'];?><br><input class="txxs av-required" av-message="Invalid age" type="date" name="age" value="<?php echo $age?>" min='01-01-1975' max='01-01-1999' ></td></tr>
		<tr><th>Gender</th><td><input type="text"  class="txxs av-name" av-message="Invalid gender"  name="gender" value="<?php echo $gender?>"></td></tr>
		<tr><th>Address</th><td><textarea name="address" class="txxs av-required" av-message="Invalid address" ><?php echo $address?></textarea></td></tr>
		<tr><th>Email_Id</th><td><textarea name="email"  class="txxs av-email" av-message="Invalid email" ><?php echo $email?></textarea></td></tr>
		<tr><th>Phone</th><td><input  type="text"  class="txxs av-number" av-message="Invalid number"  name="phone" value="<?php echo $phone?>"></td></tr>
		<tr><th>Language</th><td><input  class="txxs av-name" av-message="Invalid language"  type="text" name="language" value="<?php echo $language?>"></td></tr>
		<tr><th>User Name</th><td><input  class="txxs av-name" av-message="Invalid userName"  type="text" name="username" value="<?php echo $username?>"></td></tr>
		<tr><th>Previous_work</th><td><a href="<?php echo $previous ?>">Download</a><input  class="txxs av-docgroup" av-message="enter previous work"  type="file" name="photo" value="<?php echo $previous?>"></td></td>
</tr>
	    <tr><th>Change_Photo</th><td><input  class="txxs av-photo" av-message="Invalid photo"  type="file" name="photo" value="<?php echo $photo?>" ></td></tr>
		<tr></tr>
		<tr><th></th><td><input type="submit" class="txxs" name="update" class="btn btn-custom-outline" value="Update"></td></tr></center>
	</tr>
</table></form>
</center>
</html>
