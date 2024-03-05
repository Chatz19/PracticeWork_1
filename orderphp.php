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
		$price = $_GET['price'];
		$status = $_GET['status'];
		$emid = $_GET['emid'];
	
	$sql = "INSERT INTO orders (Menu_ID, Status, UnitPrice, Customer_ID, Employee_ID) VALUES ('$id', '$status', '$price', '$ide', '$emid')";
	
	$result = mysqli_query($connection, $sql);
	
	if($result){

		$invalid = '<script>alert("ORDERED");</script>';
		echo $invalid;
		
			header('location: order.php');
	
			}
			/*else
			{
				$fmsg = '<script>alert("Failed");</script>';
			echo $fmsg;
			header('location: cart.php');
			
		}*/
	}

		?>