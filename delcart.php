<?php
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['username']) & empty($_SESSION['username'])){
		header('location: mainlogin.php');
	}
	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM wishlist WHERE Wish_ID='$id'";
		if(mysqli_query($connection, $sql)){
			header('location:cart.php');
		}
	}else{

		header('location: cart.php');
	}
?>