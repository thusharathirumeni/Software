<?php
  include 'dbcon.php';
  $file=$_GET['file'];
  $sid=$_GET['sid'];
  $logid=$_SESSION["logid"];
  $cid=0;
  $qry=mysqli_query($con,"select * from customer where logid=$logid");
  while ($row=mysqli_fetch_array($qry)) {
    $cid=$row['cid'];
  }
  mysqli_query($con,"insert into download (sid,cid) values($sid,$cid)");
  header("location:$file");
 ?>
