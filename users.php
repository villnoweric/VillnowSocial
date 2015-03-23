<?php
$result = mysqli_query($con,"SELECT * FROM `users` WHERE URL='" . $profile . "'");
while($row = mysqli_fetch_array($result)) {
	$profilepic = $row['profile'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$description = $row['description'];
	$quote = $row['quote'];
	$username = $row['username'];
	$ID = $row['ID'];
	$gender = $row['gender'];
}
if(empty($profilepic)){
	if($gender == 'male'){
		$profilepic = 'male';
	}else{
		$profilepic = 'female';
	}
}
?>

        <link href='css/profile.css' rel='stylesheet' type='text/css'>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
				<div class="row panel">
					<div class="col-md-4 bg_blur">
					<?php if($username == $_SESSION['username']){}else{?>
						<a href="update.php?follow=1&user=<?php echo $_SESSION['ID']; ?>&data=<?php echo $ID; ?>" class="follow_btn">Follow</a>
						<?php }?>
					</div>
					<div class="col-md-8  col-xs-12">
					   <img src="images/profile/<?php echo $profilepic; ?>.jpg" class="img-thumbnail picture hidden-xs" />
					   <img src="images/profile/<?php echo $profilepic; ?>.jpg" class="img-thumbnail visible-xs picture_mob" />
					   <div class="header">
							<h1><?php echo $fname . ' ' . $lname; ?></h1>
							<h4><?php echo $description; ?></h4>
							<span>"<?php echo $quote; ?>"<br><br></span>
					   </div>
					</div>
				</div>
				<div class="row">
					
						<?php
							$result = mysqli_query($con,"SELECT * FROM `posts` WHERE user='" . $ID . "'");
							
							while($row = mysqli_fetch_array($result)) {
							echo '<div class="col-md-4">
					</div>';
								echo '<div class="col-md-8  col-xs-12 panel post">';
								echo '<img src="images/profile/' . $profilepic . '.jpg" class="img-thumbnail img" />';
								echo '<b>' . $fname . ' ' . $lname . '</b><br>Shared Publicly - Date of Post<br>';
								echo $row['content'];
								echo "</div>";
							}
						?>
					</div>
				</div>  				
			</div>
			<div>
			
			</div>
        </div>