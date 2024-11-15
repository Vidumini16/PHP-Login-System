
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>crud table</title>
</head>
<body>
<a href="./crud.php">Home</a>
<a href="./create.php">Add new</a><br>

<table>
  <tr>
    <th>ID</th>  
    <th>Name</th>
    <th>Num_people</th>
	<th>Date</th>
	<th>Time</th>
	<th>Actions</th>
  </tr>

<?php
   include "connection.php";
   $sql = "SELECT * FROM crud";
   $result = $conn->query($sql);
    if(!$result){
		die("Invalid query!");   
	}
	while($row = $result->fetch_assoc()){
		echo"
    <tr>
    <th>$row[id]</th>
    <td>$row[name]</td>
    <td>$row[num_people]</td>
	<td>$row[date]</td>
	<td>$row[time]</td>

	<td>
	    <a href='edit.php?id=$row[id]'>Edit</a>
		<a href='delete.php?id=$row[id]'>Delete</a>
		</td>
  </tr>
";
	}
	?>
</table>
</body>
</html>






