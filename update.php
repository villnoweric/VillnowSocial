<?php
include('functions.php');
	if(isset($_POST['message'])) {
		$message = $_POST['message'];
		$sql = "INSERT INTO posts (user, date, content) VALUES ('" . $_SESSION['ID'] . "','" . date("Y-m-d H:i:s") . "','" . $message ."')";
		$con->query($sql);
	}
	header('Location: ./');
?>