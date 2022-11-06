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
<!-- Connect with mysql  -->
<?php
    $conn=mysqli_connect("localhost","root","","qlsv1");
    if(!$conn){
        echo('Connect is fail');

    }else{
        echo('Connect is Succesfully');
    }

?>
<!-- Input my sql  -->

<?php
     if(isset($_POST['Add'])){
        $msv=$_POST['msv'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        if($conn->query("INSERT INTO sinhvien1 (masv,hoten,quequan,phone) VALUES ('$msv','$name','$address','$phone')")){
            echo('Add to succes');

        }else{
            echo('Add to fail');
        }
    }
    




?>
    <div class="container">
    <h1 >Form Logins</h1>
    <form action="" method='post'>
    <div class="form-group">
      <label for="msv">Mã Sinh Viên</label>
      <input type="msv" class="form-control" id="msv" placeholder="Enter Mã Sinh Viên" name="msv">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="address">address</label>
      <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
    </div>
    <button type="submit" class="btn-success" name="Add">Submit</button>
    <button type="reset" class="btn-danger" name="reset">Reset</button>
  </form>
    </div>
    
</body>
</html>