<?php
include 'adminSession.php';
/*$sql = "SELECT * FROM user";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);



<?php echo $result['username']?>*/
?>

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
	
		<a href="../../index.php">Home</a>

		<div class="logout">
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
</body>
</html>