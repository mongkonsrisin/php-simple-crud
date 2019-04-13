<?php require('dbconfig.php'); ?>
<html>
<head>
<title>แก้ไขข้อมูลลูกค้า</title>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
$id = $_GET['id'];

$provincesql = "SELECT * FROM provinces";
$provinceresult = mysqli_query($cnn,$provincesql);
$provinces = mysqli_fetch_all($provinceresult,MYSQLI_ASSOC);


$sql = "SELECT * FROM customers WHERE cid=$id";
$result = mysqli_query($cnn,$sql);
$oldcustomer = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['edit'])) {




  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $province = $_POST['province'];

  $sql = "UPDATE customers SET fullname='$fullname' , username='$username' ,  email='$email' , tel='$tel' , province='$province' WHERE cid=$id";
  mysqli_query($cnn,$sql);
  header('location:customer.php');

}

?>
<div class="container">
<div class="page-header"><h1>แก้ไขข้อมูลลูกค้า ID : <?php echo $id;?></h1> </div>
<form action="" method="post" class="">

  <div class="form-group">
    <label>ID :</label>
    <input type="text" class="form-control" name="fullname" value="<?php echo $oldcustomer[0]['cid']; ?>" disabled>
  </div>


  <div class="form-group">
    <label>Full Name :</label>
    <input type="text" class="form-control" name="fullname" value="<?php echo $oldcustomer[0]['fullname']; ?>">
  </div>

  <div class="form-group">
     <label>Username :</label>
     <input type="text" class="form-control" name="username" value="<?php echo $oldcustomer[0]['username']; ?>">
   </div>



  <div class="form-group">
    <label>E-mail :</label>
    <input type="text" class="form-control" name="email" value="<?php echo $oldcustomer[0]['email']; ?>">
  </div>

  <div class="form-group">
    <label>Tel :</label>
    <input type="text" class="form-control" name="tel" value="<?php echo $oldcustomer[0]['tel']; ?>">
  </div>

  <div class="form-group">
  <label>Province :</label>

  <select class="form-control" name="province">
  <?php
  foreach ($provinces as $province) {
        if ($oldcustomer[0]['province'] == $province['pid']) {
        echo '<option value="' . $province['pid'] . '" selected>' . $province['pname'] . "</option>";
      } else {
        echo '<option value="' . $province['pid'] . '">' . $province['pname'] . "</option>";
      }
  }
  ?>
  </select>

  </div>

        <button type="submit" class="btn btn-success btn-lg" name="edit"><span class="glyphicon  glyphicon-floppy-disk"></span> บันทึก</button>
                      </form>

                        </div>

</body>
</html>
