<html>
<head>
<title>ADD PRODUCT</title>
<style type = "text/css">
body{background: white;}
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
.f{border:red 2px solid;}
.f:hover{background:red;
border:red 1px solid;}
.i{border:#787878 2px solid;
color:white;}
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
a{text-decoration: none;}
.table{background:white; background-size: cover; margin: 0px;}
.tables{ text-align: left; border:5px solid black; height:600px; width:850; padding: 0px; padding-top: 0px; padding-bottom: 2px;}
.front{font-color:transparent; color:transparent; }
font.font{ color: black; font-size: 15px; font-family: arial ; text-align: left; font-weight: bold;}
.input input{width:800px; height:30px; border-top-style:outset; border-left-style:outset; border-width: 1px 0px 0px 1px; border-color:#efefef; box-shadow: 5px 5px 5px #efefef;}
input.submit {width:100px; height:30px; background: white; color:black;  border:2px solid black; border-radius:5px; }
.dad{ color: black; font-size: 30px; font-family: arial ; font-weight: bold;}
 input.submit:hover{width:100px; height:30px; background: darkred; color:white; border:0px;}
.why{margin:15px;}
 input.inpute{width:250px; height:30px; border:1px solid #efefef; border-radius: 3px;}
input.submite {width:100px; height:30px; background: orange; color:black;  border:2px solid transparent; border-radius:5px; }
</style>
</head>
<body>
	<table align = "center"><tr><td><font class = "front">##############################################################</font></td><td>
<img src="image/logo.jpg" height="150" width="100" align = "center"/></td><td><font class = "front">###########################</font></td><td><form action ="search.php" method = "post"><input class = "inpute" name = "name" type ="search" placeholder="search products and categories">
<input type="submit" class="submite" value = "Search"></form></td></tr></table></br></br>
<header>
</br>
<div float="center" id="class" class="class"><ul type="none" align="right"> 
<li align="left"><a href="home.php"><b>HOME</b></font></a></li>  
<li><a href="productupdate.php"></b><b>PRODUCT</b></a></li>  
<li><a href="order.php"></b><b>ORDER</b></a></li>    
<li><a href="detail.php"><b>ACCOUNT</b></a></li> 
<li><a href="logout.php"><b>LOGOUT</b></a></li></ul></div></header><br><br><br>
	<table class = "tables" align = "center">
<tr><td align = "center"><b>Product Update</b></td></tr>
		<tr><td>
<form action = "productphp.php" method = "post" >
	<div class = "why">	
	<div class ="input">
		<font class = "font">		
	Product Name:<br>
	<input type="text" name="name" placeholder="" required="required"><br><br>
	Description:<br>
	<input type="text" name="description" placeholder="" required="required"><br><br>
	Quantity in Stock:<br>
	<input type="text" name="quantity" placeholder="" required="required"><br><br>
	Price:<br>
	<input type="text" name="price" placeholder="" required="required"><br><br>
	Category:<br>
	<input type="text" name="category" placeholder="" required="required"></div><br><br>

	Image:</font><br>
	<input type="file" name="image" placeholder="Upload the Image of the Product" required="required" value "upload/"><br><br>
	<input align ="center" type="submit" class="submit" value ="submit" name="upload"></div>
	</form>
</td></tr></table>

</body>
</html>