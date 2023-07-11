<?php
include 'config.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

$k = $_POST['k'];
$key = $_POST['key'];


if($k != $khoa)
{
    echo 'tranvlnh';
    return;
}
$status;
$sql = "DELETE FROM `license` WHERE `id`=".$key;



if ($conn->query($sql) === TRUE) {
    $status = array
    (
        'status' => 'true',
        'msg' => 'xóa key id: '.$key.' thành công'
    );
} else {$status = array
    (
        'status' => 'false',
        'msg' => 'xóa key thất bại',
        'error' => mysqli_error($conn)
    );
}

echo json_encode($status);
?>