<?php
session_start();


include '../../model/conn.php';

if ($_SERVER["REQUEST_METHOD"] == POST) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."' ";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result); 

	if ($row["usertype"]=="student")
	{
		//$_SESSION['username'] = $username;
		$_SESSION['email']=$email;
		$_SESSION['usertype']="student";
		header("location:../../view/student/studentHome.php");
	}
	elseif ($row["usertype"]=="admin") 
	{
		$_SESSION['email']=$email;
		$_SESSION['usertype']="admin";
		header("location: ../../view/admin/adminHome.php");
	}      
	else{

		$message = "username or pass error";
		$_SESSION['loginMessage'] = $message;
		header("location:../../view/home/login.php");
	}
}
?>