<?php
  $servername = "localhost";
  $username = "root"; 
  $password = "CMpavi@123";
  $dbname = "user";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed:{$conn->connect_error}");
  }
  
?>
