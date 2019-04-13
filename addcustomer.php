<?php require('dbconfig.php'); ?>
<html>
<head>
<title>เพิ่มข้อมูลลูกค้า</title>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$sql = "SELECT * FROM provinces";
$result = mysqli_query($cnn,$sql);
$provinces = mysqli_fetch_all($result,MYSQLI_ASSOC);


if(isset($_POST['save'])) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $province = $_POST['province'];

  $sql = "INSERT INTO customers VALUES(null,'$fullname','$username','$password',' $email','$tel','$province')";
  mysqli_query($cnn,$sql);
  header('location:customer.php');
}

?>
<div class="container">
<div class="page-header"><h1>เพิ่มข้อมูลลูกค้า</h1> </div>
<form action="" method="post" class="">

  <div class="form-group">
    <label>Full Name :</label>
    <input type="text" class="form-control" name="fullname" value="">
  </div>

  <div class="form-group">
     <label>Username :</label>
     <input type="text" class="form-control" name="username" value="">
   </div>

  <div class="form-group">
    <label>Password :</label>
    <input type="password" class="form-control" name="password" value="">
  </div>

  <div class="form-group">
    <label>E-mail :</label>
    <input type="text" class="form-control" name="email" value="">
  </div>

  <div class="form-group">
    <label>Tel :</label>
    <input type="text" class="form-control" name="tel" value="">
  </div>

  <div class="form-group">
  <label>Province :</label>

    <select class="form-control" name="province">
    <?php
    foreach ($provinces as $province) {
      echo '<option value="' . $province['pid'] . '">' . $province['pname'] . "</option>";
    }
    ?>
    </select>

  </div>

  <button type="submit" class="btn btn-success btn-lg" name="save"><span class="glyphicon  glyphicon-floppy-disk"></span> บันทึก</button>
                      </form>

                        </div>

</body>
</html>
