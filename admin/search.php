<?php
	session_start();
	require_once '../config/connect.php'; 
	if(!isset($_SESSION['username'])&&!isset($_SESSION['password'])){
		if(empty($_SESSION['username'])&& empty($_SESSION['password'])){
		header('location: adminlogin.php');
	}
}
?>
<html>
<head>
<link rel="icon" href="image/icon.jpg">
<title>HOME</title>
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
.e{background:black;
color:white;}
.e{background:blue;
color:white;}
.f{background:white; border:#efefef 1px solid;}
.f:hover{background:#efefef;}
td.i{border:#787878 2px solid;
font-color:black;}
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
input.input{width:250px; height:30px; border:1px solid #efefef; border-radius: 3px;}
input.submit {width:100px; height:30px; background: orange; color:black;  border:2px solid transparent; border-radius:5px; }

</style>
</head>
<body>
	
<table align = "center"><tr><td><font class = "front">##############################################################</font></td><td>
<img src="../image/logo.jpg" height="150" width="100" align = "center"/></td><td><font class = "front">###########################</font></td><td><form action ="search.php" method = "post"><input class = "input" name = "name" type ="search" placeholder="search products and categories">
<input type="submit" class="submit" value = "Search"></form></td></tr></table></br></br>
<header>
</br>
<div float="center" id="class" class="class">
	
	<ul type="none" align="right">  
<li align="left"><a href="home.php"><b>HOME</b></font></a></li>  
<li><a href="productupdate.php"></b><b><abbr title = "Product Upload">PRODUCT </abbr></b></a></li>  
<li><a href="order.php"></b><b> ORDER </b></a></li>    
<li><a href="detail.php"><b> <abbr title = "Account Details">ACCOUNT </abbr></b></a></li> 
<li><a href="logout.php"><b> LOGOUT</b></a></li></ul></div></header><br><br><br>




<table><tr><?php	
require_once '../config/connect.php';
$username = $_SESSION['username'];
	$password = $_SESSION['password'];
$sqli = "SELECT * FROM employee WHERE Username= '$username' AND Password= '$password' ";
$result = mysqli_query($connection, $sqli); 
if($j = mysqli_fetch_assoc($result)) {
$ide = $j['Employee_ID'];
}

$name = $_POST['name'];
$sql = "SELECT * FROM menu WHERE Employee_ID='$ide' AND Menu_Name = '$name' OR Employee_ID='$ide' AND Category = '$name' LIMIT 3";
$result = mysqli_query($connection, $sql); 
while ($r = mysqli_fetch_assoc($result)) {
?><div class="class">
<ul type = "none" align="left">
<li>
<td>
<table class="f"><tr><td><img src="uploads/<?php echo $r['Image']; ?>" height="350" width="350"></td></tr>
<tr><td><table width="265"><tr></td><td><b><?php echo $r['Menu_Name']." - ".$r['Description'] ."<br><br>Quantity in stock: ".$r['QuantityInStock']."<br><br># ".$r['BuyPrice'];?></b></td></tr>
</table></td></tr>
<tr align = "center"><td><table width="349"><tr><td><font class="front">hhg</font></td><td><form action = "edit.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
	<input type="hidden" name="id" placeholder=""  value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="EDIT" class = "submit">
</form></td><td></td><td></td><td><form action = "delproduct.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
<input type="hidden" name="id" placeholder="" required="required" value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="DELETE" class = "submit">
</form></td></tr></table></td></tr></table>
</td></li></ul></div><?php } ?></tr>
</table>
<br><br>

<table><tr><?php	
require_once '../config/connect.php';
$username = $_SESSION['username'];
	$password = $_SESSION['password'];
$sqli = "SELECT * FROM employee WHERE Username= '$username' AND Password= '$password' ";
$result = mysqli_query($connection, $sqli); 
if($j = mysqli_fetch_assoc($result)) {
$ide = $j['Employee_ID'];
}

$name = $_POST['name'];
$sql = "SELECT * FROM menu WHERE Employee_ID='$ide' AND Menu_Name = '$name' OR Employee_ID='$ide' AND Category = '$name' LIMIT 3,3";
$result = mysqli_query($connection, $sql); 
while ($r = mysqli_fetch_assoc($result)) {
?><div class="class">
<ul type = "none" align="left">
<li>
<td>
<table class="f"><tr><td><img src="uploads/<?php echo $r['Image']; ?>" height="350" width="350"></td></tr>
<tr><td><table width="265"><tr></td><td><b><?php echo $r['Menu_Name']." - ".$r['Description'] ."<br><br>Quantity in stock: ".$r['QuantityInStock']."<br><br># ".$r['BuyPrice'];?></b></td></tr>
</table></td></tr>
<tr align = "center"><td><table width="349"><tr><td><font class="front">hhg</font></td><td><form action = "edit.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
	<input type="hidden" name="id" placeholder=""  value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="EDIT" class = "submit">
</form></td><td></td><td></td><td><form action = "delproduct.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
<input type="hidden" name="id" placeholder="" required="required" value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="DELETE" class = "submit">
</form></td></tr></table></td></tr></table>
</td></li></ul></div><?php } ?></tr>
</table>
<br><br>

<table><tr><?php	
require_once '../config/connect.php';
$username = $_SESSION['username'];
	$password = $_SESSION['password'];
$sqli = "SELECT * FROM employee WHERE Username= '$username' AND Password= '$password' ";
$result = mysqli_query($connection, $sqli); 
if($j = mysqli_fetch_assoc($result)) {
$ide = $j['Employee_ID'];
}

$name = $_POST['name'];
$sql = "SELECT * FROM menu WHERE Employee_ID='$ide' AND Menu_Name = '$name' OR Employee_ID='$ide' AND Category = '$name'LIMIT 6, 3";
$result = mysqli_query($connection, $sql); 
while ($r = mysqli_fetch_assoc($result)) {
?><div class="class">
<ul type = "none" align="left">
<li>
<td>
<table class="f"><tr><td><img src="uploads/<?php echo $r['Image']; ?>" height="350" width="350"></td></tr>
<tr><td><table width="265"><tr></td><td><b><?php echo $r['Menu_Name']." - ".$r['Description'] ."<br><br>Quantity in stock: ".$r['QuantityInStock']."<br><br># ".$r['BuyPrice'];?></b></td></tr>
</table></td></tr>
<tr align = "center"><td><table width="349"><tr><td><font class="front">hhg</font></td><td><form action = "edit.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
	<input type="hidden" name="id" placeholder=""  value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="EDIT" class = "submit">
</form></td><td></td><td></td><td><form action = "delproduct.php?id=<?php echo $r['Menu_ID']; ?>" method = "get">
<input type="hidden" name="id" placeholder="" required="required" value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="DELETE" class = "submit">
</form></td></tr></table></td></tr></table>
</td></li></ul></div><?php } ?></tr>
</table>
<br><br>

<p align="center"><a href="#top"><font color="blue">top</font></a></p>
<h1 id = "contact"></h1>
<div class="d">
<marquee direction="left"><b>visit www.white&goldfashiondesign.com for unisex clothes design</b></marquee>
</div>
<div class="e">
<center>
&copy; Copyright 2018. All Right Reserved <br>developed by <strong>loladox</strong>        <sup> &trade;</sup></center>
       </div>
</body>
</html>