<?php 
	include'../../model/conn.php';

	if ($_GET['student_id']) 
	{
		$student_id = $_GET['student_id'];
		$sql = "DELETE  from user where id = '$student_id'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("location: ../../view/admin/adminViewStudent.php");
		}
		else{
			echo "error";
		}

	}
?>