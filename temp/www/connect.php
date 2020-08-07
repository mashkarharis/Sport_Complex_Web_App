<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="Sandu1117@Karu";
$dbName="details";
$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);
if(mysqli_connect_errno()){ 
    die("Connection Failed!".mysqli_connect_error());
}
else{
    echo"Connected to database {$dbName}<br>";
}
?>
/*$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Nicno=$_POST['Nicno'];
$Age=$_POST['Age'];
$male=$_POST['male'];*/
<?php
if(isset($_POST["searchdata"])){
    $id=$_POST['id'];
    $sql="SELECT*FROM new_table";
    $res=mysqli_query($conn,$sql);
if(!$res){
    die("Query Failed");
}
while($row=mysqli_fetch_assoc($res)){
    ?>
    <form action="" method="POST">
        <input type="text" name="Fname" value="<?php echo $row['fname']?>"/>
        <input type="text" name="Lname" value="<?php echo $row['lname']?>"/>
        <input type="text" name="Nicno" value="<?php echo $row['nic']?>"/>
        <input type="text" name="Age" value="<?php echo $row['age']?>"/>
        <input type="text" name="Address" value="<?php echo $row['address']?>"/>
    </form>
    <?php
    //foreach($row as $key=>$val){
        //echo ucfirst($key).": {$val}<br>";
    //}
    //echo "<br /><hr /><br />";
}
}
?>
<?php
    mysqli_close($conn);
?>