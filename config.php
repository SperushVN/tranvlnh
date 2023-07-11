<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$khoa = 'tranvlnh';

$servername = "localhost";
$username = "id15425858_tranvlnh07";
$password = "YhNe[2)tbWG{^Ew[";
$dbname = "id15425858_tranvlnh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>