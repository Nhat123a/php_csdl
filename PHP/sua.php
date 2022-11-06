<?php 
// Connect with msql
    $conn = mysqli_connect("localhost", "root", "", "qlsv");
    if(!$conn){
        echo("Connect is fail");
    
    }else{
        echo("Connect is succesfully");
        
}
?>
