<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$khoa = 'tranvlnh';

$servername = "localhost";
$username = "id20938444_sperushvn";
$password = "Anhvip2006@";
$dbname = "id20938444_sperush";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>
