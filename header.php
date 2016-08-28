<?php
session_start();
echo "<!DOCTYPE html><html><head>";
require_once 'function.php';
$userstr = 'guest';
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$loggedin = TRUE;
	$userstr = " $user ";
} else $loggedin = FALSE;
echo "<title>$appname$userstr</title><link rel='stylesheet'" . 
	"href='styles.css' type='text/css'>" .
	"</head><body><center><canvas id='logo' width='0'" .
	"height ='0' >$appname</center>" .
	"<div class='appname'>$userstr</div>"	.
	"<script src='javascript.js'></script>";
if ($loggedin)
	echo "<br><ul class='menu'>"	.
		"<li><a href='members.php?view=$user'>Home</a></li>"	.
		"<li><a href='members.php'>Members</a></li>"			.
		"<li><a href='friends.php'>Friends</a></li>"			.
		"<li><a href='messages.php'>Message</a></li>"			.
		"<li><a href='profile.php'>Profile</a></li>"			.
		"<li><a href='logout.php'>Log out</a></li></ul><br>";
else
	echo ("<br><ul class='menu'>"	.
		  "<li><a href='index.php'>Home</a></li>" 				.
		  "<li><a href='signup.php'>Sign up</a></li>"			.
		  "<li><a href='login.php'>Log in</a></li><ul><br>"		.
		  "<span class='info'>&#8658; sign up with Friends and get started." .
		  " Already a member log in to continue. </span><br><br>");
?>