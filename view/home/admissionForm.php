<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/admissionFormCss.css">
	<style type="text/css">
		.topnav {
  overflow: hidden;
  background-color: #333;
  text-align: right;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}
	</style>
	
</head>
<body>
<div class="topnav">
  <a href="../../">Home</a>
  <a href="#">Admission Form</a>
  <a href="login.php">Log In</a>
</div>

	 <div align="center" >

		<form action="../../controller/home/admissionFormAction.php" method="POST" enctype="multipart/form-data" id="create-account-form">
		<div class="title">
            <h2>Admission form</h2>
        </div>
		<div class="input-group">
			<label for="username" >Name</label>
			<input type="text" name="name" id="username" placeholder="name">
			<p>Error Message</p>
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="Email" name="email" id="email" placeholder="email">
			<p>Error Message</p>
		</div>

		<div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" id= "phone" placeholder="phone">
			<p>Error Message</p>
		</div>
		
        <div class="input-group">
            <label>Password</label>
            <input type="password" id="password" placeholder="Password" name="password">
            <p>Error Message</p>
        </div>
        
       
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Password" name="confirmpassword">
            <p>Error Message</p>
        </div>

        <div class="input-group">
			<label>Message</label>
			<textarea name="message" id="message" placeholder="message"></textarea>
			<p>Error Message</p>
		</div>
		<div class="input-group">
			<label >Upload image</label>
			<input id="photoUpload" type="file" name="image" accept="image/jpg, image/jpeg, image/png ">
			<p>Error Message</p>
		</div>

		<div class="input-group" >
			<input class="submit" type="submit" value="apply" name="apply">
		</div>

		<!-- <div class="input-group" >
			<button type="submit" class="btn">Submit</button>
		</div> -->

		<!-- <div class="input-group" >
			<input class="submit" type="submit" value="apply" name="apply">
		</div> -->
		</form>
	</div>

	<script src="../../asset/js/admissionFormJS.js"></script>
</body>
</html>