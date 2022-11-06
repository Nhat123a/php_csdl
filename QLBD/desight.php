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
    if(isset($_POST['add'])){
        $mact=$_POST['mact'];
        $tenct=$_POST['tenct'];
        $namsinh=$_POST['namsinh'];
        $quequan=$_POST['quequan'];
        if($conn->query("INSERT INTO cauthu(mact,tenct,namsinh,quequan) VALUES  ('$mact','$tenct','$namsinh','$quequan')")){
            echo('Add to succes');

        }else{
            echo('Add to fail');
        }
    }
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
            padding: 0;
            box-sizing: border-box;
        }
        html{
            height: 100%;
        }
        body{
            background-image: linear-gradient(#12c2e9, #c471ed, #f64f59);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
        }
        form{
            width: 450px;
            height: 450px;
            border:none;
            margin:0 auto;
            border-radius: 20px;
            position: relative;
            top: 50px;
            background-color: #fff;
            box-shadow: 2px 2px 2px 2px #FFFFFF;
            opacity: 0.9;
            
        }
        .container h1{
            text-align: center;
            margin-top: -5px;
        }
        .container form{
            padding: 30px 40px;
        }
        .container label{
            display:inline-block;
            margin: 5px;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .container input{
            display:block;
            width: 300px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid black;
            opacity: 0.7;
        }
        .container input:hover{
            border: 1px solid blue;
        }
        .container input::placeholder{
            font-size: 0.9rem;
            opacity: none;
        }
        .btn{
            position: relative;
            
        }
        .btn button{
            height: 40px;
            width: 100px;
            margin: 35px 5px ;
            border-radius: 20px;
            border: none;
            color: #fff;
            background-color: #FF6800;
            font-size: 1rem;
            text-align: center;
        }
        .btn button:hover{
            background-color: #fff;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
            <form action="" method="post">
                <h1>Thông Tin Cầu thủ</h1>
                <label for="mact">Mã cầu Thủ</label>
                <input type="text" name="mact" id="mact" placeholder="Nhập mã cầu thủ">
                <label for="tenct">Tên cầu thủ</label>
                <input type="text" name="tenct" id="tenct"placeholder="Nhập tên cầu thủ">
                <label for="namsinh">Năm Sinh</label>
                <input type="text" name="namsinh" id="namsinh"placeholder="Nhập năm sinh">
                <label for="quequan">Quê Quán</label>
                <input type="text" name="quequan" id="quequan"placeholder="Nhập quê quán">
                <div class="btn">
                    <button name="add">Submit</button>
                    <button>Search</button>
                </div>
            </form>
    </div>
</body>
</html>