<?php
include "header.php";

if(isset($_POST["delbtn"])){
include "connection.php";
$stu_id=$_POST["sid"];

$sql="DELETE from student where sid= {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
header("Location:http://localhost/crud-practice/index.php");
mysqli_close($conn);
}

?>
<div id="main-content">
    <h2>delete data</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>id</label>
            <input type="text" name="sid" >
     <div>
        <input class="submit" type="submit" name="delbtn" value="delete">
    </form>
    <div>
   </div>
</div>


