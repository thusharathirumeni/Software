<!DOCTYPE html>
<?php
include 'dbcon.php';
if(isset($_REQUEST['submit'])||isset($_REQUEST['term']))
{
	$term="";
	if(isset($_REQUEST['search_term'])){
		$term=$_REQUEST['search_term'];
	}
	else {
		$term=$_REQUEST['term'];
		unset($_SESSION['search']);
	}
	$sql = mysqli_query($con,"SELECT * FROM supload where `status`='1' and `sname` like '%$term%'");

?>
<center>
<table  width="249"  border="0" style="margin-top:180px;" >
<tr><th>Software_Name</th>
<th>Byte</td>
<th>Size</th>
<th>Date&Time</th>
<th>Last_update</td>
<th>Description</td>
<th>Download</th>
<th></th>
</tr>
<?php
while($row=mysqli_fetch_array($sql)){
	?><form action="#" method="post">
	<tr>
		<td><input class="txts" type="text" name="Software_Name" value="<?php echo $row['sname'];?>"></td>
		<td><input class="txt" type="text" name="byte" value="<?php echo $row['byte'];?>"></td>
		<td><input class="txt" type="text" name="size" value="<?php echo $row['size'];?>"></td>
		<td><input class="txts" type="text" style="margin:10px" name="time" value="<?php echo $row['time'];?>"></td>
		<td><input class="txts" type="text" style="margin:10px" name="photo" value="<?php echo $row['lastupdate'];?>"></td>
		<td><textarea rows="1"  cols="20">
<?php echo $row['description'];?>
</textarea>
		<td><a href="download.php?sid=<?php echo $row['sid'];?>&&file=<?php echo $row["software"];?>">Download</a></td>
		<td><input class="txt" type="hidden" name="sid" value="<?php echo $row['sid'];?>"></td>
		<td><input class="txt" type="hidden" name="did" value="<?php echo $row['did'];?>"></td>
		<td><input class="txt" type="hidden" name="eid" value="<?php echo $row['eid'];?>"></td>
	</tr></form>
	<?php
}
?>
</table>

</center>
<?php
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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

  <body class="align">
 <style>
 @use cssnext;

/* config.css */

:root {
  --baseColor: #606468;
}

/* helpers/align.css */

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* helpers/grid.css */

:root {
  --gridMaxWidth: 20rem;
  --gridWidth: 90%;
}

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: var(--gridMaxWidth);
  width: var(--gridWidth);
}

/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

:root {
  --iconFill: var(--baseColor);
}

.icons {
  display: none;
}

.icon {
  display: inline-block;
  fill: var(--iconFill);
  font-size: 1rem;
  height: 1em;
  vertical-align: middle;
  width: 1em;
}

/* layout/base.css */

:root {
  --htmlFontSize: 100%;

  --bodyBackgroundColor: #2c3338;
  --bodyColor: var(--baseColor);
  --bodyFontFamily: 'Open Sans';
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: var(--htmlFontSize);
  height: 100%;
}

body {
  background-color: var(--bodyBackgroundColor);
  color: var(--bodyColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  height: 100%;
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-height: 100%;
}

/* modules/anchor.css */

:root {
  --anchorColor: #eee;
}

a {

  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: underline;
}

/* modules/form.css */

:root {
  --formFieldMargin: 0.875rem;
}

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  transition: background-color 0.3s;
}

input[type='submit'] {
  cursor: pointer;
}

.form {
  margin: calc(var(--formFieldMargin) * -1);
}

.form input[type='password'],
.form input[type='text'],
.form input[type='submit'] {
  width: 100%;
}

.form__field {
  display: flex;
  margin: var(--formFieldMargin);
}

.form__input {
  flex: 1;
}

/* modules/login.css */

:root {
  --loginBorderRadus: 0.25rem;
  --loginColor: #eee;

  --loginInputBackgroundColor: #3b4148;
  --loginInputHoverBackgroundColor: #434a52;

  --loginLabelBackgroundColor: #363b41;

  --loginSubmitBackgroundColor: #ea4c88;
  --loginSubmitColor: #eee;
  --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
  color: var(--loginColor);
}

.login label,
.login input[type='text'],
.login input[type='password'],
.login input[type='submit'] {
  border-radius: var(--loginBorderRadus);
  padding: 1rem;
}

.login label {
  background-color: var(--loginLabelBackgroundColor);
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.login input[type='password'],
.login input[type='text'] {
  background-color: var(--loginInputBackgroundColor);
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type='password']:focus,
.login input[type='password']:hover,
.login input[type='text']:focus,
.login input[type='text']:hover {
  background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type='submit'] {
  background-color: var(--loginSubmitBackgroundColor);
  color: var(--loginSubmitColor);
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

:root {
  --paragraphMarginBottom: 1.5rem;
  --paragraphMarginTop: 1.5rem;
}

p {
  margin-bottom: var(--paragraphMarginBottom);
  margin-top: var(--paragraphMarginTop);
}

.text--center {
  text-align: center;
}

 </style>
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
             <a class="navbar-brand" >So<span class="themecolor">ftte</span>ch</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav navbar-right">
						 <li><a href="customer.php" class="page-scroll">Home</a></li>

					 </ul>
         </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid -->
     </nav>
		 <body>

  </body>
</html>
