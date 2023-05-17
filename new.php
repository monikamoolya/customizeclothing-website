<?php
require 'product.php'
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
<h1>Clothing Products Customize</h1>
</div>


<ul>
<li><a href="#"class="button" onclick="document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='block',document.getElementById('id05').style.display='block',document.getElementById('id06').style.display='none'"><i class="fa fa-home"></i>  Home</a></li>
<li><a href="#" class="button" onclick="document.getElementById('id01').style.display='block',document.getElementById('id02').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-sign-in"></i>  Log-In</a></li>
<li><a href="#" class="button" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id03').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-user-plus"></i>  Registration</a></li>
<li><a href="#" class="button" onclick="document.getElementById('id03').style.display='block',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='none'"><i class="fa fa-shopping-bag"></i>  Products</a></li>
<li><a href="#" class="button" onclick="document.getElementById('id03').style.display='none',document.getElementById('id01').style.display='none',document.getElementById('id02').style.display='none',document.getElementById('id04').style.display='none',document.getElementById('id05').style.display='none',document.getElementById('id06').style.display='block'"><i class="fa fa-pencil"></i>  Design Lab</a></li>
<li><a href="#"><i class="fa fa-question-circle"></i>  Help</a></li>
<li><a href="#"><i class="fa fa-user-circle-o"></i>  About-Us</a></li>
</ul>
</div>



<div id="id01" class="login-box" >
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="close">&times;</span>
<img src="images\login.png" class="login">

<h2> Login Here</h2>
<form action="login.php" method="post" onsubmit="return validate()">
<i class="fa fa-envelope-o"></i> Email-Id
<input type="text" name="email" id="emailid" placeholder="Enter Email-Id" required><br>
<span id="emailiderror" style="color:red"></span><br>
<i class="fa fa-key"></i> Password
<input type="password" name="password" id="passwd" placeholder="Enter Password" required><br>
<span class="eye" onclick="myFunction()"> 
<i id="hide1" class="fa fa-eye" ></i>
<i id="hide2" class="fa fa-eye-slash"></i></span>
<span id="passwderror" style="color:red"></span>
<input type="submit" name="submit" value="Login">
<a href="#">Forget Password?</a>
<button name="reset" type="reset" class="reset">Reset</button>
</form>

</div>

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

<script>
var login-box=document.getElementById('id01');
window.onclick=function(event){
if(event.target==login-box)
{
login-box.style.display="none";
}
}
</script>


<div id="id02" class="register" >
<span onclick="document.getElementById('id02').style.display='none'" class="close1" title="close">&times;</span>
<h2> Register Here</h2>
<form action="register.php" method="post" onsubmit="return validation()">
<p>First Name</p>
<input type="text" name="fname" id="fname" autocomplete="off" placeholder="Enter First Name" ><br><br>
<span id="fnameerror" style="color:red"></span>
<p>Last Name</p>
<input type="text" name="lname" id="lname" autocomplete="off" placeholder="Enter Last Name"><br><br>
<span id="lnameerror" style="color:red"></span>
<p>Mobile Number</p>
<input type="number" name="mobileno" id="mobileno" autocomplete="off" placeholder="Enter Mobile Number"><br><br>
<span id="moberror" style="color:red"></span>
<p>Email-Id</p>
<input type="text" name="email" id="email" placeholder="Enter Email-Id"><br><br>
<span id="emailerror" style="color:red"></span>
<p>Password</p>
<input type="password" name="password" id="password" placeholder="Enter Password"><br><br>
<span id="passworderror" style="color:red"></span>
<p>Re-enter Password</p>
<input type="password" name="cpassword" id="cpassword" placeholder="Re-enter Password"><br><br>
<span id="cpassworderror" style="color:red"></span>
<input type="submit" name="submit" value="Register"><br>
<button name="reset" type="reset" class="reset1">Reset</button>
</form>
</div>

<script>
var register=document.getElementById('id02');
window.onclick=function(event){
if(event.target==register)
{
register.style.display="none";
}
}
</script>




<div id="id05" class="search" >
<input list="datalist1" class="input_box"  type="text" name="" placeholder="Search...." ><a class="btn" href="#" ><i class="fa fa-search"></i></a>
<datalist id="datalist1">
<option value="Mens T-shirts" >
<option value="Polos">
<option value="Jerseys">
<option value="Jackets">
<option value="Casual Shirts">
<option value="Womens T-shirts">
<option value="Hoodies">
<option value="Tops">
<option value="Kids T-shirts">
<option value="Baby Wear">
<option value="Trousers">
<option value="Hats">
<option value="Bags">
<option value="Posters">
<option value="Towels">
</datalist>
</div>
</div>

<div id="id04" class="gallery">
<a href="images\t3.jpg"><img src="images\t3.jpg"></a>
<a href="images\polo3.jpeg"><img src="images\polo3.jpeg"></a>
<a href="images\jersey.jpg"><img src="images\jersey.jpg"></a>
<a href="images\womens tshirt.jpg"><img src="images\womens tshirt.jpg"></a>
<a href="images\hoodies.jpg"><img src="images\hoodies.jpg"></a>
<a href="images\womens tops.jpg"><img src="images\womens tops.jpg"></a>
<a href="images\baby wear.jpg"><img src="images\baby wear.jpg"></a>
<a href="images\trouser.jpg"><img src="images\trouser.jpg"></a>
<a href="images\handbag.jpeg"><img src="images\handbag.jpeg"></a>
<a href="images\hat.jpg"><img src="images\hat.jpg"></a>
</div>


<div id="id03" class="container1" >
<button id="cart-button" class="cart-btn" onclick="document.getElementById('mycart').style.display='block'"><i class="fa fa-cart-plus"></i>
<div  class="cart-items">0</div>
 <span id="itemCount"></span>
</button>

<h2 class="term"></h2>
<div id="myBtnContainer" >
  <button class="btn1 active"  onclick="filterSelection('all')"> Show all</button>
  <button class="btn1" onclick="filterSelection('mens')"> Male </button>
  <button class="btn1" onclick="filterSelection('female')"> Female</button>
  <button class="btn1" onclick="filterSelection('kids')"> Kids</button>
  <button class="btn1" onclick="filterSelection('bags')"> Bags</button>
  <button class="btn1" onclick="filterSelection('hats')"> Hats</button>
</div>

<div class="row">
  <div class="column mens">
    <div class="content">
     <img src="images\tshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\walkertshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column mens">
    <div class="content">
     <img src="images\t1.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\t2.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
     <img src="images\t3.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column mens">
    <div class="content">
      <img src="images\polo.jpg" alt="Polos" class="product-img" ><br><hr>
      <h3 class="product-name">Polos</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
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
      <img src="images\jersey.jpg" alt="Jerseys" class="product-img"  ><br><hr>
      <h3 class="product-name">Jerseys</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
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
      <img src="images\jersey4.webp" alt="Jerseys" class="product-img"  ><br><hr>
      <h3 class="product-name">Jerseys</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
   <div class="column female">
    <div class="content">
      <img src="images\womens tshirt.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\women1.webp" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column female">
    <div class="content">
      <img src="images\women2.webp" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\women3.jpg" alt="T-shirts" class="product-img" ><br><hr>
      <h3 class="product-name">Tshirts</h3><hr><br>
      <p class="product-price">₹800.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\hoodies.jpg" alt="Hoodies" class="product-img" ><br><hr>
      <h3 class="product-name">Hoodies</h3><hr><br>
      <p class="product-price">₹1200.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
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
      <img src="images\womens tops.jpg" alt="Tops" class="product-img" ><br><hr>
      <h3 class="product-name">Tops</h3><hr><br>
      <p class="product-price">₹1200.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column female">
    <div class="content">
      <img src="images\trouser.jpg" alt="Tops" class="product-img"  ><br><hr>
      <h3 class="product-name">Trousers</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column kids">
    <div class="content">
      <img src="images\baby wear.jpg" alt="Baby" class="product-img"  ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
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
      <img src="images\kids1.webp" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids3.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids2.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column kids">
    <div class="content">
      <img src="images\kids4.jpg" alt="Kids" class="product-img" ><br><hr>
      <h3 class="product-name">Baby Wear</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  
  <div class="column bags">
    <div class="content">
      <img src="images\handbag.jpeg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Handbags</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column bags">
    <div class="content">
      <img src="images\bags.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Handbags</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column bags">
    <div class="content">
      <img src="images\bag1.jpg" alt="Bags" class="product-img" ><br><hr>
      <h3 class="product-name">Handbags</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
  <div class="column hats">
   <div class="content">
      <img src="images\hat.jpg" alt="Hats" class="product-img" ><br><hr>
      <h3 class="product-name">Hats</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column hats">
   <div class="content">
      <img src="images\hat1.jpg" alt="Hats" class="product-img" ><br><hr>
      <h3 class="product-name">Hats</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
   <div class="column hats">
   <div class="content">
      <img src="images\hat2.jpg" alt="Hats" class="product-img"><br><hr>
      <h3 class="product-name">Hats</h3><hr><br>
      <p class="product-price">₹1000.00</p>
	  <button class="bag-btn" data-id="1">
	  <i class="fa fa-shopping-cart"></i>Add To Cart</button>
    </div>
  </div>
</div>


<div class="cart-box" id="mycart">
<section class="container content-section">
	
            <span onclick="document.getElementById('mycart').style.display='none'" class="close" title="close" >&times;</span>
            <h2 class="section-header" >Your Cart</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-itm">
                
            </div>
			<div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₹0.00</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        
</div>
</div>


<div class="editor" id="id06">
<div id="shirtDiv" class="page" style="width: 460px; height: 578px; background-color: rgb(255, 255, 255);">
<img id="tshirtFacing" src="images\editshirt.png" style="width: 460px; height: 579px;"></img>
</div>



<div class="box">
<h2 class="color">Add Color <i class="fa fa-paint-brush"></i></h2>
<a class="color-preview" title="White" style="background-color:#ffffff;"></a>
<a class="color-preview" title="Dark Heather" style="background-color:#616161;"></a>
<a class="color-preview" title="Gray" style="background-color:#f0f0f0;"></a >
<a class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></a >
<a  class="color-preview" title="Black" style="background-color:#222222;"></a ><br>
<a  class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></a >
<a  class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></a >
<a  class="color-preview" title="Salmon" style="background-color:#eead91;"></a >
<a  class="color-preview" title="Chesnut" style="background-color:#806355;"></a >
<a  class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></a ><br>
<a  class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></a >
<a i class="color-preview" title="Avocado" style="background-color:#aeba5e;"></a >
<a  class="color-preview" title="Kiwi" style="background-color:#8aa140;"></a >
<a  class="color-preview" title="Irish Green" style="background-color:#1f6522;"></a >
<a  class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></a ><br>
<a  class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></a >
<a  class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></a >
<a  class="color-preview" title="Sky" style="background-color:#a5def8;"></a >
<a i class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></a >
<a  class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></a ><br>							
<a  class="color-preview" title="Cherry Red" style="background-color:#c50404;"></a >
<a  class="color-preview" title="Red" style="background-color:#990000;"></a >
<a  class="color-preview" title="Yellow" style="background-color:#ffff00;"></a >
<a  class="color-preview" title="Green" style="background-color:#ace600;"></a >
<a  class="color-preview" title="Dark Blue" style="background-color:#000080;"></a ><br>
<a  class="color-preview" title="Purple" style="background-color:#b300b3;"></a >
<a  class="color-preview" title="Orange" style="background-color:#ff8000;"></a >
<a  class="color-preview" title="Pink" style="background-color:#b30077;"></a >
<a  class="color-preview" title="Chrome Yellow" style="background-color:#e6b800;"></a >
<a  class="color-preview" title="DarkBlue" style="background-color:#00334d;"></a >

</div>
 
<div class="input-append">
<input class="span2" id="text-string" type="text" placeholder="add text here...">
<button id="add-text" class="add-text" title="Add text"><i class="fa fa-share" ></i></button>
<hr>
</div>

<div id="drawr-container" style="width:100vw;height:100vh;">
	<canvas class="demo-canvas drawr-test1"></canvas>
</div>
<input type="file" id="file-picker" style="display:none;">


</div>




<style>

:root{
	--primaryColor:#f09d51;
	--mainWhite:#fff;
	--mainBlack:#222;
	--mainGrey:#ececec;
	--mainSpacing:0.1rem;
	--mainTransition:all 0.3s linear;
}

.gallery img{
	
	margin:30px;
	padding:2px;
	width:200px;
    height:230px;
	margin-top:15%;
}

.cart-btn{
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
	  height:600vh;
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
	height:584px;
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

</style>





<script type="text/javascript">
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

<script>
var gallery=document.getElementById('id04');
window.onclick=function(event){
if(event.target==gallery)
{
gallery.style.display="none";
}
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).on('click', 'ul li',function(){
$(this).addClass('active').siblings().removeClass('active')
})
</script>

<script type="text/javascript">
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


<script type="text/javascript">
function validation(){
var fname=document.getElementById("fname").value;
var lname=document.getElementById("lname").value;
var mobileno=document.getElementById("mobileno").value;
var email=document.getElementById("email").value;
var password=document.getElementById("password").value;
var cpassword=document.getElementById("cpassword").value;

var fnamecheck = /^[A-Za-z. ]{3,30}$/;
var lnamecheck = /^[A-Za-z. ]{3,30}$/;
var mobilenocheck = /^[789][0-9]{9}$/;
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

if(mobilenocheck.test(mobileno)){
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

<script type"text/javascript">

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
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

function purchaseClicked() {
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

function updateCartTotal() {
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


<script type="text/javascript">
$('.color-preview').click(function(){
		   var color = $(this).css("background-color");
		   document.getElementById("shirtDiv").style.backgroundColor = color;		   
	   });
	   
	   
	   
	   
</script>

<script>

<script type="text/javascript">

	$("#drawr-container .demo-canvas").drawr({
		"enable_tranparency" : true
	});

	$(".demo-canvas").drawr("start");
	
	//add custom save button.
	var buttoncollection = $("#drawr-container .demo-canvas").drawr("button", {
		"icon":"mdi mdi-folder-open mdi-24px"
	}).on("touchstart mousedown",function(){
		//alert("demo of a custom button with your own functionality!");
		$("#file-picker").click();
	});
	var buttoncollection = $("#drawr-container .demo-canvas").drawr("button", {
		"icon":"mdi mdi-content-save mdi-24px"
	}).on("touchstart mousedown",function(){
		var imagedata = $("#drawr-container .demo-canvas").drawr("export","image/jpeg");
		var element = document.createElement('a');
		element.setAttribute('href', imagedata);// 'data:text/plain;charset=utf-8,' + encodeURIComponent("sillytext"));
		element.setAttribute('download', "test.jpg");
		element.style.display = 'none';
		document.body.appendChild(element);
		element.click();
		document.body.removeChild(element);
	});
	$("#file-picker")[0].onchange = function(){
		var file = $("#file-picker")[0].files[0];
		if (!file.type.startsWith('image/')){ return }
		var reader = new FileReader();
		reader.onload = function(e) { 
			$("#drawr-container .demo-canvas").drawr("load",e.target.result);
		};
		reader.readAsDataURL(file);
	};

</script>
</script>

</header>

</div>
</body>
</html>


