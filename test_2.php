
<?php 
	session_start(); //start session, nếu có rồi thì thôi
	var_dump($_SESSION);
	var_dump($_COOKIE); //biến cookie dc lưu trên trình duyệt, dùng để đẩy tên file phpsesid lên server
 ?>