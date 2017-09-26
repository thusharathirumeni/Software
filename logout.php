<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
}
if(session_destroy()) // Destroying All Sessions
{
header("Location:index-slider.html"); // Redirecting To Home Page
}
?>
