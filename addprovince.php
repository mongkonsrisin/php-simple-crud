<?php require('dbconfig.php'); ?>

<html>
<head>
  <title>เพิ่มข้อมูลจังหวัด</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container">
  <div class="page-header"><h1>เพิ่มข้อมูลจังหวัด</h1> </div>

<?php
if (isset($_POST['save'])) {

  $pid = trim($_POST['pid']);
  $pname = trim($_POST['pname']);

  if (empty($pid) || empty($pname)) {
    $msg = '<div class="alert alert-danger"><strong>กรอกข้อมูลไม่ครบจ้าาา</strong></div>';
  } else {
    $sql = "INSERT INTO provinces VALUES('$pid' , '$pname')";
    mysqli_query($cnn,$sql);
    header('location:province.php');
  }
}
?>
<?php if(isset($msg)) {echo $msg; } ?>
<form action="" method="post">
  <div class="form-group">
    <label>ID :</label>
    <input type="text" class="form-control" name="pid" value="">
  </div>

  <div class="form-group">
     <label>ชื่อจังหวัด :</label>
     <input type="text" class="form-control" name="pname" value="">
   </div>
   <button type="submit" class="btn btn-success btn-lg" name="save"><span class="glyphicon  glyphicon-floppy-disk"></span> บันทึก</button>



</form>
</div>
</body>
</html>
