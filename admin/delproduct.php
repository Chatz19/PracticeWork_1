<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['username']) & empty($_SESSION['username'])){
		header('location: login.php');
	}
	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM menu WHERE Menu_ID='$id'";
		if(mysqli_query($connection, $sql)){
			header('location:home.php');
		}
	else{

		header('location: home.php');
	}
}
?>