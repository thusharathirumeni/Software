<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
  $name=$_POST["software_name"];
  $category=$_POST["category"];
  $os=$_POST["os"];
  $price=$_POST["price"];

  $filename =$_FILES['software']["name"];
  $imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
  //echo $imageFileType;
  if($imageFileType != "zip") {
    echo "<script> alert('Sorry, only zip files are allowed');</script>";

  }
  else {
    $m="photo/".time()."".htmlspecialchars($_FILES['software']['name']);
    move_uploaded_file($_FILES['software']['tmp_name'], $m);
    $c=$_POST["byte"];
    $files=$_FILES['software']['size'];
    //$ss=filesize("software");
    //alert("Hello '$ss' ");

    $f=$_POST["description"];
    $g=$_SESSION["logid"];
    $sql="SELECT `did` FROM developer WHERE `logid`= '$g'";
    $r=mysqli_query($con,$sql) or die(mysqli_error("$con"));
    while($row=mysqli_fetch_array($r))
    {
      $aa=$row['did'];
    }

    $sq="INSERT INTO `supload`( `did`, `eid`, `sname`, `software`, `category`, `os`, `price`, `byte`, `size`, `description`, `status`) VALUES ('$aa','1','$name','$m','$category','$os','$price','$c','$files','$f','u')";
    $result1=mysqli_query($con,$sq) or die("error");

    echo "<script> alert('successfully uploaded');</script>";

  }

}
?>
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
  <style>
    th{
      width:250px;
    }
    td{
      width: 400px;
      background-color: #454545;
    }
  </style>
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
<form name="upload" action="#" method="post" enctype="multipart/form-data">

  <center>
    <table  border-radius="22px" height="608" style="margin-top:150px;">
      <tr><th colspan="2"><center>Upload Software</center></th></tr>
      <tr>
        <th> Software Name</th>
        <td><input name="software_name" class="search-tb col-md-12" type="text" placeholder="software name" >
          <span class="error" id="sname_error"></span></td>
      </tr>
      <tr>
        <th>Byte</th>
        <td><select name="byte" class="search-tb col-md-12">
          <option disabled selected>Select Bytes</option>
          <option value="32-bit">32 bit</option>
          <option value="64-bit">64 bit</option>
        </select><span class="error" id="sname_error"></span></td>
      </tr>
      <tr>
        <th> Category</th>
        <td><select name="category" class="search-tb col-md-12">
          <option disabled selected>Select Category</option>
          <option value="accounting">Accounting</option>
          <option value="videoeditor">Video Editor</option>
          <option value="os">OS</option>
        </select><span class="error" id="size_error"></span></td>
      </tr>
      <tr>
        <th> OS</th>
        <td><select name="os" class="search-tb col-md-12">
          <option disabled selected>Select OS</option>

          <option value="windows">Wndows</option>
          <option value="linux">Linux</option>
          <option value="mac">Mac</option>
        </select><span class="error" id="size_error"></span></td>
      </tr>
      <tr>
        <th> Price</th>
        <td><input name="price" type="text" class="search-tb col-md-12" ><span class="error" id="size_error"></span></td>
      </tr>
      <tr>
        <th> Description</th>
        <td><input name="description" type="text" class="search-tb col-md-12" ><span class="error" id="description_error"></span></td>
      </tr>
      <tr>
        <th> Select Software</th>
        <td><input name="software" type="file" class="search-tb col-md-12"><span class="error" id="software_error"></span></td>
      </tr>
      <tr><th colspan="2"><center><input class="btn btn-custom theme_background_color" value="Upload" type="submit" name="submit"></center></th></tr>
    </table>
    </center>
  </form>
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/upload.js"></script>
</body>
</html>
