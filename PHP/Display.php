<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php 
// Connect with msql
    $conn = mysqli_connect("localhost", "root", "", "qlsv");
    if(!$conn){
        echo("Connect is fail");
    
    }else{
        echo("Connect is succesfully");
        
}
?>
<?php
    $sql=$conn->query("SELECT * FROM `sinhvien` WHERE `sinhvien`.`quequan` = 'Nam Dinh';");

?>

    <div class="container">
    <table class="table table-bordered">
    <thead>
      <tr>
        <!-- <th>Mã Sinh Viên</th> -->
        <th>Họ Và Tên</th>
        <th>Quê Quán</th>
        <th>Email</th>
        <th>Tiện ích</th>


      </tr>
    </thead>
    
    <tbody>
    <?php 
    while($r = mysqli_fetch_assoc($sql)){
    ?>
      <tr>
        <td><?php echo $r['hoten'];?></td>
        <td><?php echo $r['quequan'];?></td>
        <td><?php echo $r['email'];?></td>
        <td><a href="sua.php?id=<?php echo $r['masv'];?>" class="btn btn-info">Sửa</a>
        <a href="xoa.php?id=<?php echo $r['masv'];?>" class="btn btn-danger">Xóa</a></td>
      </tr>
      <?php
    }
    ?>
      
      
    </tbody>
  </table>
    </div>
</body>
</html>

