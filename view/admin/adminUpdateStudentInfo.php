<?php
include '../../model/conn.php';

$id = $_GET['student_id'];
$sql = "SELECT * from user where id = '$id'";
$result = mysqli_query($conn, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['updateStudent'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$sql2 = "UPDATE user SET username = '$name', email = '$email', phone = '$phone' WHERE id = '$id' ";
	$result2 = mysqli_query($conn, $sql2);
	if ($result2) {
		header("location:adminViewStudent.php");
	}
	else{
		//echo "update error";
	}

}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update student</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/addStudentCss.css">
</head>
<body>

<?php
include 'adminHeader.php';
include 'adminSideBar.php';
?>

	<div class="content" >
		<center >
			<h1>UPDATE STUDENT</h1>
				<form action="#" method="POST" class="div_deg">	

			    <div>
			    	<label>NAME</label>
			    <input type="text" value="<?php echo "{$info['username']}";?>" name="name" />
			    </div>
			    <div>
			    	<label>EMAIL</label>
			    <input type="email" value="<?php echo "{$info['email']}";?>" name="email" />
			    </div>
			    <div>
			    	 <label>PHONE</label>
			    <input type="number" value="<?php echo "{$info['phone']}";?>" name="phone" />
			    </div>
			   <div>
			   		<input style="background-color: green;" type="submit" name="updateStudent" value="UPDATE STUDENT">
			   </div>	  
			</form>
		</center>	
	</div>
</body>
</html>