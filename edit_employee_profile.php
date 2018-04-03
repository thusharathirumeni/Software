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
						<li><a href="employee.php" class="page-scroll">Home</a></li>
						<li><a href="approve_software.php" class="page-scroll">Approve_software</a></li>
						<li><a href="edit_employee_profile.php" class="page-scroll">Edit_profile</a></li>
						<li><a href="#four" class="page-scroll">Feedback&Rating</a></li>
						<li><a href="echange_password.php" class="page-scroll">Change_Password</a></li>
						<li><a href="logout.php" class="page-scroll">Log_out</a></li>
					</ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php
include 'dbcon.php';
$g=$_SESSION["logid"];
echo $g;
$sql = mysqli_query($con,"SELECT * FROM employee,login where employee.logid=login.logid and employee.logid='$g'");
$sq3l = mysqli_query($con,"SELECT * FROM login where `logid`='$g'");

if(isset($_POST['update']))
{

$user=$_POST["username"];
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"];
//$photo=$_POST["photo"];
$phone=$_POST["phone"];
$language=$_POST["language"];
$experiance=$_POST["experiance"];
$m="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
              move_uploaded_file($_FILES['photo']['tmp_name'], $m);

$email=$_POST["email"];
$g=$_SESSION["logid"];
$sql2="UPDATE `employee` SET `name`='$name',`age`='$age',`gender`='$gender',`address`='$address',`email_id`='$email',`photo`='$m',`phone`='$phone',`language`='$language',`experiance`='$experiance' WHERE `logid`=$g";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `username`='$user',`email`='$email' WHERE `logid`='$g'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('delete successfull');</script>";
header("location:edit_employee_profile.php");


}
?>
<center>
	<h3 style="margin-top:100px;">Employee Edit Profile</h3>

<table  width="449" height="408" border="0" style="margin-top:50px;" >

<?php
while($row=mysqli_fetch_array($sql)){
	?><form action="#" method="post" enctype="multipart/form-data">
	<tr>
		<tr><th></th><td><img src="<?php echo $row['photo'];?>" style="width: 150px; height: 130px; " alt=""></td></tr>
		<tr><th>Name</th><td><input class="txxs" width="100" type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
		<tr><th>Date_of_Birth</th><td><input class="txxs" type="text" name="age" value="<?php echo $row['age'];?>"></td></tr>
		<tr><th>Gender</th><td><input class="txxs" type="text" name="gender" value="<?php echo $row['gender'];?>"></td></tr>
		<tr><th>Address</th><td><input class="txxs" type="text"  name="address" value="<?php echo $row['address'];?>"></td></tr>
		<tr><th>Email_Id</th><td><input class="txxs" type="text" name="email" value="<?php echo $row['email_id'];?>"></td></tr>
		<tr><th>Phone</th><td><input class="txxs" type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
		<tr><th>Language</th><td><input class="txxs" type="text" name="language" value="<?php echo $row['language'];?>"></td></tr>
		<tr><th>Experiance</th><td><input class="txxs" type="text" name="experiance" value="<?php echo $row['experiance'];?>"></td></tr>
		<tr><th>User Name</th><td><input class="txxs" type="text" name="username" value="<?php echo $row['username'];?>"></td></tr>
		<tr><th>Change Photo</th><td><input class="txxs" type="file" name="photo" value="<?php echo $row['photo'];?>"></td></tr>
		<tr></tr>
		<tr><th></th><td><input type="submit" class="txxs" class="btn btn-custom-outline" name="update" value="Update"></td></tr></center>
	</tr></form>
	<?php
}
?>

</table>
</center>


</html>
