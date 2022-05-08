<?php 
    session_id() || session_start();
    //session_start 2 lần sẽ bị lỗi, nên dùng thêm session_id để ko bị lỗi 
	require "checkLogin.php";
	$username = $_SESSION["username"];
	require "connectDB.php";
	$sql = "SELECT * FROM user WHERE username='$username'";

	$result = $conn->query($sql);
	$row = $result->fetch_assoc(); //lấy ra 1 dòng
	$firstname = $row["firstname"];
	$lastname = $row["lastname"];
	$fullname = $firstname . " " . $lastname;
	echo $fullname;
 ?>

 <a href="logout.php">Logout</a>