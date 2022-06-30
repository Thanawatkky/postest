<?php
include "../connect.php";
$sql = "SELECT * FROM tb_user WHERE username='".$_REQUEST['username']."' AND password='".$_REQUEST['password']."'";
$query = $conn->query($sql);
$num = $query->num_rows;
if($num <= 0){
    echo "ชื่อผู้ใช้หรือรหัสผ่านผิด";
}else{
    session_start();
    $_SESSION['sess_id'] = session_id();
    echo "OK";
}
?>