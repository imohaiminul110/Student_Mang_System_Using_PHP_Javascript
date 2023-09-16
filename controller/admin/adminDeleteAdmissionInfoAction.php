<?php 
	include'../../model/conn.php';

	if ($_GET['student_id']) 
	{
		$admission_id = $_GET['student_id'];
		$sql = "DELETE  from admission where id = '$admission_id'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "<script language='javascript'>";
			echo 'alert("delete success");';
			echo 'window.location.replace("../../view/admin/adminViewAdmissionInfo.php");';
			echo "</script>";
			//header("location: ../../view/admin/adminViewAdmissionInfo.php");
		}
		else{
			echo "error";
		}

	}
?>