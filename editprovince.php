<?php require('dbconfig.php'); ?>

<html>
<head>
  <title>แก้ไขข้อมูลจังหวัด</title>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <?php
  $id = $_GET['id'];


  $sql = "SELECT * FROM provinces WHERE pid=$id";
  $result = mysqli_query($cnn,$sql);
  $oldprovince = mysqli_fetch_all($result,MYSQLI_ASSOC);

  if (isset($_POST['edit'])) {

    $pid = $_POST['pid'];
    $pname = $_POST['pname'];

    $sql = "UPDATE provinces SET pid='$pid' , pname='$pname' WHERE pid='$id'";
    mysqli_query($cnn,$sql);
    header('location:province.php');


  }
  ?>
  <div class="container">
  <div class="page-header"><h1>แก้ไขข้อมูลจังหวัด ID : <?php echo $id; ?></h1> </div>


<form action="" method="post">
  <div class="form-group">
    <label>ID :</label>
    <input type="text" class="form-control" name="pid" value="<?php echo $oldprovince[0]['pid']; ?>">
  </div>

  <div class="form-group">
     <label>ชื่อจังหวัด :</label>
     <input type="text" class="form-control" name="pname" value="<?php echo $oldprovince[0]['pname']; ?>">
   </div>
   <button type="submit" class="btn btn-success btn-lg" name="edit"><span class="glyphicon  glyphicon-floppy-disk"></span> บันทึก</button>



</form>
</div>
</body>
</html>
