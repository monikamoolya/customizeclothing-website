<?php
session_start();
include("dbconnection.php");
if(isset($_POST['submit']))
{
$adminusername=$_POST['username'];
$pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="manage-users.php";
$_SESSION['submit']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="adminlogin.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
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

<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


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


<div id="id09" class="admin-box" >
<img src="images\login.png" class="admin">

<h2> Admin Login</h2>
<form action="" method="post" onsubmit="return validate()">
<?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<i class="fa fa-envelope-o"></i>  Username
<input type="text" name="username" id="username" placeholder="Enter Username" required><br>
<span id="usernameerror" style="color:red"></span><br>
<i class="fa fa-key"></i> Password
<input type="password" name="password" id="passwd" placeholder="Enter Password" required><br>
<span class="eye" onclick="myFunction()"> 
<i id="hide2" class="fa fa-eye" ></i>
<i id="hide1" class="fa fa-eye-slash"></i></span>
<span id="passwderror" style="color:red"></span>
<input type="submit" name="submit" value="Login">
<button name="reset" type="reset" class="reset">Reset</button>
</form>

</div>



<style>

.admin-box{
	width:320px;
	height:420px;
	background:rgba(0,0,0,0.3);
	color:white;
	top:65%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;
}
.admin{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
	left:calc(50% - 50px);
}
.title h1{
	color:white;
	font-size:50px;
    font-family:Aharoni;
	
}
h2{
	margin:0;
	padding: 0 0 20px;
	text-align:center;
	font-size:22px;
	
}
.admin-box{
	
	position:absolute;
	
	background-color:rgb(0,0,1);
	background-color:rgb(1,0,0,0.6);
	padding-top:60px;
}
.admin-box p{
	margin:0;
	padding:0;
	font-weight:bold;
}
.admin-box input{
	width:100%;
	margin-bottom:10px;
}
.admin-box .fa{
	margin-right: 10px;
}

.admin-box input[type="text"]
{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:white;
	font-size:16px;
	margin-left:3px;
}
.admin-box input[type="password"]
{	
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:white;
	font-size:16px;
	margin-left:3px;
	
}

.admin-box input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	background:#lc8adb;
	color:gray;
	font-size:18px;
	border-radius:20px;
}
.admin-box input[type="submit"]:hover
{
	cursor:pointer;
	background:yellow;
	color:#000;
}
.admin-box a{
	text-decoration:none;
	font-size:14px;
	color:white;
}
.admin-box a:hover
{
	color:blue;
}
.reset{
	cursor:pointer;
	padding: 10px 10px;
	border-radius:20px;
	background-color:#6c757d8f;
	margin-left:200px;
	
}
</style>

<script>
function myFunction(){
var x = document.getElementById("passwd");
var y = document.getElementById("hide1");
var z = document.getElementById("hide2");

if(x.type === 'password'){
x.type="text";
y.style.display="block";
z.style.display="none";
}
else{
x.type="password";
y.style.display="none";
z.style.display="block";
}
}
</script>







</header>

</div>
</body>
</html>