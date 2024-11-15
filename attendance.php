<?php
  include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Attendance</title>
</head>
<body>
	<h2>Employee Attendance Form</h2>
	<form>
	    <input type="text" name="username" placeholder="Employee name" required>
		<input type="email" name="email" placeholder="Enter Email" required>
		<input type="date" name="date" placeholder="Date" required>
		<input type="time" name="time" placeholder=" Report Time" required>
		<button type="submit" name="submit" >SignUp</button>
	</form>
</body>
</html>