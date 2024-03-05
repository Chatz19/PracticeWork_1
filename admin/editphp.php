<?php
	session_start();
	require_once '../config/connect.php'; 
	if(!isset($_SESSION['email'])){
		if(empty($_SESSION['username'])&& empty($_SESSION['password'])){
		header('location: adminlogin.php');
	}

if(isset($_POST) & !empty($_POST)){
		$id = mysqli_real_escape_string($connection, $_POST['id']);
		$name = mysqli_real_escape_string($connection, $_POST['name']);
		$description = mysqli_real_escape_string($connection, $_POST['description']);
		$price = mysqli_real_escape_string($connection, $_POST['price']);
		$quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
		$category = mysqli_real_escape_string($connection, $_POST['category']);
		$image = mysqli_real_escape_string($connection, $_POST['image']);
	
	$sql = "UPDATE menu SET Menu_Name='$name', Category='$category', Image= '$image', Description='$description', 
	QuantityInStock='$quantity', BuyPrice='$price' WHERE Menu_ID = $id";
	if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$type = $_FILES['image']['type'];
			$tmp_name = $_FILES['image']['tmp_name'];

			$max_size = 10000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) & !empty($name)){   // this check if the upload textbox is empty if yes go to else please select a file
				
	//check for extension condition for the file, if condition is true move to the location of the uploaded file 
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					$image = $location.$name;
					if(move_uploaded_file($tmp_name, $image)){
						echo "Uploaded Successfully";
					}else{
						echo "Failed to upload";
					}
				}else{
					echo "Only JPG files are allowed and should be less than 1MB";
				}
			}else{
				echo "Please select a file";
			}
		}
	$result = mysqli_query($connection, $sql);

	if($result){
		$invalid = '<script>alert("Product Updated");</script>';
		echo $invalid;
		
			header('location: home.php');
		}else{
			$fmsg = "Failed Add Category";
			echo $fmsg;
			header('location: edit.php');
		}
	}

}
		?>