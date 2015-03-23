        <link href='css/profile.css' rel='stylesheet' type='text/css'>
		<?php
		if(empty($_SESSION['profile'])){
		if($_SESSION['gender'] == 'male'){
		$_SESSION['profile'] = 'male';
		}else{
		$_SESSION['profile'] = 'female';
		}
		}
		?>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
				<div class="row panel">
					<div class="col-md-4 bg_blur">
					<a href="post" class="follow_btn">Post</a>
					</div>
					<div class="col-md-8  col-xs-12">
					   <img src="images/profile/<?php echo $_SESSION['profile']; ?>.jpg" class="img-thumbnail picture hidden-xs" />
					   <img src="images/profile/<?php echo $_SESSION['profile']; ?>.jpg" class="img-thumbnail visible-xs picture_mob" />
					   <div class="header">
							<h1><?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?></h1>
							<h4><?php echo $_SESSION['description']; ?></h4>
							<span>"<?php echo $_SESSION['quote']; ?>"<br><br></span>
					   </div>
					</div>
				</div>
				<div class="row">
					
						<?php
							$result = mysqli_query($con,"SELECT * FROM `posts` WHERE user='" . $_SESSION['ID'] . "' ORDER BY date DESC");
							
							while($row = mysqli_fetch_array($result)) {
								echo '<div class="col-md-4"></div>';
								echo '<div class="col-md-8  col-xs-12 panel post">';
								echo '<img src="images/profile/' . $_SESSION['profile'] . '.jpg" class="img" />';
								echo '<b>' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</b><br>';
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