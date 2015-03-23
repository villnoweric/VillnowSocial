<?php
function vs_follow($user, $data, $con){
		$sql = "INSERT INTO relationship (user, data, action) VALUES ('" . $user . "','" . $data . "','Follow')";
		$con->query($sql);
		header('Location: ./');
		die;
}
?>