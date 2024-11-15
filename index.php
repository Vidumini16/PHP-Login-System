<?php
  include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Login</title>
</head>
<body>
	<h2>SignIn</h2>
	<form name="form" action="./login.php" method="POST">
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="email" name="email" placeholder="Email" required>
		
		<button type="submit" name="submit" >SignIn</button>
	</form>
</body>
</html>
