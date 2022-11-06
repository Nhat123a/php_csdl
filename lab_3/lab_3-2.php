<?php
    $conn=mysqli_connect("localhost","root","","qlkh");
    if(!$conn){
        echo("Connect is fail");
    }else{
        echo("Connect is suceesfully");
    }
?>
<?php
    $sql=($conn->query("SELECT * FROM  `khachhang` WHERE `khachhang`.`quequan`='Nam Định' "))


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container h2{
            text-align: center;
        }
        .container table{
            border-collapse: collapse;
            height: 70px;
            width: 50%;
            text-align: center;   
            margin: 0 auto;
        }
        .container table thead th{
            height: 40px;
        }
        .container table tbody td{
            height: 40px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>CHECK THÔNG TIN KHÁCH HÀNG</h2>
        <table border="2">
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Họ và tên</th>
                    <th>Quê Quán</th>
                    <th>Email</th>
                    <th>Món Ăn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                        <td><?php echo $row['mkh'];?></td>
                        <td><?php echo $row['hoten'];?></td>
                        <td><?php echo $row['quequan'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['monan'];?></td>
                        
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>