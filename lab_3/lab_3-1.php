<?php
    $conn=mysqli_connect("localhost","root","","qlkh");
    if(!$conn){
        echo("Connect is fail");
    }else{
        echo("Connect is suceesfully");
    }
?>

<?php
    if(isset($_POST['Add'])){
        $mkh=$_POST['mkh'];
        $hoten=$_POST['hoten'];
        $quequan=$_POST['quequan'];
        $email=$_POST['email'];
        $monan=$_POST['monan'];
        if($conn->query("INSERT INTO khachhang(mkh,hoten,quequan,email,monan) VALUES ('$mkh','$hoten','$quequan','$email','$monan')")){
            echo("Add to sucess");
        }else{
            echo("Add to fail");
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
        .container form{
            width: 50%;
            height: 600px;
            border: 1px solid red;
            margin: 0 auto;
            position: relative;
            border-radius: 5px 30px;
            border: 1px solid gray;
            background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%) ;
            
        }
        .container form h3{
            text-align: center;
            font-size: 18px;
        }
        .container form label{
            display: inline-block;
            margin-left: 10px;
            font-size: 18px ;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .container form input{
            display:block;
            width: 50%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid gray;
            margin-left: 20px;
            padding: 10px ;
            margin-top: 5px;
            font-style: italic;
        }
        .container form .btn-1{
            width: 100px;
            height: 50px;
            border-radius: 5px;
            border:1px solid gray;
            background-color: #00FF00;
            position: absolute;
            left:10% ;
            bottom:10%;
            font-weight: bold;
            
        }
        .container form .btn-2{
            width: 100px;
            height: 50px;
            border-radius: 5px;
            border:1px solid gray;
            background-color: #FF0000;
            position: absolute;
            right:50%;
            bottom:10%;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h3>THÔNG TIN KHÁCH HÀNG</h3>
            <label for="mkh">Mã khách hàng</label>
            <input type="text" name="mkh" id="mkh" placeholder="Nhập mã khách hàng">
            <label for="hoten">Họ Tên</label>
            <input type="text" name="hoten" id="hoten" placeholder="Nhập Họ tên">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Nhập Email">
            <label for="monan">Món Ăn</label>
            <input type="text" name="monan" id="monan" placeholder="Nhập Món Ăn">
            <label for="quequan">Quê Quán</label>
            <input type="text" name="quequan" id="quequan" placeholder="Nhập Quê Quán">
            <button type="submit" name="Add" class="btn-1">Submit</button>
            <button type="reset" class="btn-2">Reset</button>
        </form>
    </div>
</body>
</html>