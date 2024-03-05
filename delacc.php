<?php
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['username']) & empty($_SESSION['username'])){
		header('location: mainlogin.php');
	}
	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM customer WHERE Customer_ID='$id'";
		if(mysqli_query($connection, $sql)){
			header('location:mainlogin.php');
		}
	}else{

		header('location: detail.php');
	}
?>