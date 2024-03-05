<?php
	session_start();
	require_once 'config/connect.php'; 
?>
<html>
<head>
<title>SIGNIN</title>
<style type = "text/css">
body{background: white;}
a{text-decoration: none;}
.table{background:white; background-size: cover; margin: 0px;}
table{ text-align: left; border:5px solid black; height:600px; width:850; padding: 0px; padding-top: 0px; padding-bottom: 2px;}
.front{font-color:transparent; color:transparent; }
font.font{ color: black; font-size: 15px; font-family: arial ; text-align: left; font-weight: bold;}
.input input{width:800px; height:30px; border-top-style:outset; border-left-style:outset; border-width: 1px 0px 0px 1px; border-color:#efefef; box-shadow: 5px 5px 5px #efefef;}
.class input{width:250px; height:30px; border-top-style:outset; border-left-style:outset; border-width: 1px 0px 0px 1px; border-color:#efefef; box-shadow: 5px 5px 5px #efefef;}
input.submit {width:100px; height:30px; background: white; color:black;  border:2px solid black; border-radius:5px; }
.dad{ color: black; font-size: 30px; font-family: arial ; font-weight: bold;}
 input.submit:hover{width:100px; height:30px; background: darkred; color:white; border:0px;}
.why{margin:15px;}
</style>
</head>
<body>
	<table align = "center">
<tr><td align = "center"><b>REGISTRATION</b></td></tr>
		<tr><td>
<form action = "registerphp.php" method = "post" >
	<div class = "why">	
	<div class ="input">
		<font class = "font">		
	First Name:<br>
	<input type="text" name="firstname" placeholder="" required="required"><br><br>
	Last Name:<br>
	<input type="text" name="lastname" placeholder="" required="required"><br><br>
	Address:<br>
	<input type="text" name="address" placeholder="" required="required"><br><br>
	Mobile:<br>
	<input type="number" name="mobile" placeholder="" required="required"><br><br>
	Email:<br>
	<input type="email" name="email" placeholder="" required="required"></div><br><br>
	<div class = "class">
	Username:<font class = "front">############################################</font>Password:<br>
	<input type="text" name="username" placeholder="" required="required"><font class = "front"> #####################</font>
	<input type="text" name="password" placeholder="" required="required"></div><br>

	Image:</font><br>
	<input type="file" name="image" placeholder="Upload your profile picture" required="required"><br><br>
	<input align ="center" type="submit" class="submit" value ="submit" name="upload"></div>
	</form>
</td></tr></table>

</body>
</html>