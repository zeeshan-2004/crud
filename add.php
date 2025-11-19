<?php  include "header.php"; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname"/>
        </div>
        <div class="form-group">
            <label>ID</label>
            <input type="number" name="sid"/>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
<?php

include 'connection.php';
    
    $sql="select*from stdclass";
    $result=mysqli_query($conn,$sql) or die("not succesful");
    while($row=mysqli_fetch_assoc($result)){
      
   
?>
<option value="<?php echo $row['cid'];?>"><?php echo $row["cname"] ;?></option>
<?php  } ?>
  </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="sphone"/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>
</div>
</body>
</html>
