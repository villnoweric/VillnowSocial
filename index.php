<?php
//BEGIN
require_once('config.php');
require_once('functions.php');
//CHECK USER FOR SIGN IN
if(isset($_POST['email'])){
	$result = mysqli_query($con,"SELECT * FROM `users` WHERE email='" . $_POST['email'] . "' OR username='" . $_POST['email'] . "'");
	// NO USER EXISTS
	if(mysqli_num_rows($result)==0) {
		$error = 1;
		include('signin.php');
		die;
	}
	while($row = mysqli_fetch_array($result)) {
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['fname'] = $row['fname'];
		$_SESSION['lname'] = $row['lname'];
		$_SESSION['DOB'] = $row['DOB'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['description'] = $row['description'];
		$_SESSION['quote'] = $row['quote'];
		$_SESSION['profile'] = $row['profile'];
		$pass = $row['password'];
	}
	$passhash = hash('md5', $_POST['password']);
	
	// INCORRECT PASSWORD
	if($pass !== $passhash){
		$error = 2;
		include('signin.php');
		die;
	}
	// IF ALL SUCSESS, CHANGED LOGED IN STATUS TO ALLOW ACCESS
	$_SESSION['log'] = 1;
}
// CHECK PERSONAL PROFILE
if(isset($_GET['id'])){
$result = mysqli_query($con,"SELECT * FROM users WHERE URL='" . $_GET['id'] . "'");
    if(mysqli_fetch_array($result)){
	$profile = $_GET['id'];
	include('header.php');
	include('users.php');
	include('footer.php');
	die;
}
// SEARCH
if($_GET['id'] == 'searchform'){
	$_SESSION['searchterm'] = $_GET['s'];
	header('Location: search');
	die;
}
if($_GET['id'] == 'search'){
	include('header.php');
	include('search.php');
	include('footer.php');
	die;
}
// MAIN PAGE SWITCHER
	if($_GET['id'] == 'signout'){
		session_unset();
		header('Location: ../social');
	}else{
		$page = $_GET['id'];
		$_SESSION['page'] = $page;
		include('header.php');
		include($page . '.php');
		include('footer.php');
		die;
	}
}
// IF YOU NEED TO LOG IN...
if(empty($_SESSION['log'])) {
	include('signin.php');
}
// DIRECT ACCESS TO INDEX WILL BRING YOU HERE... (FEED)
if(isset($_SESSION['log'])) {
	$_SESSION['page'] = 'Profile';
	include('header.php');
	include('feed.php');
	include('footer.php');
}
?>