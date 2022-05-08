<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="processLogin.php" method="POST">
		<?php
			session_start();
			if(!empty($_SESSION["error"])) {
				echo $_SESSION["error"];
				unset($_SESSION["error"]); //xóa phần tử có key error (để cho lỗi chỉ báo 1 lần)
			}
		?>
		<br>
		<input type="text" placeholder="username" name="username"><br>
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>