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

$sql = "SELECT * FROM provinces WHERE pid=$id";
$result = mysqli_query($cnn,$sql);
$oldprovince = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['delete'])) {




  $sql = "DELETE FROM provinces  WHERE pid=$id";
  mysqli_query($cnn,$sql);
  header('location:province.php');

}

?>
<div class="container">
<div class="page-header"><h1>ลบข้อมูลจังหวัด ID : <?php echo $id;?></h1> </div>
<h3>แน่ใจแล้วใช่มั๊ยที่จะลบ <?php echo $oldprovince[0]['pname'];?> ออกจากระบบ ?</h3>
<br>
<form action="" method="post" class="">
<button type="submit" class="btn btn-danger btn-lg" name="delete"><span class="glyphicon glyphicon-remove-circle"></span> ลบข้อมูล</button>
</form>
<button class="btn btn-default btn-lg" onclick="window.location.href='province.php'">ยกเลิก</button>
</div>
</body>
</html>
