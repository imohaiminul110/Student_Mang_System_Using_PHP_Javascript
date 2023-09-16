<?php
include '../../model/conn.php';

if (isset($_POST['addStudent'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$usertype = "student";

	$check = "SELECT * from user where email = '$email'";
	$check_email = mysqli_query($conn, $check);
	$row_count = mysqli_num_rows($check_email);
	if($row_count == 1)
	{
		echo "aleady exist";
	}
	else
	{
		$sql = "INSERT INTO user(username,phone,email,usertype,password) VALUES ('$name','$phone','$email','$usertype','$password')";
			$result = mysqli_query($conn, $sql);

		if ($result) {
			header("location:../../view/admin/adminViewStudent.php");
		}
		else{
			echo "upload fail";
		}
	}
}

?>