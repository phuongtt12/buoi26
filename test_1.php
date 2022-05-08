<?php 
	session_start(); //start session(tạo ra file session nếu có rồi thì đổ dữ liệu từ file session vô biến $_SESSION.
	//các trang khác đều nhìn thấy biến $_SESSION
	$_SESSION["username"] = "Nguyễn Văn A";//gán giá trị cho biến, hệ thống tự động cập nhật vô file session
	var_dump($_SESSION);
 ?>