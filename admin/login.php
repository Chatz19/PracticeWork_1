<?php 
session_start(); 
require_once '../config/connect.php'; 
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	//$email = mysqli_real_escape_string($connection, $_POST['username']);
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM Employee WHERE username='$username' AND password='$password' OR email= '$username' AND password='$password'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('Location: home.php' );
	}else{

		$invalid = '<script>alert("Invalid Login Parameters\n Please Enter the Correct Username or Password");</script>';
		echo $invalid;
	
		include 'adminlogin.php';
		//header('Location: adminlogin.php' );
	}
}
?>