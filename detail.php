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
<title>ACCOUNT DETAILS</title>
<style type="text/css">
body{background: white; margin:0px;}
a{text-decoration:none;
color:white;}
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

font.front{font-color:transparent; color:transparent;}
.font{font-weight: bold; color: white;}
input.input{width:250px; height:30px; border:1px solid #efefef; border-radius: 3px;}
input.submite {width:100px; height:30px; background: orange; color:black;  border:2px solid transparent; border-radius:5px; }
input.submit {width:250px; height:30px; background: #a6001a; color:white;  border:2px solid transparent; border-radius:5px;font-weight: bold; text-align: center;}
input.submit:hover{height:30px; background: darkred; color:white; border:2px solid black; font-weight: bolder;}
table.table{border:2px solid #efefef; margin:40px; font-weight: bolder; font-size: 20px;}
table.mars{ margin:40; font-weight: bolder; font-size: 20px;}
input.inpute{width:250px; height:30px; border:1px solid #efefef; border-radius: 3px;}
input.submite {width:100px; height:30px; background: orange; color:black;  border:2px solid transparent; border-radius:5px; }
</style>
</head>
<body>
	
<table align = "center"><tr><td><font class = "front">##############################################################</font></td><td>
<img src="image/logo.jpg" height="150" width="100" align = "center"/></td><td><font class = "front">###########################</font></td><td><form action ="search.php" method = "post"><input class = "inpute" name = "name" type ="text" placeholder =" search product and categories.....">
<input type="submit" class="submite" value = "Search"></form></td></tr></table></br></br>
<header>
</br>
<div float="center" id="class" class="class">
	
	<ul type="none" align="center"> 
<li align="center"><a href="home.php"><b>HOME</b></a></li>
<li><a href="snacks.php"><b>SNACKS</b></font></a></li>  
<li><a href="food.php"></b><b>FOODS</b></a></li>  
<li><a href="drink.php"></b><b>DRINKS</b></a></li> 
<li><a href="cart.php"></b><b>CART</b></a></li> 
<li><a href="order.php"><b>ORDER</b></a></li>   
<li><a href="about.php"><b>ABOUT</b></a></li>  
<li><a href="logout.php"><b>LOGOUT</b></a></li></ul></div></header><br>

<table class = "table"align = "center"><tr><td>
<table >
	<?php	
require_once 'config/connect.php';
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
$sqli = "SELECT * FROM customer WHERE Username= '$username' AND Password= '$password' ";
$result = mysqli_query($connection, $sqli); 
if($r = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><img src="uploads/<?php echo $r['image']; ?>" height="100" width="100"></td>
	</tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr>
		<td>NAME:</td><td> <?php echo $r['First_Name']." ".$r['Last_Name']; ?></td>
	</tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr>
		<td>EMAIL:</td><td> <?php echo $r['email']; ?></td><td><font class = "front">###########</font></td>
	</tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr>
		<td>ADDRESS: </td><td><?php echo $r['Address']; ?></td>
	</tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr>
		<td>USERNAME: </td><td><?php echo $r['Username']; ?></td><td><font class = "front">###########</font></td><td>PHONE NO: <?php echo $r['Mobile']; ?></td>
	</tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	
	<?php } ?>
</table>
<table class="mars" align = center><tr><td>
	<form align = "center" action = "editacc.php?id=3" method = "get"><input type=hidden name = "id" value = "<?php echo $r['Customer_ID']; ?>"><input align = "center" type ="submit" class = "submit" value = "EDIT ACCOUNT"></form><font class = "front"></font></td><td><font class="front">#################</font></td>
	<td><form align = "center" action = "delacc.php" method = "get"><input type=hidden name = "id" value = "<?php echo $r['Customer_ID']; ?>"><input align = "center" type ="submit" class = "submit" value = "DELETE ACCOUNT"></form></td></table></td></tr></table>

	
<br><br><br><br>

<p align="center"><a href="#top"><font color="blue">top</font></a></p>
<br><br><br><br><br>
<div class="e">
	
<center>&copy; Copyright 2018. All Right Reserved <br>developed by <strong>loladox</strong>        <sup> &trade;</sup></center>
       
       </div>
</body>
</html>