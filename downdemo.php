<?php
include 'dbcon.php';
$res=mysqli_query($con,"select * from developer");
echo "<table>";

while($row=mysqli_fetch_array($res))
	
	{
		echo "<tr>";
		echo "<td>"; echo $row["previous"]; echo "</td>";
	echo "<td>"?> 
	<a href="<?php echo $row["previous"]; ?>">Download<img src="images/download.jpg"></a><?php echo "</td>";
	
		
		echo "</tr>";
	}
	
echo "</table>"
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Shopper</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	
        
        
     <style>
	     .error{
	  color:red;
  }
</style>
        
        </head>    
        
    <body>		

    </body>
</html>