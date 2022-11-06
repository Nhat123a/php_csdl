<?php
    $conn = mysqli_connect("localhost","root","","qlgv");
    if(!$conn){
        echo("Connect is fail");
    }else{
        echo("Connect is sucessfully");
    }
?>
<?php
    if(isset($_POST['Add'])){
        $mgv=$_POST['mgv'];
        $hoten=$_POST['hoten'];
        $quequan=$_POST['quequan'];
        $email=$_POST['email'];
        if($conn->query("INSERT INTO giaovien (mgv,hoten,quequan,email) VALUES ('$mgv','$hoten','$quequan','$email')"))
        {
            echo "<script>alert('Add to succes')</script>";
        }else{
            echo"<script>alert('Add to Fail')</script>";
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
</head>
<style>
    *,
    ::before
    ::after{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        width: 500px;
        height: 600px;
        border: 1px solid red;
        margin: 0 auto;
        position: relative;
        background-image: linear-gradient(#12c2e9, #c471ed, #f64f59);
        border-radius: 10px;
        border: none;
    }
    .login_label{
        display: inline-block;
        font-weight: bold;
        margin: 5px;
        
    }
    
    #mgv,#hoten,#quequan,#email{
        display: block;
        width: 50%;
        height: 40px;
        margin: 5px 10px;
        border-radius: 5px;
        border: 1px solid gray;
        font-size: 16px;
        font-style: italic;
    }
    .container h2{
        padding: 10px;
        text-align: center;
        font-family: serif;
        margin: 0 auto;
        color:#0033CC;  
        text-shadow: 3px 3px 4px white;
        letter-spacing: 2px;
        font-size: 34px;
        font-weight: bold;
    }
    .btn{
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%,-50%);
    
        
        
    }
    .btn .btn_1{
        height: 40px;
        width: 100px;
        border-radius: 5px;
        border: none;
        background-color: #00FF00;
        color: black;
        font-size: 14px;
        margin: 10px;
    }
    .btn .btn_2{
        height: 40px;
        width: 100px;
        border-radius: 5px;
        border: none;
        background-color: red;
        color: black;
        font-size: 14px;
    }
    
    
</style>
<body>
    <div class="container">
        <h2>FORM LOGIN</h2>
        <form action="" method="post"> 
            <label for="mgv" class="login_label">Mã Giáo Viên</label>
            <input type="mgv" name="mgv" id="mgv" placeholder="Nhập mã giáo viên">
            <label for="hoten" class="login_label">Họ và tên</label>
            <input type="hoten" name="hoten" id="hoten" placeholder="Nhập mã họ tên">
            <label for="quequan" class="login_label">Quê Quán</label>
            <input type="quequan" name="quequan" id="quequan" placeholder="Nhập quê quán">
            <label for="email"class="login_label">Email</label>
            <input type="email" name="email" id="email" placeholder="Nhập email">
            <div class="btn">
                <button class="btn_1" name="Add">Submit</button>
                <button class="btn_2">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>