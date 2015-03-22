<?php
function vs_post($user, $data, $con){
		$sql = "INSERT INTO posts (user, date, content) VALUES ('" . $user . "','" . date("Y-m-d H:i:s") . "','" . $data ."')";
		$con->query($sql);
		header('Location: ./');
		die;
		echo("Error description: " . mysqli_error($con));
}
?>