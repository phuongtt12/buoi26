<?php 
	require "connectDB.php";
	// ngăn ng dùng chạy trực tiếp file này
	if (empty($_POST)) {
		header("location:index.html");
		exit;
	}
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$birthday = $_POST["birthday"];
	$gender = $_POST["gender"];
	$sql = "INSERT INTO user (username, firstname, lastname, email, password, birthday, gender)
		VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$birthday', '$gender')";

	if ($conn->query($sql) === TRUE) {
		header("location:../login/login.php");
	} else {
		echo "Error: " . $sql ."<br>" .$conn->error;
	}
	$conn->close();
 ?>