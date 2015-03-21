
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="manifest" href="manifest.json">
	<script src="css/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="//ericvillnow.com/favicon.ico">
    <title>Villnow Social | Sign In</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<script>
	$(window).load(function(){
		//$('#wallpaper, #over').delay(500).fadeIn( 800);
				$('#logo').delay( 1000 ).fadeIn( 400 , function(){
					$('#logo').animate({marginTop:"20px"},800,"swing", function(){
						$('#form').delay( 100 ).fadeIn( 400 );
						$('#error').delay( 100 ).fadeIn( 400 );
					});
				//$('#wrap').animate({marginTop:"25%"},800,"swing", function(){
					//$('#text').delay(500).fadeIn( 800 ).delay(3000).fadeOut(800, function(){
						//$('#error').fadeIn(800);
					//});
				//});
				});
	});
</script>
  </head>

  <body>
    <div class="container">
      <form method="post" action="" class="form-signin" role="form">
        <h2 class="form-signin-heading" id="logo"><img src="//ericvillnow.com/logo.png" style="width: 100%;"></img></h2><br>
		
			  <?php if(isset($error)){
	  if($error == 1){
	  echo '<center><div id="error" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign"></span> No Such User Exists</div></center><br>';
	  }elseif($error == 2){
	  echo '<center><div id="error" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign"></span> Incorrect Password</div></center><br>';
	  }
	  }
	  ?>
		<div id="form">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<br><br>
		<center>V 0.3</center>
		</div>
      </form>
    </div>
  </body>
</html>
