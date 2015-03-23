<?php
function vs_feed($UID, $con){
    $result = mysqli_query($con,"SELECT * FROM relationship WHERE user='" . $UID . "'");
	if(mysqli_num_rows($result)==0) {
        return false;
		die;
	}
	$stack = array();
	while($row = mysqli_fetch_array($result)) {
        array_push($stack, $row['data']);
	}
	return $stack;
}
?>