<?php require('dbconfig.php'); ?>
<html>
<head>
<title>ข้อมูลลูกค้า</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
</head>
<body>
<div class="container">
<div class="page-header"><h1><span class="glyphicon glyphicon-user"></span> ข้อมูลลูกค้า</h1></div>
<button onclick="window.location.href='addcustomer.php';" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูล </button>
<br><br>
<table class="table table-striped">
  <tr>
    <th>#</th>
    <th>ชื่อ-สกุล</th>
    <th>ชื่อผู้ใช้</th>
    <th>อีเมล</th>
    <th>เบอร์โทร</th>
    <th>จังหวัด</th>
    <th>MENU</th>
  </tr>
<?php
  $sql = "SELECT * FROM customers LEFT JOIN provinces ON (customers.province = provinces.pid)";
  $result = mysqli_query ($cnn ,$sql);
  $customers = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $i = 1;
 foreach ($customers as $customer) {
    echo '<tr>';
    echo '<td>'.  $i.  '</td>';
    echo '<td>'. $customer['fullname'] . '</td>';
    echo '<td>'. $customer['username'] . '</td>';
    echo '<td>'. $customer['email'] . '</td>';
    echo '<td>'. $customer['tel'] . '</td>';
    echo '<td>'. $customer['pname'] . '</td>';
    echo '<td><a href="editcustomer.php?id='. $customer['cid'] .'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> แก้ไข</button></a>';
    echo '&nbsp;<a href="deletecustomer.php?id='. $customer['cid'] .'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> ลบ</button></a></td>';
    echo '</tr>';
    $i++;
  }
?>

</table>

<center><h3><a href="index.php">กลับสู่เมนู</a></h3></center>

</div>
</body>
</html>
