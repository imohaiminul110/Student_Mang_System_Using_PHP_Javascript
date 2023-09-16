<?php
include '../../model/conn.php';

if (isset($_POST['apply'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$password = $_POST['password'];
	$image = $_FILES['image']['name'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_folder = '../../asset/uploadedImage/'.$image;

	$userCheck = "SELECT * from admission where email = '$email'";
	$resultt= mysqli_query($conn, $userCheck);
	$count = mysqli_num_rows($resultt);
	if ($count>0) {
		echo "<script language='javascript'>";
		echo 'alert("mail exists");';
		echo 'window.location.replace("../../view/home/admissionForm.php");';
		echo "</script>";
	}
	else{
		$sql = "INSERT INTO admission(name, email, phone, message, image, password)
			VALUES ('$name', '$email', '$phone', '$message', '$image' , '$password')";

	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		move_uploaded_file($image_tmp_name, $image_folder);
		echo "<script language='javascript'>";
		echo 'alert("apply success");';
		echo 'window.location.replace("../../view/home/admissionForm.php");';
		echo "</script>";
		//echo "apply success";
		/*$message = "username or pass error";
		$_SESSION['message'] = $message;
		header("location:admissionForm.php");*/
	}	
	else
	{
		echo "<script language='javascript'>";
		echo 'alert("apply error");';
		echo 'window.location.replace("../../view/home/admissionForm.php");';
		echo "</script>";
		//echo "apply error";
	}	
	}

	
}

?>