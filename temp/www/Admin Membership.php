
 <? echo ‘<link href=”PATH/Style.css”  media="" >’ ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Member Details</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
   
</head>
<body>
    <div class="Main">
    <ul>
        <li><a herf="#">Logout</a></li>
        <li><a herf="#">Main Menu</a></li>
    </ul>
    </div>
    <h1>View Member Details</h1>
    <div class="register">
    <form method="POST" id="register" action="">
    <label>NIC No</label><br>
    <input type="text" class="searchbox" name="id" id="name" placeholder="NIC No"/>
    <input type="submit" class="searchbtn" name="search" id="searchbtn" value="View" /><br><br>

    <?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="Sandu1117@Karu";
$dbName="details";
$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

if(isset($_POST['search'])){
    $id = $_POST['id']; 
    $sql = "SELECT*FROM new_table WHERE nic LIKE  '%$id%' LIMIT 1";
    $res=$conn->query($sql);
if(!$res){
    die("Query Failed");
}

if(mysqli_num_rows($res) > 0){

    while($row=mysqli_fetch_array($res)){
    ?>
    <label>First Name</label><br>
    <input type="text" name="Fname" id="name" value="<?php echo $row['fname']?>"/><br><br>
    <label>Last Name</label><br>
    <input type="text" name="Lname" id="name" value="<?php echo $row['lname']?>"/><br><br> 
    <label>NIC No</label><br>
        <input type="text" name="Nicno" id="name" value="<?php echo $row['nic']?>"/><br><br> 
        <label>Age</label><br>
        <input type="text" name="Age" id="name" value="<?php echo $row['age']?>"/><br><br>
        <label>Address</label><br>
        <input type="text" name="Address"  id="name" value="<?php echo $row['address']?>"/><br><br>
        <label>Gender</label><br>
        <input type="text" name="Gender"  id="name" value="<?php echo $row['gender']?>"/><br><br>
        <label>Email</label><br>
        <input type="text" name="Email"  id="name" value="<?php echo $row['email']?>"/><br><br>
        <label>Mobile No</label><br>
        <input type="text" name="Mobile"  id="name" value="<?php echo $row['moile']?>"/><br><br>
        <label>Engaged Sports</label><br>
        <input type="text" name="Sports"  id="name" value="<?php echo $row['sports']?>"/><br><br>
        <ul1><li><a herf="#">Print</a></li></ul1>
    <?php
    }
}
else{
    die("NIC No does not exist!");
 }
}
?>   
   
<?php
    mysqli_close($conn);
?>
</form>
    </div>
</body>
</html>