<?php
include 'dbcon.php';
$sql1="INSERT INTO `login`(`username`, `password`, `email`, `user_type`, `apstatus`, `status`) VALUES ('gd','sg','dsg','d','a',1)";
$result1=mysqli_query($con,$sql1);
echo "<script> alert('login');</script>";
?>