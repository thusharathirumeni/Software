<!DOCTYPE html>
echo "<script>window.location.href='admin_approve_software.php'</script>";

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
	<link rel="stylesheet" type="text/css" href="css/custom.css">
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
							<a href="add_developer.php" class="page-scroll">Add developer</a>
								<a href="add_employee.php" class="page-scroll">Add employee</a>
							</div>
						</div>
			<div class="dropdown" style="float:left;">
				<button class="dropbtn">Delete</button>
				<div class="dropdown-content" style="left:0;">
					<a href="edit_customer.php" class="page-scroll">Delete customer</a>
					<a href="edit_developer.php" class="page-scroll">Delete developer</a>
					<a href="edit_employee.php" class="page-scroll">Delete Employee</a>
				</div>
			</div><div class="dropdown" style="float:left;">
				<button class="dropbtn">Software</button>
				<div class="dropdown-content" style="left:0;">
			<li><a href="admin_approve_software.php" class="page-scroll">Approve software</a></li>
			<li><a href="delete_software.php" class="page-scroll">Delete software</a></li>
		</div>
	</div>
			<li><a href="admin_change_password.php" class="page-scroll">Change password</a></li>
			<li><a href="feedview.php" class="page-scroll">View feedback</a></li>
			      <li><a href="index.php" class="page-scroll">Log out</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	<h1>welcome admin</h1><input type="button">
</html>
