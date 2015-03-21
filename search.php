<link href='css/profile.css' rel='stylesheet' type='text/css'>
<?php
$searchterm = $_SESSION['searchterm'];

$result = mysqli_query($con,"SELECT * FROM `users` WHERE lname LIKE '%{$searchterm}%' OR fname LIKE '%{$searchterm}%'");
							echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 main">
										<div class="container-fluid" style="">
										<div class="row">';
							while($row = mysqli_fetch_array($result)) {
							$profilepic = $row['profile'];
							$gender = $row['gender'];
							if(empty($profilepic)){
								if($gender == 'male'){
									$profilepic = 'male';
								}else{
									$profilepic = 'female';
								}
							}
								echo '<div class="col-xs-12 col-sm-offset-2 col-sm-5 panel search">';
								echo '<img src="images/profile/' . $profilepic . '.jpg" class="img-thumbnail img" />';
								echo '<b><a href="' . $row['URL'] . '">' . $row['fname'] . ' ' . $row['lname'] . '</a></b>';
								echo '</div>';
								
							}
echo '</div></div></div>';
?>