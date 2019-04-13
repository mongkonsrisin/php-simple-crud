<?php require('dbconfig.php'); ?>
<html>
<head>
<title>ข้อมูลจังหวัด</title>
<meta charset="UTF-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$sql = "SELECT * FROM provinces";
$result = mysqli_query($cnn,$sql);
$count = mysqli_num_rows($result);
$count = ceil($count/10);


$page = $_GET['page'];
if(!isset($_GET['page'])) {
  header('location:province.php?page=1');
}
$start = ($page - 1) * 10;


 ?>

  <div class="container">

    <div class="page-header">
       <h1><span class="glyphicon glyphicon-map-marker"></span> ข้อมูลจังหวัด</h1>

     </div>
     <button class="btn btn-success btn-lg" onclick="window.location.href='addprovince.php';"> <span class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูล </button>
<br><br>
     <table class="table table-striped">
  <tr>
    <th width="200">ID</th>
    <th width="600">ชื่อจังหวัด</th>
    <th>เมนู</th>
</tr>
<?php
$sql    = "SELECT * FROM provinces LIMIT $start , 10";

  $result = mysqli_query($cnn, $sql);

foreach ($result as $province) {

    echo '<tr>';
    echo '<td width="200">' . $province['pid'] . '</td>';
    echo '<td width="600">' . $province['pname'] . '</td>';
    echo '<td><a href="editprovince.php?id='. $province['pid'] .'"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> แก้ไข</button></a>';
    echo '&nbsp;<a href="deleteprovince.php?id='. $province['pid'] .'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> ลบ</button></a></td>';
    echo '</tr>';
}
?>
</table>
<center>
<ul class="pagination">


<?php
for ($i = 1; $i <= $count; $i++) {
        if($i == $page) {
        echo "<li class='active'><a href='?page=" . $i . "'>" . $i . "</a></li>";
      } else {
        echo "<li><a href='?page=" . $i . "'>" . $i . "</a></li>";
      }
}
?>
</ul>
</center>
<center><h3><a href="index.php">กลับสู่เมนู</a></h3></center>

</div>
</body>
</html>
