<?php
session_start();
if($_SESSION['sess_id'] <> session_id()){
    echo"<script>alert('กรุณาล็อกอินด้วยครับ')</script>";
    echo"<script>window.location.replace('login.php')</script>";
}
fdsfdsfsdf
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a href="" class="navbar-brand">หน้าหลัก</a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">เพิ่มสินค้า</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>