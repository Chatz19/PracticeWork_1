<?php
	session_start();
	require_once 'config/connect.php'; 

//$name = $_GET['name'];
		$username = $_SESSION['username'];
	$password = $_SESSION['password'];
$sqli = "SELECT * FROM customer WHERE Username= '$username' AND Password= '$password' ";
$result = mysqli_query($connection, $sqli); 
if($r = mysqli_fetch_assoc($result)) {
$ide = $r['Customer_ID'];
}

if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
		//$id = mysqli_real_escape_string($connection, $_POST['id']);
		
		//$cusid = mysqli_real_escape_string($connection, $_POST['cusid']);
	
	$sql = "INSERT INTO wishlist (Menu_ID, Customer_ID) VALUES ('$id', '$ide') ";
	
	$result = mysqli_query($connection, $sql);
	
	if($result){

		$invalid = '<script>alert("Product has been added to Cart");</script>';
		echo $invalid;
		
			header('location: cart.php');
		}

		else

		{
			$fmsg = '<script>alert("Failed");</script>';
			echo $fmsg;
		}
	}
		?>