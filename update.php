<?php
session_start();
$con = mysqli_connect('localhost', 'social_user', 'mrNTUSfrcjM66hEH', 'social');
	if(isset($_POST['message'])) {
		$message = $_POST['message'];
		$sql = "INSERT INTO posts (user, date, content) VALUES ('" . $_SESSION['ID'] . "','" . date("Y-m-d H:i:s") . "','" . $message ."')";
		if (mysqli_query($con, $sql)) {
			header("//ericvillnow.com");
			die;
		}
	}
?>