<?php
include 'dbcon.php';
$g=$_SESSION["logid"];

				 echo $g;
				 
				 
				 
				 $sql="SELECT `did` FROM developer WHERE `logid`= '$g'";
$r=mysqli_query($con,$sql) or die(mysqli_error("$con"));
 while($row=mysqli_fetch_array($r))
 {
	 echo $row['did'];
//	 echo $r;
 }
// echo $r;

?>
<html>
<head>
</head>
<body><h1>welcome admin</h1>
</body>
</html>