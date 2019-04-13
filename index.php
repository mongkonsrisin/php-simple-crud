<?php require('dbconfig.php');
session_start();
 ?>

<html>
<head>
<title>Hello</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
</head>
<body>
  <?php
$sql = "SELECT * FROM customers";
$result = mysqli_query($cnn,$sql);
$customers = mysqli_num_rows($result);

$sql = "SELECT * FROM provinces";
$result = mysqli_query($cnn,$sql);
$provinces = mysqli_num_rows($result);

   ?>
<div class="container">
<div class="page-header"><h1>เมนู</h1></div>
<button onclick="window.location.href='customer.php';" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> ข้อมูลลูกค้า (<?php echo $customers; ?>) </button>
<button onclick="window.location.href='province.php';" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-map-marker"></span> ข้อมูลจังหวัด (<?php echo $provinces; ?>) </button>
<hr>
<button onclick="window.location.href='login.php';" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-lock"></span> เข้าระบบ  </button>
<button onclick="window.location.href='protect.php';" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> โปรไฟล์ (<?php echo $_SESSION['fullname']; ?>)</button>
<button onclick="window.location.href='logout.php';" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-lock"></span> ออกระบบ  </button>



</div>
</body>
</html>
