<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Activity 1</title>
</head>
<body>
	<?php session_start(); ?>

	<h1>Log in</h1>
	
	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['username'])) {
			echo $_SESSION['username'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>		
	</h2>
	<?php
		if(isset($_SESSION['attempt_to_login'])) {
			echo $_SESSION['username'] . " is already logged in, please logout first.";
		} ?>
	
	<a href="unset.php">Logout</a>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="Enter Username Here" name="username"></p>
		<p><input type="password" placeholder="Enter Password Here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
</body>
</html>