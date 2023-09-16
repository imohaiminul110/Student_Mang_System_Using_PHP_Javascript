<?php
include '../../model/conn.php';
session_start();
$sEmail = $_SESSION['email'];
if (! isset($sEmail)) {
	header("location: ../home/login.php");
	}
elseif ($_SESSION['usertype'] == 'student') {
	header("location: ../home/login.php");
}
?>