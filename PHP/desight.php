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
    if(isset($_POST['Add'])){
        // $msv = $_POST['msv'];
        $hoten = $_POST['hoten'];
        $quequan = $_POST['quequan'];
        $email = $_POST['email'];
        if($conn->query("INSERT INTO sinhvien (hoten,quequan,email) VALUES ('$hoten','$quequan','$email')")){
            echo "<script>alert('Add to sucessfully')</script>";
        }else{
            echo "<script>alert('Add to fail')</script>";
        }
    }
?>

<div class="container">
  <h2>Form Đăng Nhập Thông Tin Sinh Viên</h2>
  <form action="" method="post">
        <div class="form-group">
            <label for="msv">Mã Sinh Viên </label>
            <input type="msv" class="form-control" id="msvl" placeholder="Nhập mã sinh viên" name="msv">
        </div>
        <div class="form-group">
            <label for="hoten">Họ Tên</label>
            <input type="hoten" class="form-control" id="hoten" placeholder="Nhập Họ và tên" name="hoten">
        </div>
        <div class="form-group">
            <label for="quequan">Quê Quán</label>
            <input type="quequan" class="form-control" id="quequan" placeholder="Nhập que quan" name="quequan">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập Email sinh viên" name="email">
        </div>
        <!-- <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
        </div> -->
        <button type="them" class="btn btn-success" name="Add">Submit</button>
        <button type="nhaplai" class="btn btn-danger">Reset</button>
  </form>
</div>
</body>
</html>