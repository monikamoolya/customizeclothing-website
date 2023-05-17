<?php session_start();             /*PHP session code for Registration module */
require_once('dbconnection.php'); /* Database connection of register module */

//Code for Registration 
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contactno=$_POST['contactno'];
	$enc_password=$password;
	$msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$enc_password','$contactno')");
if($msg)
{
	echo "<script>alert('Registration successful');</script>"; /* Used to display a warning popup message */
}
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>

<meta charset="UTF-8">
<div class="backimage-overlay">

<title>Clothing Products Customization Website</title>

<link rel="stylesheet" type="text/css" href="project.css">
<link rel="stylesheet1" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="cart.js"></script>
<script src="cart1.js"></script>


</head>

<body background="images\img.jpg" class="backimage"> 


<header>
<div class="main">
<div class="menu-bar">
<div class="title">
<h1>Custom Attire</h1>
</div>


<ul>
<li><a href="custom.php"class="button" onclick="document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='block',document.getElementById('id05').style.display='block',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-home"></i>  Home</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id01').style.display='block',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-sign-in"></i>  Log-In</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-user-plus"></i>  Registration</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id03').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-shopping-bag"></i>  Products</a></li>
<li><a href="draw.html" class="button" onclick="document.getElementById('id03').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='block',document.getElementById('id07').style.display='none'"><i class="fa fa-pencil"></i>  Design Lab</a></li>
<li><a href="help.html" class="button " onclick="document.getElementById('id08').style.display='block',document.getElementById('id07').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-question-circle"></i>  Help</a></li>
<li><a href="aboutus.html" class="button" onclick="document.getElementById('id07').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-user-circle-o"></i>  About-Us</a></li>
</ul>
</div>


<div class = "container">
<a href="logout.php"  > Log Out </a>
<center>
<img src="images\login.png" class="login">
<h2> Welcome User </h2>
</center>
</div>


<style>

h2{
	font-weight:bold;
	color:white;
	margin:200px;
	font-size:40px;
}
.login{
	postion:absolute;
	top:270px;
	
}
.container a{
	margin-left:1000px;
	margin-top: 70px;
	font-size:20px;
	display: inline-block;
	color: white;
	padding: 10px 30px;
	background-color:black;
	transition:0.6s ease;
	text-decoration:none;
}
.container a:hover{
	background-color:white;
	color:#000;
}

</style>

</header>

</div>
</body>
</html>