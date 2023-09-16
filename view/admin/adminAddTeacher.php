<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add student</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/addStudentCss.css">
</head>
<body>

<?php
include 'adminHeader.php';
include 'adminSideBar.php';
?>

	<div class="content" >
		<center >
			<h1>ADD STUDENT</h1>
				<form action="../../controller/admin/adminAddStudentAction.php" method="POST" class="div_deg">	

			    <div>
			    	<label>NAME</label>
			    <input type="text" placeholder="Student name" name="name" />
			    </div>
			    <div>
			    	<label>EMAIL</label>
			    <input type="email" placeholder="example@test.com" name="email" />
			    </div>
			    <div>
			    	 <label>PHONE</label>
			    <input type="number" placeholder="Phone no" name="phone" />
			    </div>
			    <div>
			    	<label>PASSWORD</label>
			    <input type="PASSWORD" placeholder="Min 6 charaters long" name="password" />
			    </div>
			   <div>
			   		<input style="background-color: green;" type="submit" name="addStudent" value="ADD STUDENT">
			   </div>	  
			</form>
		</center>	
	</div>
</body>
</html>