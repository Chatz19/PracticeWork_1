<?php
session_start();
require_once 'config/connect.php';
if(isset($_POST) & !empty($_POST)){
		$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
		$address = mysqli_real_escape_string($connection, $_POST['address']);
		$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$image = mysqli_real_escape_string($connection, $_POST['image']);
		$password = md5($_POST['password']);
		$username = mysqli_real_escape_string($connection, $_POST['username']);

	$sql = "INSERT INTO customer ( First_Name, Last_Name, email, Address, Mobile, Password, UserName, Image) 
	VALUES ('$firstname', '$lastname', '$email', '$address', '$mobile',  '$password', '$username', '$image') ";
	if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productimage']['name'];
			$size = $_FILES['productimage']['size'];
			$type = $_FILES['productimage']['type'];
			$tmp_name = $_FILES['productimage']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) & !empty($name)){   // this check if the upload textbox is empty if yes go to else please select a file
				
	//check for extension condition for the file, if condition is true move to the location of the uploaded file 
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					if(move_uploaded_file($tmp_name, $location.$name)){
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
			header('location: home.php');
		echo '<script>alert("Your account has been Created Successfully");</script>';
		}else{
			$msg = "Failed Add Category";
			echo $msg;
			header('location: register.php');
		}
}
		?>