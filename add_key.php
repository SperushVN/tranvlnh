<?php
include 'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

$k = $_POST['k'];
$key = $_POST['key'];
$name = $_POST['name'];
$time_expired = $_POST['expired'];


if($k != $khoa)
{
    echo 'tranvlnh';
    return;
}
$status;
$sql = "INSERT INTO license(key_tool, name_tool, time_expired) VALUES ('$key', '$name','$time_expired')";



if ($conn->query($sql) === TRUE) {
    $status = array
    (
        'status' => 'true',
        'msg' => 'add key thành công'
    );
} else {$status = array
    (
        'status' => 'false',
        'msg' => 'add key thất bại',
        'error' => mysqli_error($conn)
    );
}

echo json_encode($status);
?>