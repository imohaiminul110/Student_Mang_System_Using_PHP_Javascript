<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin.css">
</head>
<body>
	
	<?php
	include 'adminHeader.php';
	include 'adminSideBar.php';

	?>
	<div class="content">	
		<h1>ADMIN DASHBOARD</h1>
		<h1><?php echo $_SESSION['email'];?></h1>

		
	</div>




</body>
</html>