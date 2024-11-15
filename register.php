<?php
  include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Register</title>
</head>
<body>
	<h2>Employee Registration</h2>
	<form name="form" action="./signup.php" method="POST">
	    <input type="text" name="username" placeholder="Enter Username" required>
		<input type="email" name="email" placeholder="Enter Email" required>
		<input type="password" name="password" placeholder="Create Password" required>
		<input type="password" name="cpassword" placeholder="Retry Password" required>
		<button type="submit" name="submit" >SignUp</button>
	</form>
</body>
</html>
