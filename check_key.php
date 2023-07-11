<?php 
include 'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

$key = $_POST['key'];
$name = $_POST['name'];


$status;
$sql = "SELECT * FROM `license` where `key_tool`='$key' and `name_tool`='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = $row['time_expired'];
        $dtime = DateTime::createFromFormat("Y-m-d H:i:s", $time);
        $timestamp = $dtime->getTimestamp();

        
        if($timestamp -  time()> 0)
        {
            $status = array
            (
              'status' => 'true',
              'time_expired' => $time,
            );
            break;
        }
        else
        {
            $status = array
            (
              'status' => 'false',
               'msg' => 'key đã hết hạn'
            );
        }
    }
} 
else 
{
    $status = array
    (
        'status' => 'false',
        'msg' => 'key không tồn tại'
    );
}

echo json_encode($status);
?>