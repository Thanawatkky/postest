<?php
$hostname = "localhost";
$db_user = "root";
$db_pass = "";
$db_name= "db_pos";

$conn = new mysqli($hostname,$db_user,$db_pass,$db_name);

if($conn->connect_error){
    die("เอะ ๆ ๆ ติดต่อฐานข้อมูลไม่ได้จ้า".$conn->connect_error);
   
}
?>