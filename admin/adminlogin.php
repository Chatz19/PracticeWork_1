<?php

?>
<html>
<head>
<title>LOGIN</title>
<style type = "text/css">
a{text-decoration: none;}
.table{background:white; background-size: cover; margin: 0px;}
table{ text-align: left; border:5px solid black; height:560px; width:450; padding: 0px; padding-top: 0px; padding-bottom: 2px;}
.front{font-color:transparent; color:transparent; }
.font{ color: black; font-size: 15px; font-family: arial ;}
.input input{width:400px; height:30px; border-top-style:outset; border-left-style:outset; border-width: 1px 0px 0px 1px; border-color:#efefef; box-shadow: 5px 5px 5px #efefef;}
.submit input{width:100px; height:30px; background: red; color:white; font-weight:bold; border:0px;}
.dad{ color: black; font-size: 30px; font-family: arial ; font-weight: bold;}
.submit input:hover{width:100px; height:30px; background: darkred; color:white; border:0px;}
.why{margin:15px;}
.z{
font-weight:bold;
font-color:white;}
.z a{text-decoration:none;font-weight:bold;
background-color:blue;
color:white;
padding:5px;
border:white 2px solid;
border-radius:5px}
</style>
</head>
<body>
	<div id="login" class="login">
<p align  = "center">
	<br>
	<table id="table" class="table" align = "center" height="200" width="400">
<tr><td align = "center"><font class = "dad">Log In</font></td></tr>
		<tr><td>
		
	<font  id = "font" class = "font">
		<p align  = "center">
			
		<form action = "login.php" method = "post">
	<div class = "why">				
	Username or Email Address: <br>
	<div id = "input" class = "input"><input type = "text" name = "username" required="required" placeholder = "   Enter Your Username or Email Address"/></div><br><br>
	Password: <br>
	<div id = "input" class = "input"><input type = "password" name = "password" required="required" placeholder = "   ********"/></div><br><br><br></font>
	<div class = "submit"><a href="forget">forget password?</a><font color="none" id = "front" class = "front"> #################</font>
	<input type = "submit" name = "login" value = "LOGIN" /></div></form></p><hr/>
	<header>Don't have an account yet?</header>
	<br>
	<div class ="z">

	<a href="register.php">Create an account</a></div></div>
</p>
	</td></tr></table>
</body>
</html>