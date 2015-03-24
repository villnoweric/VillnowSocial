        <link href='css/profile.css' rel='stylesheet' type='text/css'>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header">Your Feed</h3>
		  <div class="col-sm-12 main">
										<div class="container-fluid" style="">
										<div class="row">
		  <?php
		    $user_ids = vs_feed($_SESSION['ID'], $con);
			$ids = join(',',$user_ids);  
			$sql = "SELECT * FROM USERS WHERE user_id IN ($ids)";
			$result = mysqli_query($con,"SELECT * FROM `posts` WHERE user IN ($ids) ORDER BY date DESC");
			if(mysqli_num_rows($result)==0) {
			echo '<div class="col-xs-12 panel search">';
			echo 'Follow Somebody First';
			echo '</div>';
			}else {
			while($row = mysqli_fetch_array($result)) {
			$info = mysqli_query($con,"SELECT * FROM `users` WHERE id=" . $row['user']);
			

			while($rows = mysqli_fetch_array($info)) {
			$fname = $rows['fname'];
			$lname = $rows['lname'];
			$profile = $rows['profile'];
			$URL = $rows['URL'];
			}
			
			echo '<div class="col-xs-12 col-md-8 col-md-offset-4 panel post">';
			echo '<img src="images/profile/' . $profile . '.jpg" class="img-thumbnail img" />';
			echo '<b><a href="' . $URL . '">' . $fname . ' ' . $lname . '</a></b><br>';
			echo $row['content'];
			echo '</div>';
			
		
			}
			
			}
		  ?>
		  </div></div></div>
        </div>