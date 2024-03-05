<?php
	session_start();
	require_once 'config/connect.php'; 
	if(!isset($_SESSION['username'])&&!isset($_SESSION['password'])){
		if(empty($_SESSION['username'])&& empty($_SESSION['password'])){
		header('location: mainlogin.php');
	}
}
?>
<html>
<head>
<link rel="icon" href="image/icon.jpg">
<title>ABOUT</title>
<style type="text/css">
body{background: white; margin:0px;}
a{text-decoration:none;
color:blue;}
a:hover{text-decoration:none; font-weight:bold; color:yellow;}
header{background:blue;
padding:0px,0px,15px,0px;
height:10vh;}
li {display: inline;
margin:10px;}
.class{text-transform:uppercase;
font-color:white;
font-weight:bold;
font-size:15px;}
.class ul li a{text-decoration:none;
color:white;}
.class ul li a:hover{text-decoration:none;
background-image: -webkit-gradient(linear, left top, left bottom, from(red), to(black));
color:white;
padding:5px;
border-radius:3px;}
.d{color:white;
text-transform:uppercase;
background-image: -webkit-gradient(linear, left top, left bottom, from(#ff33ff), to(#ff0066));
border-bottom:blue 2px solid;}
strong{background:white;
weight:bold;
color:red;
text-transform:uppercase;}
.e{background:blue;
color:white; margin-top: 36px;}
.f{background:white; border:#efefef 1px solid;}
.f:hover{background:#efefef;}
.i{border:#787878 2px solid;
color:black;}
.i:hover{background:blue;
border:blue 1px solid;
color:white;}
.j{background:pink;
padding:0px,0px,15px,0px;
height:10vh;
border-bottom:red 2px solid;}
.r{font-weight:bold;
size:50px;}
.k{border:red 2px solid;}
.t{background:red;
border:red 2px solid;
color:white;
text-transform:uppercase;
font-weight:bold;
overflow:hidden;}
.z{
font-weight:bold;
font-color:white;}
.z a{text-decoration:none;font-weight:bold;
background-color:transparent;
color:white;
padding:5px;
border:white 2px solid;
border-radius:5px}
.z a:hover{background-image: -webkit-gradient(linear, left top, left bottom,
from(red), to(black));border:transparent;
padding:10px; color:white;}
.table{background-image:url(image/login.png); background-size: cover; margin: 0px;}
.front{font-color:transparent; color:transparent;}
.font{font-weight: bold; color: white;}
.input{width:800px; height:100px; border-top-style:outset; border-left-style:outset; border-width: 1px 0px 0px 1px; border-color:#efefef; box-shadow: 5px 5px 5px #efefef;}
input.submit {width:300px; height:30px; background: #a6001a; color:white; font-weight: bolder; border:0px; border-radius:5px; }
 input.submit:hover{height:30px; background: darkred; color:white; border:2px solid black;}
 input.inpute{width:250px; height:30px; border:1px solid #efefef; border-radius: 3px;}
input.submite {width:100px; height:30px; background: orange; color:black;  border:2px solid transparent; border-radius:5px; }
.contact {color:white;
font-weight:bold;
border-top:blue 2px solid;
background-image: -webkit-gradient(linear, left top, left bottom, from(#9966ff), to(#6699ff));
border-bottom:blue 2px solid;}
.contact img{
width: 100px;
height: 100px;
padding: 20px;}
.contact img:hover{border: red 2px solid;
border-radius: 100%;}
strong{background:white;
weight:bold;
color:red;
text-transform:uppercase;}
</style>
</head>
<body>
<table align = "center"><tr><td><font class = "front">##############################################################</font></td><td>
<img src="image/logo.jpg" height="150" width="100" align = "center"/></td><td><font class = "front">###########################</font></td><td><form action ="search.php" method = "post"><input class = "inpute" name = "name" type ="text" placeholder =" search product and categories.....">
<input type="submit" class="submite" value = "Search"></form></td></tr></table></br></br>
<header>
</br>
<div float="center" id="class" class="class"><ul type="none" align="center"> 
<li align="center"><a href="home.php"></b><b>HOME</b></a></li>  
<li><a href="snacks.php"><b>SNACKS</b></font></a></li>  
<li><a href="food.php"></b><b>FOODS</b></a></li>  
<li><a href="drink.php"></b><b>DRINKS</b></a></li>
<li><a href="cart.php"></b><b>CART</b></a></li>
<li><a href="order.php"><b>ORDER</b></a></li>   
<li><a href="#contact"><b>CONTACT US</b></a></li> 
<li><a href="detail.php"></b><b>ACCOUNT</b></a></li>
<li><a href="logout.php"><b>LOGOUT</b></a></li></ul></div></header><br><br><br>

<p><img src="image/8.jpg" height="100" width="150"><br>Loladox food ordering website is a website that allows customer 
	to order food from any distanstance without leaving their home or offices.<br> Our aims and objectives is to satisfy the customer needs.</p>


<br><br><br><br><br><br>

<p align="center"><a href="#top"><font color="blue">top</font></a></p>
<br><br><br>
<div id="contact" class="contact">
<p align="center"><strong>CONTACT US</strong></p>
<center>
<a href="http://www.facebook.com"><img src="image/facebook.ico"></a>
<a href="http://www.gmail.com"><img src="image/email.ico"></a>
<a href="http://www.whatsapp.com"><img src="image/whatsapp.ico"></a>
<a href="http://www.instagram.com"><img src="image/instagram.ico"></a>
</center>
</div>
<div class="e">
	
<center>&copy; Copyright 2018. All Right Reserved <br>developed by <strong>loladox</strong>        <sup> &trade;</sup></center>
       
       </div>
</body>
</html>