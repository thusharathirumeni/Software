<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Nim- Responsive Landing Page</title>

	<!-- [ FONT-AWESOME ICON ]
        =========================================================================================================================-->
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
        =================	========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/rose.css">
	
	<style>
	  body {
  font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
  //background:blue;
 // background:blue;
}

a,
[type="submit"] {
  -webkit-transition: all .25s ease-in;
  transition: all .25s ease-in;
}

.signup__container {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  margin-right: auto;
  margin-left: auto;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 50rem;
  height: 35rem;
  border-radius: 0.1875rem;
  box-shadow: 0px 0.1875rem 0.4375rem rgba(0, 0, 0, 0.25);
}

.signup__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.76);
}

.container__child {
  width: 50%;
  height: 100%;
  color: #fff;
}

.signup__thumbnail {
  position: relative;
  padding: 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: url(http://ultraimg.com/images/spectre-login.jpg);
  background-repeat: no-repeat;
  background-position: top center;
  background-size: cover;
}

.thumbnail__logo,
.thumbnail__content,
.thumbnail__links {
  position: relative;
  z-index: 2;
}

.thumbnail__logo {
  -ms-flex-item-align: start;
      align-self: flex-start;
}

.logo__shape {
  fill: #fff;
}

.logo__text {
  display: inline-block;
  font-size: .8rem;
  font-weight: 700;
  vertical-align: bottom;
}

.thumbnail__content {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}

h1,
h2 {
  font-weight: 300;
  color: white;
}

.heading--primary {
  font-size: 1.999rem;
}

.heading--secondary {
  font-size: 1.414rem;
}

.thumbnail__links {
  -ms-flex-item-align: end;
      align-self: flex-end;
  width: 100%;
}

.thumbnail__links a {
  font-size: 1rem;
  color: #fff;
}
.thumbnail__links a:focus, .thumbnail__links a:hover {
  color: rgba(255, 255, 255, 0.5);
}

.signup__form {
  padding: 2.5rem;
  background: #fafafa;
}

label {
  font-size: .85rem;
  text-transform: uppercase;
  color: #ccc;
}

.form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  font-size: 12;
}
.form-control:focus {
  border-color: #111;
}

[type="text"] {
  color: #111;
}

[type="password"] {
  color: #111;
}

.btn--form {
  padding: .5rem 2.5rem;
  font-size: .95rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #fff;
  background: #111;
  border-radius: 2.1875rem;
}
.btn--form:focus, .btn--form:hover {
  background: #323232;
}

.signup__link {
  font-size: .8rem;
  font-weight: 600;
  text-decoration: underline;
  color: #999;
}
.signup__link:focus, .signup__link:hover {
  color: #787878;
}
	  </style>
	
	
	

</head>
<body >
<!-- [ LOADERs ]
================================================================================================================================-->
    <div class="preloader">
    <div class="loader theme_background_color">
        <span></span>

    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
  <!-- [NAV]
 ============================================================================================================================-->
   <!-- Navigation
    ==========================================-->
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
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#one" class="page-scroll">About</a></li>
            <li><a href="#two" class="page-scroll">Our Works</a></li>
            <li><a href="#three" class="page-scroll">Team</a></li>
            <li><a href="#four" class="page-scroll">Inspiration</a></li>
            <li><a href="#five" class="page-scroll">Status</a></li>
            <li><a href="#six" class="page-scroll">Testimonials</a></li>
             <li><a href="#seven" class="page-scroll">Services</a></li>
            <li><a href="#eight" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->

   <!-- [/MAIN-HEADING]
 ============================================================================================================================-->
   <section class="main-heading" id="home">
       <div class="overlay">
           <div class="container">
               <div class="row">
                <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg"><g><path d="M279.54 11.23c5.06-1.24 10.33-.66 15.47-1.32 26.09-1.36 52.44.63 77.63 7.76 38.63 11.08 74.51 32.27 102.28 61.39 32.95 34.16 55.53 78.53 62.14 125.61 1.63 7.67.96 15.58 2.31 23.28.01 7.1.38 14.22-.05 21.32-1.32 8.97-.57 18.15-2.38 27.07-6.67 42.3-25.61 82.58-53.78 114.85-3.75 4.86-8.6 8.74-12.23 13.71-32.8 32.36-75.61 54.47-121 62.4-5.67.56-11.22 2.17-16.96 2.07-3.76-.23-7.27 1.45-11.01 1.33-8.27.11-16.53.05-24.79.02-4.81.14-9.34-1.82-14.18-1.45-44.88-4.81-87.99-23.76-122.49-52.79-4.74-4.24-9.77-8.22-13.87-13.12-4.35-5.3-9.66-9.75-13.77-15.26-25.43-30.32-43.18-67.2-50.09-106.22-3.84-20.31-3.99-41.1-3.04-61.7.59-2.94.87-5.92.97-8.91 6.72-59.65 38.67-115.74 85.84-152.72 21.95-17.38 47.15-30.63 73.83-39.07 12.79-3.84 25.82-7.21 39.17-8.25m16.85 12.15c-8.99-.03-17.86 1.53-26.69 3.02-44.19 7.93-85.58 30.27-116.73 62.56-15.5 16.07-28.39 34.62-38.26 54.65-14.69 30.22-22.17 63.83-22.07 97.39.64 23.2 4.49 46.36 12.22 68.29 12.19 34.77 33.25 66.55 61.15 90.71 6.76 7.03 14.73 12.72 22.79 18.16 26.62 17.74 57.27 29.25 88.87 33.96 14.53 1.77 29.28 3.06 43.91 1.52 8.37.05 16.64-1.4 24.9-2.63 35.37-6.49 68.91-22.11 96.91-44.63 10.72-9.94 21.96-19.5 30.88-31.18 20.56-24.76 35.09-54.35 42.74-85.58 2.71-10.01 3.87-20.33 5.39-30.55.19-10.62 1.76-21.25.41-31.85-.33-5.1-.11-10.24-1.22-15.26-7.01-59.14-39.92-114.66-88.53-149.09-34.28-24.51-75.94-38.52-118.03-39.76-6.2-1.09-12.44-.08-18.64.27zM247.48 60.49c11.76-17.34 31.83-28.1 52.53-29.91 6.58-.22 13.2-.39 19.76.3 14.15 2.34 28.34 7.43 39.09 17.22 10.51 9.43 18.01 22.35 20.28 36.33 1.32 11.33.12 23.24-5.37 33.4-6.78 13.23-18.28 22.99-28.91 33.03-4.22 4.1-9.98 7.28-11.78 13.26-2.06 7.35.57 16.84 8.05 20.03 5.79.96 11.95.89 17.67-.24 18.97-10.7 31.37-30.3 51.35-39.51 10.18-4.97 21.84-4.54 32.85-3.83 12.09 1.69 24.29 6.61 32.56 15.87 16.38 16.66 25.99 38.86 30.92 61.44 3.45 17.6 5.4 35.72 3.39 53.61-2.79 30.45-14.14 59.88-31.54 84.95-10.29 15.55-24.99 27.88-41.31 36.72-8.85 4.46-18.19 8.44-28.09 9.72-.92-1.62-1.89-3.19-2.65-4.88 5.01-4.31 10.54-7.97 15.74-12.05 27.42-20.23 46.93-51.12 52.86-84.71 1.6-7.98 2.92-16.08 2.71-24.24-.11-7.47.47-15.03-.89-22.42-.81-6.52.25-13.47-2.56-19.6-2.88-8.76-5.44-18.66-13.54-24.14 2.58-1.98 5.52-3.4 8.49-4.71-1.88-2.13-3.73-4.53-6.46-5.58-2.89-.68-5.45 1.21-8.06 2.08-.37-1.52-.68-3.04-.93-4.57 1.3-1.13 2.74-2.1 4.12-3.13-1.83-3.12-5.44-5.59-9.16-4.53-1.05.86-1.82 1.98-2.67 3.02-5.2-.15-11.22-.74-15.15 3.42-1.99 1.41-1.83 4.11-1.08 6.16 2.82 6.01 7.45 10.92 10.46 16.83 6.35 11.83 10.49 24.86 12.23 38.17 1.41 9.55 1.77 19.37.19 28.93-1.5 17.17-8.67 33.16-16.57 48.25-13.76 26.43-34.63 49.71-61.34 63.42-3.72 1.54-7.47-3.31-4.16-6.09 26.79-26.31 44.32-61.62 49.91-98.68.51-6.99 2.16-13.86 2.08-20.89-.01-3.29 1.68-6.23 3.3-8.97-1.88-2.09-3.81-4.13-5.73-6.17 2.49-.95 5-1.85 7.42-2.96-1.72-1.28-3.78-1.55-5.83-1.8-.19-2.16-.33-4.32-.48-6.48 1.98-.08 3.96-.16 5.94-.36-2.6-2.93-6.27-4.52-9.17-7.1 1.55-1.54 3.1-3.07 4.71-4.55l-.16-2.28c-1.69.35-3.3.95-4.88 1.61-3.1-2.2-6.69-4.43-10.65-3.12-7.17 2.63-12.46 10.39-11.58 18.07 3.99 17.05 4 34.89 1.43 52.16-5.15 32.3-21.74 63.8-49.03 82.64-1.23-.21-2.36-.78-3.51-1.2.2-1.13.11-2.36.71-3.38 14.88-26.57 24.82-56.75 23.76-87.47 1.67-.2 3.35-.38 5.02-.55-1.39-3.73-5.4-5.53-6.85-9.22 2.61-.29 5.2-.73 7.72-1.49-2.87-2.66-6.31-4.63-8.92-7.57 2.48-.67 4.99-1.25 7.53-1.65l.16-1.28c-2.44-1.39-4.76-2.97-7.1-4.52.56-2.97 1.22-5.92 2.08-8.81-4.06 1.47-8.24.68-12.38.19-6.85-.47-11.44 6.34-12.41 12.41-.92 12.28.6 24.66-.91 36.91-1.58 22.98-7.38 45.55-15.93 66.91-1.61 4.47-4.38 8.34-6.66 12.47-.82.13-1.65.26-2.46.41-1.08-12.95-1.34-25.96-.61-38.94.68-5.03-1.4-10.93 2.82-14.84-1.56-3.07-3.16-6.14-4.35-9.38 1.95-.19 3.9-.32 5.85-.44.04-.8.09-1.59.15-2.37-1.95-.57-3.88-1.2-5.82-1.77-.07-.41-.22-1.24-.3-1.65 2.52-1.63 4.95-3.42 7.01-5.6-1.99-.35-3.98-.71-5.95-1.16l.42-6.62c1.87.48 3.68 1.16 5.47 1.89-.07-1.83-.11-3.66-.16-5.48-1.91.3-3.79.74-5.68 1.13.07-2.17.17-4.33.27-6.48 1.59.14 3.19.31 4.78.49.06-1.7.13-3.38.21-5.07-1.79.18-3.57.34-5.35.48-.08-1.54-.23-3.08-.12-4.62 1.63-1.81 3.62-3.24 5.27-5.03-3.77-2.08-7.09-4.81-10.4-7.53-.98-.7-2.28-2.06-3.55-1.17-3.87 2.38-6.66 6.34-11.24 7.54-.14 2.88 2.33 4.48 4.01 6.42 1.44 1.3.91 3.41 1.21 5.13-1.55-.39-3.06-.9-4.63-1.21-1.6.07-2.45 2.63-1.05 3.56 1.65 1.69 3.47 3.21 5.33 4.68.04.35.13 1.04.18 1.38-2.68.46-5.32 1.12-7.99 1.58l.35 1.52c2.39.87 4.76 1.82 7.14 2.74-.8 2.56-2.85 4.49-3.75 6.98.27 1.69 2.01 2.67 2.69 4.2-.12 1.82-1.6 3.19-2.18 4.88.35 3.67 1.15 7.3 1.66 10.95.41 4.99.14 10.01.46 15.01.88 7.64.27 15.34.61 23.01.26 5.78-1.06 11.46-2.82 16.93-12-20.08-18.19-43.09-21.96-66.02-.6-8.63-1.4-17.25-1.94-25.89-.3-8.59.37-17.21-.2-25.79-.96-4.67-3.34-9.7-7.87-11.75-5.81-.69-11.68-.02-17.51.05.04 3.89 1.89 7.38 2.75 11.11-2.1-.32-4.17-.77-6.24-1.17l-.04 4c1.66 0 3.34 0 5.01-.01-.1 2.54-.15 5.09-.19 7.64-1.69-.68-3.36-1.41-5.05-2.08-.07 1.25-.06 2.49.04 3.74 1.75.83 3.78.6 5.66.89-1.54 2.82-3.78 5.26-5 8.25 1.23 2 2.85 3.74 4.28 5.6-1.16 1.31-3.74 2.32-2.58 4.46 4.18 13.46 3.81 27.91 8.57 41.22 2.88 11.23 8.62 21.38 13.74 31.7 1.57 3.12 3.22 6.29 3.84 9.77-1.51.11-3.3 1.53-4.68.47-17.28-12.4-30.29-30.16-38.6-49.62-10.82-26.03-14.17-55.33-8.31-82.99 2.05-8.19-3.57-16.94-11.27-19.71-4.12-1.36-8.03.99-11 3.63-1.33-.81-2.69-1.58-4.07-2.3.69 4.23 2.07 8.3 2.95 12.49-2.07-1.06-4.19-2.03-6.42-2.68l.02 4.39c1.59.12 3.18.26 4.77.43-.03 2.13-.05 4.26-.06 6.39-1.92.08-3.85.15-5.75.37 1.61 1.65 3.47 3.04 5.34 4.4-1.06 2.79-3.87 5.34-2.98 8.54 1.91 8.1 2.22 16.43 3.59 24.61 4.73 35.17 19.88 69.28 44.44 95.1 3.16 3.64 7.25 7.11 7.78 12.22-3.15.02-6.45-.03-9.29-1.57-21.79-11.66-39.37-30.13-52.19-51.08-6.97-11.17-12.67-23.1-17.3-35.41-10.62-29.59-7.58-63.53 7.38-91.11 3.52-6.62 9.07-12.1 11.41-19.34-4.03-6.95-13.41-7.96-20.32-5.28.21-1.77.42-3.53.61-5.29-3.27 1.83-7.57 2.59-9.86 5.71 1.57.85 3.29 1.34 4.98 1.86-.72 2.34-1.82 4.54-2.79 6.78l-1.82-.08c-1.15-1.72-2.3-3.43-3.46-5.13-2.57 2.46-5.2 4.9-7.29 7.79 2.51 1.45 4.88 3.13 7.33 4.71-2.24 2.35-4.66 4.51-7.11 6.65-.88-1.88-1.82-3.73-2.88-5.51-1.75 2.76-3.5 5.55-4.77 8.58 2.52-.63 5.02-1.44 7.63-1.64-1.39 3.18-3.18 6.18-4.3 9.48-2.96 7.84-3.45 16.26-4.87 24.45-.62 10.69-.54 21.41-.16 32.11 1.68 15.6 5.19 31.11 11.5 45.53 5.23 12.41 12.68 23.77 21.13 34.2 11.12 12.88 24.93 23.02 38.66 32.92-1.17 1.95-1.75 4.65-3.75 5.86-30.99-7.88-58.81-28.3-74.46-56.32-15.34-24.33-24.31-52.56-26.08-81.23-.35-12.72-.4-25.53 1.83-38.09 3.44-19.19 9.04-38.37 19.68-54.88 5.54-8.82 12.58-16.71 20.76-23.14 18.17-11.59 42.7-14.04 61.95-3.62 9.85 5.79 18.42 13.41 26.67 21.25 6.34 6.15 12.93 12.32 20.83 16.43 4.44 1.24 9.17.59 13.73.64 6.3.62 10.64-5.51 11.99-10.98.83-4.69.77-10.26-2.59-14.02-13.48-13.14-28.71-25.14-38.22-41.7-9.26-17.98-7.31-40.94 4.28-57.43m106.29 10.09c-12.49 5.25-22.08 15.65-29.03 27.03-2.17 3.23-2.67 7.08-2.19 10.89 15.67-2.03 26.26-15.12 34.58-27.35 2.8-3.3 3.18-8.07 1.18-11.87-1.57.21-3.12.57-4.54 1.3m-97.97-.02c.82 4.18 3.08 7.84 5.09 11.52 4.12 7.24 9.63 13.65 16.09 18.89 5.21 4 11.47 6.33 17.86 7.61-.11-2.11.01-4.31-.87-6.28-2.86-7.56-7.91-14.07-13.62-19.69-4.54-4.16-8.98-8.71-14.77-11.11-3.03-1.53-6.52-1.1-9.78-.94m213.77 143.92c-.13 1.64-.24 3.27-.33 4.91 1.48-.32 2.96-.66 4.45-.99-.07-1.21-.15-2.41-.25-3.61-1.3-.11-2.59-.21-3.87-.31z"/></g></svg>
      <h1 class="logo__text">Softtech</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to Softtech</h1>
      <h2 class="heading--secondary">Ready to join the with us</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
        <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://twitter.com/alexdevero" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="#" method="post">
	<div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="passwordRepeat" placeholder="name" required />
      </div>
	  <div class="form-group">
        <label for="email">Email</label> 
        <input class="form-control" type="text" name="email" id="email" placeholder="james.bond@spectre.com" required />
      </div>
	  <div class="form-group">
	          <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="james.bond" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
            <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" name="submit" value="submit" />
          </li>
          <li>
            <a class="signup__link" href="#">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>  	
               </div>
           </div>
       </div>

   </section>

 <!-- [/MAIN-HEADING]
 ============================================================================================================================-->






 <!-- [FOOTER]
 ============================================================================================================================-->

<footer class="site-footer section-spacing text-center " id="eight">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>
      </div>
      <div class="col-md-4"> <small>&copy; 2017 Softech. All rights reserved.</small></div>
      <div class="col-md-4">
        <!--social-->

        <ul class="social">
          <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        </ul>

        <!--social end-->

      </div>
    </div>
  </div>
</footer>



 <!-- [/FOOTER]
 ============================================================================================================================-->



</div>


<!-- [ /WRAPPER ]
=============================================================================================================================-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="library/modernizr.custom.97074.js"></script>
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- [ PLUGIN SCRIPT ] -->
      	<script src="js/plugins.js"></script>
        <!-- [ TYPING SCRIPT ] -->
         <script src="js/typed.js"></script>
         <!-- [ COUNT SCRIPT ] -->
         <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
	<!-- [ SLIDER SCRIPT ] -->
        <script src="js/owl.carousel.js"></script>
         <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>

        <!-- [ COMMON SCRIPT ] -->
          <script src="library/vegas/vegas.min.js"></script>
	<script src="js/common.js"></script>

</body>
<script type="text/javascript">
 $(document).ready(function()
 {
  fullscreenslider();
 }
 );
</script>

</html>
