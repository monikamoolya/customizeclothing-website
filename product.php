<?php
session_start();

$con = mysqli_connect('localhost','root',' ');
mysqli_select_db($con,'testing');
if($con->connect_error){
	die("Connection Failed!".$con->connect_error);
}

?>
