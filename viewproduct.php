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
<title>VIEW</title>
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
<li><a href="about.php"><b>ABOUT</b></a></li> 
<li><a href="detail.php"></b><b>ACCOUNT</b></a></li>
<li><a href="logout.php"><b>LOGOUT</b></a></li></ul></div></header><br><br><br>


<div id="n">
<ul>
<div class="img">
<table><tr><td>
<li>

<tr><td>
</ul></div>

<table>

<table><tr><?php	
require_once 'config/connect.php';
$name = $_GET['name'];
$sql = "SELECT * FROM menu WHERE Menu_ID = '$name'";
$result = mysqli_query($connection, $sql); 

if ($r = mysqli_fetch_assoc($result)) {
?><table><tr><td>
<li><table class="f"><tr><td><img src="admin/uploads/<?php echo $r['Image']; ?>" height="350" width="300"></a>
</td></tr>
<tr><td><table width="265"><tr></td><td><b><?php echo $r['Menu_Name']." - ".$r['Category'] ."<br><br><b>Quantity: ".$r['QuantityInStock']."<br><br><b>date created: ".$r['Date']."<br><br><b><del>N</del> ".$r['BuyPrice'];?></b></td></tr>
<tr align = "center"><td><form action = "cartphp.php?id=<?php echo $r['Menu_ID']; ?>" method = "get"><input type="hidden" name="id" placeholder="" required="required" value = "<?php echo $r['Menu_ID']; ?>">
	<input type = "submit" value ="ADD TO CART" class = "submit">
</form></td></tr>
</table></td></tr></table></li></td>
</td></tr></table><?php } ?></tr>
</table>
<br><br><br>

<table class = "input"><tr><td><b><?php echo $r['Description'];?></b></td></tr></table></table>
</ul></div><br><br><br><br><br><br>

<p align="center"><a href="#top"><font color="blue">top</font></a></p>
<br><br><br>
<div class="e">
	
<center>&copy; Copyright 2018. All Right Reserved <br>developed by <strong>loladox</strong>        <sup> &trade;</sup></center>
       
       </div>
</body>
</html>