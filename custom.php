<?php
require 'product.php'
?>
<!DOCTYPE html> <!-- Version of HTML -->
<html lang="en" >  <!-- The HTML lang attribute is used to identify the language of text content -->
<head>  <!-- The head section that contains information about a web page's properties and links to external related files -->
 
<meta charset="UTF-8">  <!-- UTF-8 character encoding, which is a method of converting a typed characters into machine-readable code -->
<div class="backimage-overlay">  <!-- Adding overlay to the background of the image -->

<title>Clothing Products Customization Website</title> <!-- Specifies title for the website -->

<link rel="stylesheet" type="text/css" href="project.css">  <!-- link of CSS file -->
<link rel="stylesheet1" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  <!--It enables to load CSS, and images remotely from its servers -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!--It enables to load CSS, icons remotely from its servers -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">  <!--It enables to load CSS, icons remotely from its servers -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- Asynchronous JavaScript and XML this helps us to load data from the server without a browser page refresh -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> <!-- A distributed network of servers that provides several advantages and helps to improve page load speeds, reduce bandwidth usage, and reduce CPU usage on the server -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  <!--It enables to load JavaScript and images remotely from its servers -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">
<script src="cart.js"></script> <!-- JavaScript code for cart count increment -->
<script src="cart1.js"></script>  <!-- JavaScript code for cart count decrement -->
 
</head>  <!-- Close of head section -->

<body background="images\img.jpg" class="backimage">  <!-- Adding image to the background -->


<header>  <!-- To identify content that the primary content of the web page often contains website navigation elements, search forms, and similar content that is duplicated across all or most pages of a website -->
<div class="main"> <!-- Specifies class for the page -->
<div class="menu-bar"> <!-- Specifies class for menu-bar -->
<div class="title">  <!-- Specifies a class for title of web page -->
<h1>Custom Attire   <i class="mdi mdi-content-cut" ></i></h1> <!-- Specifies a title for web page -->
</div>


<ul> <!-- specifying an unordered list, which groups a collection of items having no numerical order -->
<li><a href="#"class="button" onclick="document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='block',document.getElementById('id05').style.display='block',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-home"></i>  Home</a></li> <!-- Used to represent an item in a list -->
<li><a href="#" class="button" onclick="document.getElementById('id01').style.display='block',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-sign-in"></i>  Log-In</a></li>  <!-- Used to represent an item in a list -->
<li><a href="#" class="button" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-user-plus"></i>  Registration</a></li>  <!-- Used to represent an item in a list -->
<li><a href="#" class="button" onclick="document.getElementById('id03').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none',document.getElementById('id07').style.display='none'"><i class="fa fa-shopping-bag"></i>  Products</a></li>  <!-- Used to represent an item in a list -->
<li><a href="draw.html" class="button" onclick="document.getElementById('id03').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='block',document.getElementById('id07').style.display='none'"><i class="fa fa-pencil"></i>  Design Lab</a></li>  <!-- Used to represent an item in a list -->
<li><a href="help.html" class="button " onclick="document.getElementById('id08').style.display='block',document.getElementById('id07').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-question-circle"></i>  Help</a></li>  <!-- Used to represent an item in a list -->
<li><a href="aboutus.html" class="button" onclick="document.getElementById('id07').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-user-circle-o"></i>  About-Us</a></li>  <!-- Used to represent an item in a list -->
</ul>  <!-- close of unordered list -->
</div>  <!-- close of menu-bar -->

<div class="admin">  <!-- Specifies class for admin tab -->
<a href="adminlogin.php" ><i class="fa fa-user-circle" ></i>  Admin</a> <!-- Linking admin module to adminlogin.php file -->
</div>  <!-- Close of admin tab -->


<div id="id01" class="login-box" > <!-- Specifies id and class for login module -->
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="close">&times;</span> <!-- Span and onclick event for closing login module -->
<img src="images\login.png" class="login"> <!-- Adds user icon image for login module -->

<h2> Login Here</h2> <!-- Specifies title for login module -->
<form action="login.php" method="post" onsubmit="return validate()"> <!-- Specifies Event handlers run before default actions of form elements-->
<i class="fa fa-envelope-o"></i> Email-Id <!-- Adds font awesome icon and title for Email-Id field-->
<input type="text" name="email" id="emailid" placeholder="Enter Email-Id" required><br> <!-- Defines a field for an e-mail id -->
<span id="emailiderror" style="color:red"></span><br> <!-- Specifies email-id error styling for invalid inputs -->
<i class="fa fa-key"></i> Password  <!-- Adds font awesome icon and title for Password field-->
<input type="password" name="password" id="passwd" placeholder="Enter Password" required><br>  <!-- Defines a field for password -->
<span class="eye" onclick="myFunction()"> <!-- Specifies onclick event for hiding password -->
<i id="hide2" class="fa fa-eye" ></i>
<i id="hide1" class="fa fa-eye-slash"></i></span>
<span id="passwderror" style="color:red"></span>  <!-- Specifies password error styling for invalid inputs -->
<input type="submit" name="submit" value="Login">  <!-- Defines a submit button to login -->

<button name="reset" type="reset" class="reset">Reset</button>   <!-- Defines a reset button to clear inputs -->
</form> <!-- Close the form tag -->

</div>  <!-- Close the login module -->

<script> <!-- Javascript code for hiding password of login module -->
function myFunction(){  <!-- Defines function -->
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

<script> <!-- Code for display of login module -->
var login-box=document.getElementById('id01');
window.onclick=function(event){
if(event.target==login-box)
{
login-box.style.display="none";
}
}
</script>


<div id="id02" class="register" >  <!-- Specifies id and class for registration module -->
<span onclick="document.getElementById('id02').style.display='none'" class="close1" title="close">&times;</span>  <!-- Span and onclick event for closing registration module -->
<h2> Register Here</h2> <!-- Specifies title for registration module -->
<form action="register.php" method="post" onsubmit="return validation()">  <!-- Specifies Event handlers run before default actions of form elements-->
<p>First Name</p>  <!-- Specifies title for first name field-->
<input type="text" name="fname" id="fname" autocomplete="off" placeholder="Enter First Name" ><br><br> <!-- Defines a field for first name -->
<span id="fnameerror" style="color:red"></span>  <!-- Specifies first name error styling for invalid inputs -->
<p>Last Name</p>   <!-- Specifies title for last name field-->
<input type="text" name="lname" id="lname" autocomplete="off" placeholder="Enter Last Name"><br><br>  <!-- Defines a field for last name -->
<span id="lnameerror" style="color:red"></span>  <!-- Specifies last name error styling for invalid inputs -->
<p>Mobile Number</p>  <!-- Specifies title for mobile no field-->
<input type="number" name="contactno" id="contactno" autocomplete="off" placeholder="Enter Mobile Number"><br><br>  <!-- Defines a field for mobile no -->
<span id="moberror" style="color:red"></span>  <!-- Specifies mobile no error styling for invalid inputs -->
<p>Email-Id</p>  <!-- Specifies title for email-id field-->
<input type="text" name="email" id="email" placeholder="Enter Email-Id"><br><br>  <!-- Defines a field for an email-id -->
<span id="emailerror" style="color:red"></span>  <!-- Specifies email-id error styling for invalid inputs -->
<p>Password</p>  <!-- Specifies title for password field-->
<input type="password" name="password" id="password" placeholder="Enter Password"><br><br>  <!-- Defines a field for password -->
<span id="passworderror" style="color:red"></span>  <!-- Specifies password error styling for invalid inputs -->
<p>Re-enter Password</p>  <!-- Specifies title for re-enter password field-->
<input type="password" name="cpassword" id="cpassword" placeholder="Re-enter Password"><br><br>   <!-- Defines a field for re-enter password -->
<span id="cpassworderror" style="color:red"></span>  <!-- Specifies re-enter password error styling for invalid inputs -->
<input type="submit" name="submit" value="Register"><br>
<button name="reset" type="reset" class="reset1">Reset</button>
</form>
</div>

<script> <!-- Code for display of registration module -->
var register=document.getElementById('id02'); 
window.onclick=function(event){
if(event.target==register)
{
register.style.display="none";
}
}
</script>




<div id="id05" class="search" > <!-- Specifies class for search module -->
<input list="datalist1" class="input_box"  type="text" name="" placeholder="Search...." ><a class="btn" href="search.html" ><i class="fa fa-search"></i></a>  <!-- Specifies for search field--> 
<datalist id="datalist1"> <!-- Used with input tag so that can easily fill the data in the forms using select the data -->
<option value="Mens T-shirts" > <!-- Options to be specfied -->
<option value="Polos">
<option value="Jerseys">
<option value="Backpacks">
<option value="Casual Shirts">
<option value="Womens T-shirts">
<option value="Hoodies">
<option value="Tops">
<option value="Kids T-shirts">
<option value="Baby Wear">
<option value="Pants">
<option value="Caps">
<option value="Wallet">
<option value="Tank Tops">
<option value="Party Wear">
<option value="Longsleeve T-shirts">
<option value="Shorts">
<option value="Skirts">
</datalist> <!-- Close of datalist -->
</div>  <!-- Close of search module -->
</div>

<div id="id04" class="gallery"> <!-- Displays images of products -->
<a href="images\t3.jpg"><img src="images\t3.jpg"></a>
<a href="images\polo3.jpeg"><img src="images\polo3.jpeg"></a>
<a href="images\jersey.jpg"><img src="images\jersey.jpg"></a>
<a href="images\womens tshirt.jpg"><img src="images\womens tshirt.jpg"></a>
<a href="images\hoodies.jpg"><img src="images\hoodies.jpg"></a>
<a href="images\tops4.jpg"><img src="images\top4.jpg"></a>
<a href="images\baby wear.jpg"><img src="images\baby wear.jpg"></a>
<a href="images\pant2.jpg"><img src="images\pant2.jpg"></a>
<a href="images\backpack9.jpg"><img src="images\backpack9.jpg"></a>
<a href="images\hat6.jpg"><img src="images\hat6.jpg"></a>
<a href="images\kids10.jpg"><img src="images\kids10.jpg"></a>
<a href="images\shorts4.jpg"><img src="images\shorts4.jpg"></a>
<a href="images\tank1.jpeg"><img src="images\tank1.jpeg"></a>
<a href="images\party1.jpg"><img src="images\party1.jpg"></a>
<a href="images\wallet4.jpg"><img src="images\wallet4.jpg"></a>
</div>


<div id="id03" class="container1" >  <!-- Specifies class for Products module -->
<button id="cart-button" class="cart-btn" onclick="document.getElementById('mycart').style.display='block'"><i class="fa fa-cart-plus"></i>  <!-- Adding a cart -->
<div  class="cart-items">0</div>  <!-- Specifies count of the cart -->
 <span id="itemCount"></span>  
</button>

<h2 class="term"></h2>
<div id="myBtnContainer" > <!-- Specifies products tab -->
  <button class="btn1 active"  onclick="filterSelection('all')"> Show all</button>
  <button class="btn1" onclick="filterSelection('mens')"> Male </button>
  <button class="btn1" onclick="filterSelection('female')"> Female</button>
  <button class="btn1" onclick="filterSelection('kids')"> Kids</button>
  <button class="btn1" onclick="filterSelection('bags')"> Backpacks</button>
  <button class="btn1" onclick="filterSelection('caps')"> Caps</button>
  <button class="btn1" onclick="filterSelection('wallets')"> Wallets</button>
</div>

<div class="row">  <!-- Specifies a class for images of products display -->
  <div class="column mens">
    <div class="content">
     <img src="images\tshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>   <!-- Image of mens t-shirt -->
      <h3 class="product-name">T-shirts</h3><hr><br>  <!-- Specifies product name -->
      <p class="product-price">₹800.00</p>     <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">     <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\walkertshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column mens">
    <div class="content">
     <img src="images\t1.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\t2.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\t3.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polo.jpg" alt="Polos" class="product-img" ><br><hr>   <!-- Image of mens polos -->
      <h3 class="product-name">Polos</h3><hr><br>   <!-- Specifies product name -->
      <p class="product-price">₹800.00</p>            <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">            <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polo1.jpg" alt="Polos" class="product-img" ><br><hr>
      <h3 class="product-name">Polos</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polo2.jpg" alt="Polos" class="product-img" ><br><hr>
      <h3 class="product-name">Polos</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polos.jpg" alt="Polos" class="product-img" ><br><hr>
      <h3 class="product-name">Polos</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polo3.jpeg" alt="Polos" class="product-img" ><br><hr>
      <h3 class="product-name">Polos</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column mens">
    <div class="content">
      <img src="images\jersey.jpg" alt="Jerseys" class="product-img"  ><br><hr>  <!-- Image of jerseys -->
      <h3 class="product-name">Jerseys</h3><hr><br>       <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>            <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                   <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\jersey3.jpeg" alt="Jerseys" class="product-img" ><br><hr>
      <h3 class="product-name">Jerseys</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\jersey1.webp" alt="Jerseys" class="product-img" ><br><hr>
      <h3 class="product-name">Jerseys</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\jersey2.jpg" alt="Jerseys" class="product-img" ><br><hr>
      <h3 class="product-name">Jerseys</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\jersey4.webp" alt="Tank Tops" class="product-img"  ><br><hr> <!-- Image of tank tops -->
      <h3 class="product-name">Tank Tops</h3><hr><br>                  <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                         <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                        <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\men1.jpg" alt="Tank Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\men2.jpg" alt="Tank Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\men3.jpg" alt="Tank Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\men4.jpg" alt="Tank Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\long1.webp" alt="Longsleeve T-shirts" class="product-img"  ><br><hr>  <!-- Image of longsleeve t-shirt -->
      <h3 class="product-name">Longsleeve T-shirts</h3><hr><br>                  <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                                   <!-- Specifies product price -->                               
	  <button class="bag-btn" data-id="1">                                       <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>               <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\long2.jpg" alt="Longsleeve T-shirts" class="product-img"  ><br><hr>
      <h3 class="product-name">Longsleeve T-shirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\long3.jpeg" alt="Longsleeve T-shirts" class="product-img"  ><br><hr>
      <h3 class="product-name">Longsleeve T-shirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column mens">
    <div class="content">
      <img src="images\casuals1.jpg" alt="Casuals" class="product-img"  ><br><hr>  <!-- Image of casuals  -->
      <h3 class="product-name">Casuals</h3><hr><br>                     <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                       <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                      <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
   <div class="column mens">
    <div class="content">
      <img src="images\casuals2.jpg" alt="Casuals" class="product-img"  ><br><hr>
      <h3 class="product-name">Casuals</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column mens">
    <div class="content">
      <img src="images\casuals3.webp" alt="Casuals" class="product-img"  ><br><hr>
      <h3 class="product-name">Casuals</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
   <div class="column female">
    <div class="content">
      <img src="images\womens tshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>  <!-- Image of womens t-shirt -->
      <h3 class="product-name">T-shirts</h3><hr><br>             <!-- Specifies product name -->
      <p class="product-price">₹800.00</p>                      <!-- Specifies product price --> 
	  <button class="bag-btn" data-id="1">                       <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\women1.webp" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\women2.webp" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\women3.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\hoodies.jpg" alt="Hoodies" class="product-img" ><br><hr> <!-- Image of hoodies -->
      <h3 class="product-name">Hoodies</h3><hr><br>               <!-- Specifies product name -->
      <p class="product-price">₹1200.00</p>                    <!-- Specifies product price -->                  
	  <button class="bag-btn" data-id="1">                      <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\hoodie1.jpg" alt="Hoodies" class="product-img" ><br><hr>
      <h3 class="product-name">Hoodies</h3><hr><br>
      <p class="product-price">₹1200.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\hoodie2.jpg" alt="Hoodies" class="product-img" ><br><hr>
      <h3 class="product-name">Hoodies</h3><hr><br>
      <p class="product-price">₹1200.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\womens tops.jpg" alt="Tops" class="product-img" ><br><hr>   <!-- Image of tops -->
      <h3 class="product-name">Tops</h3><hr><br>           <!-- Specifies product name -->
      <p class="product-price">₹1200.00</p>                <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                  <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\trouser.jpg" alt="Tops" class="product-img"  ><br><hr>  <!-- Image of pants -->
      <h3 class="product-name">Pants</h3><hr><br>         <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>               <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                 <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\pant1.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Pants</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\pant2.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Pants</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\pant3.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Pants</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\top1.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\top2.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\top3.webp" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\tank1.jpeg" alt="Tops" class="product-img"  ><br><hr> <!-- Image of female tank tops -->
      <h3 class="product-name">Tank Tops</h3><hr><br>          <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                     <!-- Specifies product price --> 
	  <button class="bag-btn" data-id="1">                       <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\tank2.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\tank3.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Tank Tops</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\party1.jpg" alt="Tops" class="product-img"  ><br><hr>  <!-- Image of party wear -->
      <h3 class="product-name">Party Wear</h3><hr><br>          <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                      <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                          <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\party2.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Party Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  
  <div class="column kids">
    <div class="content">
      <img src="images\baby wear.jpg" alt="Baby" class="product-img"  ><br><hr>  <!-- Image of baby wear -->
      <h3 class="product-name">Baby Wear</h3><hr><br>           <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                    <!-- Specifies product price -->  
	  <button class="bag-btn" data-id="1">                     <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids1.webp" alt="Kids" class="product-img" ><br><hr>  <!-- Image of kids t-shirt -->
      <h3 class="product-name">T-shirts</h3><hr><br>      <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                  <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                    <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids3.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids2.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids4.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">T-shirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids5.jpg" alt="Kids" class="product-img" ><br><hr>  <!-- Image of skirts -->
      <h3 class="product-name">Skirts</h3><hr><br>          <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                  <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                      <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>  <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids6.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Skirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids7.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Skirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids8.jpeg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Skirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids9.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Skirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids10.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Skirts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts1.jpg" alt="Kids" class="product-img" ><br><hr>   <!-- Image of shorts -->
      <h3 class="product-name">Shorts</h3><hr><br>           <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                     <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                        <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts2.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts3.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts4.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts5.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts6.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts7.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\shorts8.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Shorts</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column bags">
    <div class="content">
      <img src="images\backpack2.jpeg" alt="Bags" class="product-img" ><br><hr>  <!-- Image of backpacks -->
      <h3 class="product-name">Backpacks</h3><hr><br>            <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                      <!-- Specifies product price -->   
	  <button class="bag-btn" data-id="1">                      <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column bags">
    <div class="content">
      <img src="images\backpack1.webp" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column bags">
    <div class="content">
      <img src="images\backpack3.webp" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack4.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack5.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack6.webp" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack7.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack8.webp" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack9.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
    <div class="column bags">
    <div class="content">
      <img src="images\backpack10.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Backpacks</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column caps">
   <div class="content">
      <img src="images\hat10.jpg" alt="Caps" class="product-img" ><br><hr>  <!-- Image of caps -->
      <h3 class="product-name">Caps</h3><hr><br>                 <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                       <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                          <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
   <div class="column caps">
   <div class="content">
      <img src="images\hat1.jpg" alt="Caps" class="product-img" ><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column caps">
   <div class="content">
      <img src="images\hat2.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat3.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat4.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat5.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat6.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat7.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat8.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column caps">
   <div class="content">
      <img src="images\hat9.jpg" alt="Caps" class="product-img"><br><hr>
      <h3 class="product-name">Caps</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet1.jpg" alt="Wallets" class="product-img"><br><hr>  <!-- Image of wallets -->
      <h3 class="product-name">Wallets</h3><hr><br>           <!-- Specifies product name -->
      <p class="product-price">₹1000.00</p>                    <!-- Specifies product price -->
	  <button class="bag-btn" data-id="1">                        <!-- Specifies add to cart id -->
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>   <!-- Specifies title for add to cart -->
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet2.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet3.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet4.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet5.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet6.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet7.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet8.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet9.webp" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column wallets">
   <div class="content">
      <img src="images\wallet10.jpg" alt="Wallets" class="product-img"><br><hr>
      <h3 class="product-name">Wallets</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  
  
</div>


<div class="cart-box" id="mycart">  <!-- Specifies a class for popup box of cart -->
<section class="container content-section">
	
            <span onclick="document.getElementById('mycart').style.display='none'" class="close" title="close" >&times;</span>  <!-- Specifies close tag -->
            <h2 class="section-header" >Your Cart</h2>   <!-- Title for cart popup box -->
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>   <!-- Header of cart box -->
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-itm">
                
            </div>
			<div class="cart-total">     
                <strong class="cart-total-title">Total</strong>  <!-- Specifies title for total -->
                <span class="cart-total-price">₹0.00</span>   <!-- Specifies total price -->
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>   <!-- Button of purchase products -->
        </section>
        
</div>
</div>









</div>

<style>

:root{    /* Styling for Products module */
	--primaryColor:#f09d51;
	--mainWhite:#fff;
	--mainBlack:#222;
	--mainGrey:#ececec;
	--mainSpacing:0.1rem;
	--mainTransition:all 0.3s linear;
}
.admin{
position:absolute;
top:20px;
left:1100px;
font-size:24px;
}
.title h1{
	color:white;
	font-size:50px;
    font-family:Aharoni;
	
}
.admin a{
	text-decoration: none;
	color: white;
	padding: 10px 30px;
	background-color:black;
	transition:0.6s ease;
}
.admin a:hover{
	background-color:white;
	color:#000;
}
.login-box input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	background:#lc8adb;
	color:gray;
	font-size:18px;
	border-radius:20px;
}
.register{ /* Styling for register module */
	background-color:rgb(0,0,0,0.6);
	width:420px;
    color:white;
	top: 85%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
	padding: 60px 30px;
	height: 700px;
	
}
.register input[type="text"],input[type="password"],input[type="number"],input[type="date"]{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:white;
	font-size:16px;
	margin-left:50px;
}
.register input[type="submit"]
{
	border:none;
	outline:none;
	height:50px;
	background:#lc8adb;
	color:gray;
	font-size:18px;
	border-radius:60px;
	width:100px;
	margin-left:120px;
}
.register input[type="submit"]:hover
{
	cursor:pointer;
	background:yellow;
	color:#000;
}
.reset1
{
	cursor:pointer;
	padding: 10px 10px;
	border-radius:20px;
	background-color:#6c757d8f;
	margin-left:270px;
	
}
.gallery img{ /* Styling the images */
	
	margin:30px;
	padding:2px;
	width:200px;
    height:230px;
	margin-top:15%;
	box-shadow: 10px 10px 10px black;
}

.cart-btn{     /* Styling for cart-button */
	margin-top: 200px;
	float:right;
	margin-right:-950px;
	font-size:1.9rem;
	position:relative;
	cursor:pointer;
	
}

.cart-items{
	position:absolute;
	top:-15px;
	right:-15px;
	background:var(--primaryColor);
	padding:0 5px;
	border-radius:30%;
	color:var(--mainWhite);
}

.container1 {
	background-color:#043c59;
	  background-size:cover;
	  height:1200vh;
}


.container1{
	display:none;
}

.term{
	margin-bottom:20%;
	
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px ;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
    
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column img{
	width:200px;
    height:230px;
	margin:20px;
	
}
	
/* Content */
.content {
  background-color: #e0e0d1;
  padding: 5px;
  position:relative;
  overflow:hidden;
}

.content h3{
	text-align:center;
}

.content p{
	color:red;
	font-size:20px;
	font-weight:bold;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn1 {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn1:hover {
  background-color: #ddd;
  color:white;
}

.btn1.active {
  background-color:#99004d;
   color: white;
}

.bag-btn{
	position:absolute;
	top:70%;
	right:0;
	background:var(--primaryColor);
	border:none;
	text-transform:uppercase;
	padding:0.5rem 0.75rem;
	letter-spacing:var(--mainSpacing);
	font-weight:bold;
	transition:var(--mainTransition);
	transform:translateX(101%);
	cursor:pointer;
}
.bag-btn:hover{
	color:var(--mainWhite);
}
.fa-shopping-cart{
	margin-right:0.5rem;
}
.content:hover .bag-btn{
	transform:translateX(0);
}
.product-img{
	display:block;
	width:100%;
	min-height:12rem;
	transition:var(--mainTransition);
}
.content:hover .product-img{
	opacity:0.5;
}


.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: black;
}

.cart-column {
    display: flex;
    align-items: center;
    width:20px;
    margin-right: 1.5em;
    padding-bottom: 20px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
	
	
	
}

.cart-item {
    width: 45%;
	align-items: center;
	margin-left: 10px;
}

.cart-price {
    width: 45%;
	align-items: center;
	margin-left: 10px;
}

.cart-quantity {
    width: 45%;
	margin-left: 10px;
}

.cart-item-title {
    color: black;
    margin-left: 1.5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
	
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius:15px;
    font-weight: bold;
	width:130px;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    
    color: black;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.backimage{
height:90vh;
}

.cart-row{
    border-bottom: 1px solid black;
}
.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: black;
    font-size: 1.1em;
}

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: 1.75em;
	border: none;
    border-radius:15px;
	width:200px;
	background-color:#001f33;
}

.btn-purchase:hover{
	background-color:#003d66;
}
.cart-box{
	overflow:auto;
	width:600px;
	height:565px;
	background-color:grey;
	color:white;
	top:65%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;
	display:none;
}

.editor{
	  background-color:#043c59;
	  background-size:cover;
	  height:600vh;

}

.page{
	top:50%;
	left:30%;
	position:absolute;
}

.editor{
	display:none;
}

.box{
	position:absolute;
	top:260px;
	right:1010px;
	padding:5px;
	background:#f1f1f1;
    margin-right: 1.9em;
	
    margin-top: 10px;
}


.box a{
	width:40px;
	height:40px;
	float:left;
	text-indent:-9999px;
	margin:5px;
	cursor:pointer;
	
}
.color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;

	      }
.color h2{
	
	font-size:22px;
	position:absolute;
}


.input-append{
	position:absolute;
	top:30%;
	left:16%;
	transform:translate(-80%,-20%);
}

.brush h2{
	position:absolute;
	top:6%;
	left:32%;
	font-size:22px;
	
}
.type-brush.active{
    position:absolute;
    display: inline-block;
	cursor: pointer;
	float:left;
	zoom: 1;
	vertical-align: top;
    top:20%;
	left:7%;
    width: 40px;
	height: 40px;
    background: orange;
    color: white;
    border: 1px solid #CCC;
	overflow: hidden;
    font-size:22px;
	
	margin:3px;
}

.type-brush {
    position:absolute;
    display: inline-block;
	cursor: pointer;
	zoom: 1;
	vertical-align: top;
    top:20%;
	left:27%;
    width: 40px;
	height: 40px;
    background: rgb(238, 238, 238);
    color: rgb(0, 0, 0);
	text-align: center;
    padding: 0px;
    border: 1px solid #CCC;
	overflow: hidden;
    font-size:22px;
	
	margin:3px;
}

.paint{
	position:absolute;
	top:110%;
	left:4%;
	padding:5px;
	width:230px;
	height:300px;
	background:#f1f1f1;
    margin:2px;
}

.type-toggle{
	position:absolute;
    display: inline-block;
	cursor: pointer;
	zoom: 1;
	vertical-align: top;
    top:20%;
	left:27%;
    width: 40px;
	height: 40px;
    background: rgb(238, 238, 238);
    color: rgb(0, 0, 0);
	text-align: center;
    padding: 0px;
    border: 1px solid #CCC;
	overflow: hidden;
    font-size:22px;
	
	margin:3px;
}

.type-action{
	position:absolute;
    display: inline-block;
	cursor: pointer;
	zoom: 1;
	vertical-align: top;
    top:20%;
	left:27%;
    width: 40px;
	height: 40px;
    background: rgb(238, 238, 238);
    color: rgb(0, 0, 0);
	text-align: center;
    padding: 0px;
    border: 1px solid #CCC;
	overflow: hidden;
    font-size:22px;
	
	margin:3px;
}

.sfx-canvas{
	
	position:absolute;
}


</style>

<script>
var aboutus=document.getElementById('id07');
window.onclick=function(event){
if(event.target==aboutus)
{
aboutus.style.display="none";
}
}
</script>




<script type="text/javascript">  <!-- JavaScript code for Products tabs -->
filterSelection("all") 
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}


function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}


function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script> <!-- Code for display of images -->
var gallery=document.getElementById('id04');
window.onclick=function(event){
if(event.target==gallery)
{
gallery.style.display="none";
}
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script> <!-- JavaScript code for menu-bar -->
<script type="text/javascript">
$(document).on('click', 'ul li',function(){
$(this).addClass('active').siblings().removeClass('active')
})
</script>

<script type="text/javascript"> <!-- Javascript code for validation of email-id and password of login module -->
function validate(){
var emailid=document.getElementById("emailid").value;
var passwd=document.getElementById("passwd").value;


var emailidcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
var passwdcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;

if(emailidcheck.test(emailid)){
document.getElementById('emailiderror').innerHTML = " ";
}else{
document.getElementById('emailiderror').innerHTML = "** Email-Id is Invalid";
return false;
}

if(passwdcheck.test(passwd)){
document.getElementById('passwderror').innerHTML = " ";
}else{
document.getElementById('passwderror').innerHTML = "** Password is Invalid";
return false;
}
}
</script> 


<script type="text/javascript"> <!-- Javascript code for validation of registration module -->
function validation(){
var fname=document.getElementById("fname").value;
var lname=document.getElementById("lname").value;
var contactno=document.getElementById("contactno").value;
var email=document.getElementById("email").value;
var password=document.getElementById("password").value;
var cpassword=document.getElementById("cpassword").value;

var fnamecheck = /^[A-Za-z. ]{3,30}$/;
var lnamecheck = /^[A-Za-z. ]{3,30}$/;
var contactnocheck = /^[789][0-9]{9}$/;
var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;

if(fnamecheck.test(fname)){
document.getElementById('fnameerror').innerHTML = " ";
}else{
document.getElementById('fnameerror').innerHTML = "** First Name is Required";
return false;
}

if(lnamecheck.test(lname)){
document.getElementById('lnameerror').innerHTML = " ";
}else{
document.getElementById('lnameerror').innerHTML = "** Last Name is Required";
return false;
}

if(contactnocheck.test(contactno)){
document.getElementById('moberror').innerHTML = " ";
}else{
document.getElementById('moberror').innerHTML = "** Mobile Number  is Invalid";
return false;
}

if(emailcheck.test(email)){
document.getElementById('emailerror').innerHTML = " ";
}else{
document.getElementById('emailerror').innerHTML = "** Email-Id is Invalid";
return false;
}


if(passwordcheck.test(password)){
document.getElementById('passworderror').innerHTML = " ";
}else{
document.getElementById('passworderror').innerHTML = "** Password is Invalid";
return false;
}

if(cpassword.match(password)){
document.getElementById('cpassworderror').innerHTML = " ";
}else{
document.getElementById('cpassworderror').innerHTML = "** Password is not Matching";
return false;
}
}
</script>

<script type"text/javascript">  <!-- JavaScript code for cart box -->

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {    <!-- JavaScript code for remove, quantity and add to cart buttons -->
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('bag-btn')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {   <!-- Code for purchase button -->
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('cart-itm')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('product-name')[0].innerText
    var price = shopItem.getElementsByClassName('product-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('product-img')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-itm')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-image')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].src == imageSrc ) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button" name="remove_items" id="remove_items">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {  <!-- Code for update total price of cart -->
    var cartItemContainer = document.getElementsByClassName('cart-itm')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('₹', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '₹' + total
}





</script>







</header>

</div>
</body>
</html>


