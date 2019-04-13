<?php require('dbconfig.php');
session_start();
?>

<html>
<head>
  <title>เข้าระบบ</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container">
  <div class="page-header"><h1>เข้าระบบ</h1> </div>

<?php
if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];


    $sql = "SELECT * FROM customers WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($cnn,$sql);
    $count = mysqli_num_rows($result);
    $user = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if ($count > 0) {
      $_SESSION['fullname'] = $user[0]['fullname'];
      header('location:protect.php');
    }
}
?>
<form action="" method="post">
  <div class="form-group">
    <label>Username :</label>
    <input type="text" class="form-control" name="username" value="">
  </div>

  <div class="form-group">
     <label>Password :</label>
     <input type="password" class="form-control" name="password" value="">
   </div>
   <button type="submit" class="btn btn-success btn-lg" name="login">เข้าระบบ</button>



</form>
<center><h3><a href="index.php">กลับสู่เมนู</a></h3></center>

</div>
</body>
</html>
