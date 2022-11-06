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
    $id=$_GET['id'];
?>
<?php
    $sql=($conn->query("DELETE FROM sinhvien WHERE masv='$id'"));
    header("location:Display.php");
?>