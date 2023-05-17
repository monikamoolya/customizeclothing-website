<?php             /*PHP session code for Logout module */
session_start(); /*Creates a session or resumes the current one based on a session identifier passed via a GET or POST request */

?>
<!doctype html>
<html lang=en>
<head>
<meta charset="UTF-8">
<div class="backimage-overlay">

<title>Clothing Products Customization Website</title>
<link rel="stylesheet" type="text/css" href="project.css">
<link rel="stylesheet1" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="jquery.drawr.combined.js?v=2"></script>

</head>



<body background="images\img.jpg" class="backimage"> 

<header>
<div class="main">
<div class="menu-bar">
<div class="title">
<h1>Custom Attire  <i class="mdi mdi-content-cut" ></i></h1>
</div>

<ul>
<li><a href="custom.php"class="button" onclick="document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='block',document.getElementById('id05').style.display='block',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-home"></i>  Home</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id01').style.display='block',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-sign-in"></i>  Log-In</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-user-plus"></i>  Registration</a></li>
<li><a href="custom.php" class="button" onclick="document.getElementById('id03').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-shopping-bag"></i>  Products</a></li>
<li><a href="draw.html" class="button" onclick="document.getElementById('id03').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='block',document.getElementById('id07').style.display='none'"><i class="fa fa-pencil"></i>  Design Lab</a></li>
<li><a href="help.html" class="button active" onclick="document.getElementById('id08').style.display='block',document.getElementById('id07').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-question-circle"></i>  Help</a></li>
<li><a href="aboutus.html" class="button " onclick="document.getElementById('id07').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-user-circle-o"></i>  About-Us</a></li>
</ul>
</div>


<div class = "container"> <!-- Specifies class for logout module -->
<a href="logout.php"  > Log Out </a>  <!-- Specifies title and link for logout module  -->
<center> <!-- Specifies the alignment of title -->
<img src="images\login.png" class="login">  <!-- Adding user icon image for login module -->
<h2> Welcome User </h2>  <!-- Specifies title after login -->
</center>
</div>
</div>

</div>

<style> <!-- CSS code for styling to logout module -->

.backimage{
    background-size:cover;
	background-position:center-left;
	height:40vh;
	

	
}
.backimage-overlay{
	background-color:rgba(0,0,0,0.3);
    height:300%;
	background-position:center-left;
	background-size:cover;
	
}
.title h1{
	color:white;
	font-size:50px;
    font-family:Aharoni;
	
}
ul{
	float: right;
	list-style-type:none;
	margin-top: 100px;
}

ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: white;
	padding: 10px 30px;
	background-color:black;
	transition:0.6s ease;
}
ul li a:hover{
	background-color:white;
	color:#000;
}
ul li.active a{
	background-color:white;
	color:#000;
}
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
</body>
</html>