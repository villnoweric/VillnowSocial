        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header"><?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>'s Settings</h3>
			<?php
			$result = mysqli_query($con,"SELECT * FROM `users` WHERE ID='" . $_SESSION['ID'] . "'");
			while($row = mysqli_fetch_array($result)) {
			echo $row['username'];
			}
			?>
			<form method="post" action="update.php">
				<input type="phone">
			</form>
		    <p>V 0.3</p>
			<p><b>Screen Size</b></p>
			<p class="visible-xs">Extra Small</p>
			<p class="visible-sm">Small</p>
			<p class="visible-md">Medium</p>
			<p class="visible-lg">Large</p>
			<p><a href="signout">Sign Out</a></p>
			<p><a href="about"> About</a></p>
			<input type="tel" placeholder="PIN" size="4" style="-webkit-text-security: disc;" maxlength="4">
        </div>