<?php
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['username']) & empty($_SESSION['username'])){
		header('location: mainlogin.php');
	}
	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM orders WHERE Order_ID='$id'";
		if(mysqli_query($connection, $sql)){
			header('location:order.php');
		}
	}else{

		header('location: order.php');
	}
?>