<?php 
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	require "connectDB.php";

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	session_start();
	$result = $conn->query($sql); //thực thi câu lệnh
	if ($result->num_rows == 1) {
		//nếu số lượng dòng trong $result = 1
		$_SESSION["username"] = $username;
		header("location:profile.php");
	} else {
		$_SESSION["error"] = "Sai username/password";
		// sleep(seconds);
		header("location:login.php"); //đi đến trang login
	}

 ?>