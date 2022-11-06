<?php
    $conn=mysqli_connect("localhost","root","","qlsv1");
    if(!$conn){
        echo('Connect is fail');

    }else{
        echo('Connect is Succesfully');
    }

?>
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
        $sql=$conn->query("SELECT * FROM `sinhvien1` WHERE `sinhvien1`.`quequan`='Hải Dương'");

    ?>
    <div class="container">
        <h2>Sinh Viên Có Quê Quán Ở Hải Dương</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã Sinh Viên</th>
        <th>Họ Và Tên</th>
        <th>Quê Quán</th>
        <th>Số Điện Thoại</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($row=mysqli_fetch_assoc($sql)){
    ?>
        <tr>
            <td><?php echo $row['masv'];?></td>
            <td><?php echo $row['hoten'];?></td>
            <td><?php echo $row['quequan'];?></td>
            <td><?php echo $row['phone'];?></td>
            
        </tr>
        <?php
        }
        ?>
      
    </tbody>
  </table>
    </div>
    
</body>
</html>