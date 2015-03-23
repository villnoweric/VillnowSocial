<?php
require_once('functions.php');
require_once('config.php');

if(isset($_POST['message'])) {
	$user = $_SESSION['ID'];
	$data = $_POST['message'];
	vs_post($user, $data, $con);
}

if(isset($_GET['follow'])){
	$user = $_GET['user'];
	$data = $_GET['data'];
	vs_follow($user, $data, $con);
}
?>