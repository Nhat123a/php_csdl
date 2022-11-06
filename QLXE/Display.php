<!-- Kết nối tới csdl  -->
<?php
    $conn=mysqli_connect("localhost","root","","qlxe");
    if(!$conn){
        echo('Kết Nối Thất bại');
    }else{
        echo('Kết Nối Thành Công');
    }
?>
<?php
    $sql=$conn->query("SELECT*FROM `xemay` WHERE `xemay`.`gia`>=90000000 ")


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
            width: 70%;
            height: 150px;
            margin: 0 auto;
            position: relative;
            top: 20px;
            
        }
        .container table tr{
            height: 50px;
        }
        .container table tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }
         table td,th{
            text-align: center;
            font-size: 1rem;
            border:1px solid black;
         
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin Xe máy </h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Mã xe máy</th>
                        <th>Tên xe máy</th>
                        <th>Nhà sản xuất</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r=mysqli_fetch_assoc($sql)){
                    ?>
                        <tr>
                            <td><?php echo $r['maxe'];?></td>
                            <td><?php echo $r['tenxe'];?></td>
                            <td><?php echo $r['nhasx'];?></td>
                            <td><?php echo $r['gia'];?></td>
                        </tr>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
    </div>
</body>
</html>