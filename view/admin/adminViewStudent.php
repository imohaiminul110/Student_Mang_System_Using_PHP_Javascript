<?php
include '../../model/conn.php';
$sql = "SELECT * FROM user where usertype = 'student'";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Student</title>
</head>
<body>
	<?php
	include 'adminHeader.php';
	include 'adminSidebar.php';
	?>
<div class="content">	
	<center>
		<h1>Student info</h1>
		<table border="1px">
			<tr>
				<th style="padding: 20px; font-size: 15px;">Name</th>
				<th style="padding: 20px; font-size: 15px;">Email</th>
				<th style="padding: 20px; font-size: 15px;">Phone</th>
				<th style="padding: 20px; font-size: 15px;">Action</th>
			</tr>

			<?php 
			while ($info = $result->fetch_assoc())
			{

			?>
			<tr>
				<td style="padding: 20px;">
					<?php echo "{$info['username']}";?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['email']}";?> 
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['phone']}";?> 
				</td>
				<td style="padding: 20px;">
					<?php 
					echo "<a href = '../../controller/admin/adminDeleteStudentInfoAction.php?student_id={$info['id']}'>delete</a>";
					echo "<a href = 'adminUpdateStudentInfo.php?student_id={$info['id']}'>     Update</a>";
					?> 
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</center>
</div>
</body>
</html>