<?php
	
	//user chose to log out
	//empty the cookies
	setCookie("username", "");
	setCookie("password", "");
	//page must be reloaded for cookies to change
	if (isset($_COOKIE["username"]) && $_COOKIE["password"] != "")
		header('Location: logout.php');
	
	//destroy the session if it exists
	if (session_id() != "")
	{
		session_unset();
		session_destroy();
	}

		
	$page_title = "Log out - LookingForLove.ca";
	include("./includes/header.php");
?>

<?php
	include("./includes/footer.php")
?>