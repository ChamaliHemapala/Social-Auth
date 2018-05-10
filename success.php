<!DOCTYPE HTML>
<?php
	session_start();

	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		header("Location: loginoauth.php");
	}
?>

<html>
<title>
Let's get connected
</title>

<body>
<script>
alert("You are successfully logged in");
</script>

<input type="button" value="Log out!" onclick="window.location.href='logout.php'"/>
	
</body>
</html>


