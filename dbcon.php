<?php
$con=mysqli_connect("localhost","root","","software");
if(session_status()==PHP_SESSION_NONE)
{
	session_start();
}
?>
