<?php 
include 'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

$key = $_POST['key'];
$name = $_POST['name'];

$key = $name = 'tranvlnh';

$status = array();
$sql = "SELECT * FROM `license`";
$result = $conn->query($sql);

//echo date('d-m-Y H:i:s',time()).'\n';

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $status[] = $row;
    }
} 

echo json_encode($status);
?>