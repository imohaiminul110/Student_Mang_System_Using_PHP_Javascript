<?php
include '../../model/conn.php';
session_start();
$sEmail = $_SESSION['email'];
if (isset($sEmail)) {
if ($_SESSION['usertype'] == 'student') {
    header("location: ../student/studentHome.php");
  }
  if ($_SESSION['usertype'] == 'admin') {
    header("location: ../admin/adminHome.php");
  }
  }

/*if (! isset($sEmail)) {
	header("location: ../home/login.php");
	}
elseif ($_SESSION['usertype'] == 'student') {
	header("location: ../home/login.php");
}*/
?>