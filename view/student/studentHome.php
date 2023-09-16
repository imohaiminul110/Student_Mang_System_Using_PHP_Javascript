<?php
include '../../model/conn.php';
session_start();
$sEmail = $_SESSION['email'];
if (! isset($sEmail)) {
	header("location: ../home/login.php");
}
elseif ($_SESSION['usertype'] == 'admin') {
	header("location: ../home/login.php");
}


?>

studentHome.php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin.css">
</head>
<body>

	<header class="header">
		
		<a href="">Student Dashboard</a>

		<div class="logout">
			<div>
			<?php
		$sql = "SELECT * from user where email = '$sEmail'";
		$resultt = mysqli_query($conn,$sql);
		if (mysqli_num_rows($resultt)>0) {
			$fetch = mysqli_fetch_assoc($resultt);
		}

		?>
		<?php echo $fetch['username'];?>

			<a href="../../controller/home/logoutAction.php" >Logout</a>

		</div>

	</header>


	<aside>
		
		<ul>
			
			<li>
				<a href="">My Course</a>
			</li>

			<li>
				<a href="">My result</a>
			</li>

			


		</ul>


	</aside>


	<div class="content">
		
		<h1>Sidebar Accordion</h1>

		<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.

		Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>

		<input type="text" name="">


	</div>
	

</body>
</html>