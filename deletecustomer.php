<?php require('dbconfig.php'); ?>
<html>
<head>
<titleลบข้อมูลลูกค้า</title>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM customers WHERE cid=$id";
$result = mysqli_query($cnn,$sql);
$oldcustomer = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['delete'])) {




  $sql = "DELETE FROM customers  WHERE cid=$id";
  mysqli_query($cnn,$sql);
  header('location:customer.php');

}

?>
<div class="container">
<div class="page-header"><h1>ลบข้อมูลลูกค้า ID : <?php echo $id;?></h1> </div>
<h3>แน่ใจแล้วใช่มั๊ยที่จะลบข้อมูลของ <?php echo $oldcustomer[0]['fullname'];?> ออกจากระบบ ?</h3>
<form action="" method="post" class="">
<button type="submit" class="btn btn-danger btn-lg" name="delete"><span class="glyphicon glyphicon-remove-circle"></span> ลบข้อมูล</button>
</form>
<button class="btn btn-default btn-lg" onclick="window.location.href='customer.php'">ยกเลิก</button>

</div>
</body>
</html>
