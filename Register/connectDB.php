<?php 
require "config.php"; // ko require 2 lần 
// Create connection
$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
?>