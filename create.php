<?php
   include "connection.php";
   if(isset($_POST["submit"])){
	 $name = $_POST['name'];
	 $num_people = $_POST['num_people'];
	 $date = $_POST['date'];
	 $time = $_POST['time'];
 
	 $q = "INSERT INTO `crud`(`name`,`num_people`,`date`,`time`) VALUES ('$name','$num_people','$date','$time') ";
 
	 $query = mysqli_query($conn,$q);
   }
 ?>
 <!DOCTYPE html> 
 <html lang="en">
 <head> 
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="./style.css">
	 <title>new customer</title>
 </head>
 <body>
 <h2>Add New Customer</h2>
 
 <a href="./crud.php">Home</a>
 <a href="./create.php">Add New Customer</a>
 
	 <form name="form" action="./create.php" method="POST">
		 <input type="text" name="name" placeholder="Customer Name" required>
		 <input type="text" name="num_people" placeholder="Number of Guest" required>
		 <input type="date" name="date" placeholder="Date" required>
		 <input type="time" name="time" placeholder="Boking Time" required>
 
		 <button type="submit" name="submit" >Submit</button><br>
		 <a type="submit" name="cancel" href="./crud.php">Cancel</a><br>
	 </form>
 </body>
 </html>

