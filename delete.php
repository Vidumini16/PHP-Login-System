<?php
   include "connection.php";
   if(isset($_GET['id'])){
	   $id = $_GET['id'];
	   $sql = "DELETE FROM `crud` WHERE id=$id ";
	   $conn->query($sql);
   }
   header('location:./crud.php');
   exit;
?>