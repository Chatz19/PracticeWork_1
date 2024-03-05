<?php
	session_start();
	require_once '../config/connect.php'; 
	if(!isset($_SESSION['email'])){
		if(empty($_SESSION['username'])&& empty($_SESSION['password'])){
		header('location: adminlogin.php');
	}

if(isset($_POST) & !empty($_POST)){
		$id = $_POST['id'];
		$date = mysqli_real_escape_string($connection, $_POST['date']);
		$status = mysqli_real_escape_string($connection, $_POST['status']);
	
	$sql = "UPDATE orders SET Shipped_Date='$date', Status='$status' WHERE Order_ID = $id";
	
		
	$result = mysqli_query($connection, $sql);

	if($result){
		$invalid = '<script>alert("Order Updated");</script>';
		echo $invalid;
		
			header('location: order.php');
		}else{
			$fmsg = "Order Update Failed";
			echo $fmsg;
			header('location: order.php');
		}
	}

}
		?>