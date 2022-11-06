<?php
    $conn=mysqli_connect("localhost","root","","thongtin");
    if(!$conn){
        echo('Kết Nối thất Bại');
    }else{
        echo('Kết Nối thành Công đến database');
    }
?>
<?php
    if(isset($_POST['add'])){
        $ten=$_POST['ten'];
        $quequan=$_POST['quequan'];
        $gioitinhr=$_POST['gioitinh'];
        if($conn->query("INSERT INTO form (ten,quequan,gioitinh) VALUES ('$ten','$quequan','$gioitinhr')")){
            echo('Add to suuces');
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
        form{
            width: 50%;
            height: 300px;
            border:1px solid black;
            margin:0 auto;
        }
        .form_1{
            margin:20px 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="form_1">
            <label for="">Full Name</label>
            <input type="text" name="ten" id="name"><br><br>
            <label for="">City</label>
            <select name="quequan" id="">
                <option value="Hà Nội" name="quequan">Hà Nội</option>
                <option value="Hà Nam" name="quequan">Hà nam</option>
                <option value="Hà Tây" name="quequan">Hà tây</option>
            </select><br> <br>
            <label for="">Gender</label>
            <input type="radio" name="gioitinh" id="gioitinh" value="Nam">Nam <input type="radio" name="gioitinh" id="gioitinh" value="Nữ">Nữ <br><br>
            <button name="add">Search</button>
        </div>
    </form>
</body>
</html>
