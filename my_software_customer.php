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
	<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
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



<?php
include 'dbcon.php';
$g=$_SESSION["logid"];
$cid=0;
$sql=mysqli_query($con,"SELECT `cid` FROM `customer` WHERE `logid`='$g'") or die(mysqli_error("$con"));
while($row=mysqli_fetch_array($sql))
{
	$cid=$row['cid'];
}
echo "<center><br><br>	<h2 style='margin-top:100px'><b><U>My Download list</U></b></h2></center>";
?>
<center>

<table  width="149"  border="0" style="margin:50px" overflow-y:"scroll" >
<tr><th>Software_Name</th>
<th>Byte_os</td>
<th>Size</th>
<th>Date&Time</th>
<th>Last_update</td>
<th>Description</td>
<th>Status</th>
<th>Software</th>
<th>feedback</th>
<th></th>

</tr>
<?php
$sqlselect=mysqli_query($con,"select * from download,supload where download.sid=supload.sid and `cid`=$cid") or die(mysqli_error("$con"));
while($row=mysqli_fetch_array($sqlselect))
{

?>

<?php
	?><form action="#" method="post" enctype="multipart/form-data" onsubmit="return" class="oh-autoval-form">
	<tr>
		<td><?php echo $row['sname'];?></td>
		<td><?php echo $row['byte'];?></td>
		<td><?php echo $row['size'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['lastupdate'];?></td>
		<td><?php echo $row['description'];?>
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
		<td><textarea rows="2" name="feedback" cols="20" placeholder="Enter your feedback here" class="av-required" av-message="Please Enter the Feedback and submit" required></textarea></td></textarea></td>
		<td><b><input type="submit" name="submitt" style="padding:10px;color:white;background-color:green;border-radius:22px;font-size:16px;" value="Submit"></b></td>
	<input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
	<input type="hidden" name="did" value="<?php echo $row['did'];?>">
	<input  type="hidden" name="eid" value="<?php echo $row['eid'];?>">
	</tr></form>
	<?php
}

if(isset($_POST['submitt']))
{
	$c=$cid;

$s=$_POST["sid"];
$fee=$_POST["feedback"];

$sqss="INSERT INTO `feedback`( `cid`, `sid`, `message`,`status`) VALUES ('$c','$s','$fee',1)";
$resultss=mysqli_query($con,$sqss) or die("error");
echo "<script> alert('feedback successfull');</script>";
echo "<script>window.location.href='my_software_customer.php'</script>";
}
?>
</table>
</center>
<script src="js/oh-autoval-script.js"></script>
</body>
</html
