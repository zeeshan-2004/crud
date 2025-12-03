<?php
$conn=mysqli_connect("localhost","root","","ajax") or die("connection failed");
//read
$query="select*from students";
$query="delete from students where id=1 ";
$result=mysqli_query($conn,$query) or die("query failed");
if(mysqli_num_rows($result)>0){
    while( $row=mysqli_fetch_assoc($result))
    var_dump($row);
}
// for delete 
  $query="delete from students where id=7"; // for integer 
$name="zeeshan";
  $query="delete from students where `first-name`='$name'"; // for string 
  $result=mysqli_query($conn,$query) or die("query failed");
  if($result){
    echo"deleted";
  }
//delete
$query="update students set `first-name`='zeshan' where id=2";
$result=mysqli_query($conn,$query) or die("query failed");
if($result){
    echo"updated";
}
// create
$query="insert into students (id,`first-name`,`last-name`) values(1,'ali','hassan')";
$result=mysqli_query($conn,$query) or die("query failed");
if($result){
    echo"created";
}
?>