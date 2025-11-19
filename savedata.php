<?php  
if($_SERVER["REQUEST_METHOD"]=="POST"){
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$slass=$_POST['sclass'];
$sphone=$_POST['sphone'];
}

$conn=mysqli_connect("localhost","root","","crud");
if(!$conn){
    echo "not connectd succesfuly ".mysqli_error();
}
else{
    echo "connected succesfullly";

    }
    
    $sql="INSERT INTO  student(sname,sclass,sphone) VALUES('{$sname}','{$slass}','{$sphone}')";
    $result=mysqli_query($conn,$sql) or die("not succesful");
    header("Location:index.php");
 mysqli_close($conn);
?>