<?php
session_start();
if (isset($_SESSION['email'])) {
  if ($_SESSION['usertype'] == 'student') {
    header("location: ../student/studentHome.php");
  }
  if ($_SESSION['usertype'] == 'admin') {
    header("location: ../admin/adminHome.php");
  }
  }

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="../../asset/css/myStyle.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="../../asset/css/home.css"> -->
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
	<title></title>
  <style type="text/css">
    

  </style>
</head>
<body>
 <div class="topnav">
  <a href="../../">Home</a>
  <a href="admissionForm.php">Admission Form</a>
  <a href="#">Log In</a>
</div>
<div align="center">
<form action="../../controller/home/loginAction.php" method="post" class="formm">
  
    <div class="title">
            <h2>Log In</h2>
        </div>
    <div class="input-group">
      <label>EMAIL</label>
      <input  type="email" placeholder="example@test.com" name="email" />
    </div>
    <div class="input-group">
      <label>PASSWORD</label>
    <input type="password" placeholder="password" name="password" />
    </div>
    <div>
      <button class="submit" type="submit">LOGIN</button>
    </div>
</form>
</div>
</body>
</html>