<?php
if(empty($_SESSION['log'])){
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="manifest" href="manifest.json">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="//ericvillnow.com/favicon.ico">
    <title>Villnow Social | <?php echo $_SESSION['page']; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home"><img alt="Brand" src="//ericvillnow.com/logo.png" style="height: 100%;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		    <!-- MOBILE MENU -->
			<li class="visible-xs"><a href="feed"><span class="glyphicon glyphicon-inbox"></span> Feed</a></li>
			<li class="visible-xs"><a href="profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
			<!--<li class="visible-xs"><a href="messages"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
			<li class="visible-xs"><a href="events"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
			<li class="visible-xs"><a href="friends"><span class="glyphicon glyphicon-plus"></span> Friends</a></li>-->
			<li class="visible-xs divider"></li>
			<li class="visible-xs"><a href="settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
			<!-- DESKTOP MENU -->
			<li class="hidden-xs"><a href="profile"><span class="glyphicon glyphicon-user"></span></a></li>
			<!--<li class="hidden-xs"><a href="friends"><span class="glyphicon glyphicon-plus"></span></a></li>-->
			<li class="dropdown hidden-xs">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu" role="menu">
			  <li class="dropdown-header"><?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?></li>
			  <li class="divider"></li>
			  <li><a href="settings">Settings</a></li>
			  <li><a href="signout">Sign Out</a></li>
			  <li class="divider"></li>
			  <li><a href="help">Help</a></li>
			  <li><a href="report">Report a Problem</a></li>
			  <li class="dropdown-header">V 0.3</li>
			  <li class="dropdown-header">&copy; Eric Villnow 2015 - mrNTUSfrcjM66hEH</li>
              </ul>
            </li>
          </ul>
          <form method="get" action="index.php" class="navbar-form navbar-right hidden-">
			<input name="id" type="hidden" value="searchform">
            <input name="s" type="search" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		    <li><a href="profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="feed"><span class="glyphicon glyphicon-inbox"></span> Feed <span class="sr-only">(current)</span></a></li>
            <!--<li><a href="messages"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
            <li><a href="events"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
			<li><a href="friends"><span class="glyphicon glyphicon-plus"></span> Friends</a></li>-->
          </ul>
        </div>