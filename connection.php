<?php $conn=mysqli_connect("localhost","root","","crud");
if(!$conn){
    echo "not connectd succesfuly ".mysqli_error();
}
else{
    echo "connected succesfullly";

    }
    ?>