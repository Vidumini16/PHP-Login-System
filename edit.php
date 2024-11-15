<?php
   include "connection.php";

   $id = "";
   $name = "";
   $num_people = "";
   $date= "";
   $time = ""; 

   $error = "";
   $success = "";

   if ($_SERVER["REQUEST_METHOD"] == "GET") {
	   if (!isset($_GET['id'])) {
		   header("Location: ./crud.php");
		   exit;
	   }
	   $id = $_GET['id'];
	   $sql = "SELECT * FROM crud WHERE id = $id";
	   $result = $conn->query($sql);
	   if ($row = $result->fetch_assoc()) {
		   $name = $row["name"];
		   $num_people = $row["num_people"];
		   $date = $row["date"];
		   $time = $row["time"];
	   } else {
		   header("Location: ./crud.php");
		   exit;
	   }
   } else {
	   $id = $_POST["id"];
	   $name = $_POST["name"];
	   $num_people = $_POST["num_people"];
	   $date = $_POST["date"];
	   $time = $_POST["time"];

	   $sql = "UPDATE crud SET name = '$name', num_people = '$num_people', date = '$date', time = '$time' WHERE id = '$id'";
	   if ($conn->query($sql)) {
		   $success = "Record updated successfully";
	   } else {
		   $error = "Error updating record: " . $conn->error;
	   }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style.css">
   <title>Edit Customer</title>
</head>
<body>
<h2>Edit new member</h2>

<a href="./crud.php">Home</a>
<a href="./create.php">Add new</a>

<form name="form" action="edit.php" method="POST">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
   <input type="text" name="name" placeholder="Customer Name" value="<?php echo $name; ?>" required>
   <input type="text" name="num_people" placeholder="Number of Guest" value="<?php echo $num_people; ?>" required>
   <input type="date" name="date" placeholder="Date" value="<?php echo $date; ?>" required>
   <input type="time" name="time" placeholder="Boking Time" value="<?php echo $time; ?>" required>
   <button type="submit" name="submit">Submit</button><br>
   <a href="./crud.php">Cancel</a><br>
</form>
</body>
</html>

