<?php
include '../../model/conn.php';
$sql = "SELECT * FROM admission";
$result = mysqli_query($conn, $sql);
/*$sql = "SELECT * FROM admission";
$resultt = mysqli_query($conn, $sql);*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admission info</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

	
<?php
include 'adminHeader.php';
include 'adminSideBar.php';
?>

<div class="content">	
	<center>
		<h1>Applied for Admission</h1>
		<table border="1px">
			<tr>
				<th style="padding: 20px; font-size: 15px;">Name</th>
				<th style="padding: 20px; font-size: 15px;">Email</th>
				<th style="padding: 20px; font-size: 15px;">Phone</th>
				<th style="padding: 20px; font-size: 15px;">Message</th>
				<th style="padding: 20px; font-size: 15px;">Photo</th>
				<th style="padding: 20px; font-size: 15px;">Action</th>
			</tr>
<?php 
			while ($info = $result->fetch_assoc())
			{

			?>
			<tr>
				<td style="padding: 20px;">
					<?php echo "{$info['name']}";?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['email']}";?> 
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['phone']}";?> 
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['message']}";?> 
				</td>
				<td style="padding: 20px;">
					<img src="../../asset/uploadedImage/<?php echo $info['image'];?>"style= "width: 100px; height: 80px ">  
				</td>
				<td style="padding: 20px;">
					<?php 
					echo "<a href = '../../controller/admin/adminDeleteAdmissionInfoAction.php?student_id={$info['id']}'>delete</a>";
					echo "<a href = 'adminUpdateStudentInfo.php?student_id={$info['id']}'>     Update</a>";
					?> 
				</td>
			</tr>
			<?php
				}
			?>
			<?php 
			/*while ($infoo = $resultt->fetch_assoc())
			{*/

			?>
			<!-- <tr>
				<td style="padding: 20px;">
					<?php echo "{$infoo['name']}";?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$infoo['email']}";?> </td>
				<td style="padding: 20px;">
					<?php echo "{$infoo['phone']}";?> </td>
				<td style="padding: 20px;">
					<?php echo "{$infoo['message']}";?> </td>
			</tr> -->

			<?php
				//}
			?>
		</table>
	</center>
</div>
</body>
</html>