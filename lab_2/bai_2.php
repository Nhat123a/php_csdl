
<?php
    $conn = mysqli_connect("localhost","root","","qlgv");
    if(!$conn){
        echo("Connect is fail");
    }else{
        echo("Connect is sucessfully");
    }   
?>
<?php
    $sql=$conn->query("SELECT* FROM `giaovien` WHERE `giaovien`.`quequan`='Nam Dinh'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table border="1">
                <tr>
                    <th>Mã Giáo viên</th>
                    <th>Họ Tên</th>
                    <th>Quê Quán</th>
                    <th>Email</th>
                </tr>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td><?php echo $row['mgv']; ?></td>
                    <td><?php echo $row['hoten']; ?></td>
                    <td><?php echo $row['quequan']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    
                </tr>
                <?php
                }
                
                
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>