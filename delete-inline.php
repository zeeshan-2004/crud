<?php
include "connection.php";
$stu_id=$_GET["id"];
$sql="DELETE from student where sid= {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
header("Location:http://localhost/crud-practice/index.php");
mysqli_close($conn);
?>