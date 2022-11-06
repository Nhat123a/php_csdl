<!-- Kết nối tới csdl  -->
<?php
    $conn=mysqli_connect("localhost","root","","qlbd");
    if(!$conn){
        echo('Kết Nối Thất bại');
    }else{
        echo('Kết Nối Thành Công');
    }
?>
<?php
    $sql=$conn->query("SELECT * FROM cauthu WHERE (YEAR(CURDATE()) - YEAR(namsinh)) =18")


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0px;
            box-sizing: border-box;
        } 
        h1{
            text-align: center;
            margin: 20px;
        } 
        .container{
            max-width: 1068;
            

        }
        .container table{
            border-collapse: collapse;
            width: 50%;
            height: 70px;
            margin: 0 auto;
            position: relative;
            top: 20px;
            
        }
        .container table tr{
            height: 30px;
        }
        .container table td{
            text-align: center;
            font-size: 1rem;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin cầu thủ </h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Mã cầu thủ</th>
                        <th>Tên Cầu thủ</th>
                        <th>Năm sinh</th>
                        <th>Quê Quán</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r=mysqli_fetch_assoc($sql)){
                    ?>
                        <tr>
                            <td><?php echo $r['mact'];?></td>
                            <td><?php echo $r['tenct'];?></td>
                            <td><?php echo $r['namsinh'];?></td>
                            <td><?php echo $r['quequan'];?></td>
                        </tr>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
    </div>
</body>
</html>