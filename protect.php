<?php require('dbconfig.php');
session_start();

if (!isset($_SESSION['fullname'])) {
  header('location:login.php');
  exit;
}
?>

<html>
<head>
  <title>โปรไฟล์</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container">
  <div class="page-header"><h1>สวัสดี <?php echo $_SESSION['fullname']; ?></h1> </div>
  <h3>เฉพาะสมาชิกเท่านั้นที่จะเข้าหน้านี้ได้</h3>


  <center><h3><a href="index.php">กลับสู่เมนู</a></h3></center>

</div>
</body>
</html>
