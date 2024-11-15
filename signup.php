<?php
  include "connection.php";
  if(isset($_POST["submit"])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password =$_POST['password'];
	$cpassword =$_POST['cpassword'];

	$sql = "select * from employee where username = '$username'";
	$result = mysqli_query($conn, $sql);
	$count_user = mysqli_num_rows($result);

    $sql = "select * from employee where email = '$email'";
	$result = mysqli_query($conn, $sql);
	$count_user = mysqli_num_rows($result);

    $sql = "select * from employee where password = '$password'";
	$result = mysqli_query($conn, $sql);
	$count_email = mysqli_num_rows($result);



	if ($count_user==0 & $count_email==0) {
			if($password==$cpassword){
				$hash=password_hash($password,PASSWORD_DEFAULT);
				$sql ="INSERT INTO employee(username,email,password) VALUES('$username', '$email', 'hash')";
				$result =mysqli_query($conn, $sql);
				if($result){
					header("Location: ./index.php");
				}
			}
	}
	else{
		if($count_user>0){
		echo '<script>
		window.location.href = "index.php";
		alert("username already exit");
		</script>';
		}
		if($count_email>0){
			echo '<script>
		window.location.href = "index.php";
		alert("email already exit");
		</script>';
		}
		
		
		
		
		
	}
  }
?>
