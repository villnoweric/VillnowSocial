<?php
require_once('functions.php');
require_once('config.php');

if(isset($_POST['message'])) {
	$user = $_SESSION['ID'];
	$data = $_POST['message'];
	vs_post($user, $data, $con);
}

?>