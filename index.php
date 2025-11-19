<?php  
include "header.php";
$username="root";
$password="";
$servername="localhost";

$conn=mysqli_connect($servername,$username,$password,"crud");
if(!$conn){
    echo "not connectd succesfuly ".mysqli_error();
}
else{
    echo "connected succesfullly";

    
}
$sql="SELECT s1.cname,s.sid,s.sname,s.sphone FROM student AS s 
        INNER JOIN stdclass AS s1 
        ON s.sclass = s1.cid";
$result=mysqli_query($conn,$sql) or die("unsecsfull");//$result will now become as array after fetch from database 
if(mysqli_num_rows($result)>0){ ?>
<table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){ //this will fetch data from $result until not left 
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
            </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>


