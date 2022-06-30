<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS-ระบบขายหน้าร้าน</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center"> <h1>LOGIN</h1>                 
  <div class="container">
  <form class="form-group" action="api/ac_login.php" method="post" id="frm_login">
    <div class="col-sm-4">
      <label class="label-form" for="username"></label> 
      <input class="form-control" type="text" placeholder="username" name="username" id="username">
    </div>
    <div class="col-sm-4 ">
      <label class="label-form" for="password"></label> 
      <input class="form-control" type="password" placeholder="password" name="password" id="password">
    </div> <br>
    <div class="col-sm-4"> 
      <button class="btn btn-primary " type="submit">เข้าสู่ระบบ</button>
    </div>
  </form>
</div>
</div>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery-2.2.2.min.js"></script>
<script>
  
$("#frm_login").on("submit", function() {
  var username = $("#username").val();
  var password = $("#password").val();
  console.log("Use = " + username);
  console.log("Pass = " + password);
  if (username == '') {
    alert("กรุณากรอก Username ด้วย");
    $("#username").focus();
  } else if (password == '') {
    alert("กรุณากรอก Password ด้วย");
    $("#password").focus();
  } else {
    var url = $(this).attr("action");
    var data = new FormData(this);
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: data,
        processData: false,
        contentType: false,
        success: function(data,status) {
           if (data == "OK") {
             alert("Login สำเร็จ");
             location.replace("index.php")
           }else{
             alert(data);
           }
        }
    });
  }
});
</script>
</body>

</html>