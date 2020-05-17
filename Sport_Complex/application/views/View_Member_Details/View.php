<?php
session_start();
// <?php echo $_SESSION[''] $_SESSION['231nic']=$data[0];
// $_SESSION['231fname']=$data[1];
// $_SESSION['231lname']=$data[2];
// $_SESSION['231uname']=$data[3];
// $_SESSION['231profilepic']=$data[4];
// $_SESSION['231email']=$data[5];
// $_SESSION['231mobile']=$data[6];
// $_SESSION['231password']=$data[7];
// $_SESSION['231privilege']=$data[8];
// $_SESSION['231status']=$data[9];
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Member Details</title>
    <link rel="stylesheet" href="Style.css" type="text/css">
   
</head>
<body>
    <div class="Main">
    <ul>
        <li><a herf="logout.php">Logout</a></li>
        <li><a herf="#">Go Back</a></li>
    </ul>
    </div>
    <h1>View/Edit My Details</h1>
    <div class="register">
    <form method="POST" id="register" action="">
    <label>NIC No</label><br>
    <input type="text" class="searchbox" value="<?php echo $_SESSION['231nic'] ?>" name="id" id="name" placeholder="NIC No" readonly/>
    <br><br>
    <label>User Name</label><br>
    <input type="text" name="Fname" id="name"  value="<?php echo $_SESSION['231uname'] ?>" readonly/><br><br>
    <label>First Name</label><br>
    <input type="text" name="Lname" id="name"  value="<?php echo $_SESSION['231fname'] ?>" readonly/><br><br> 
    <label>Last Name</label><br>
    <input type="text" name="Age" id="name"  value="<?php echo $_SESSION['231lname'] ?>" readonly/><br><br>
    <label>Email</label><br>
    <input type="text" name="Address"  id="name"  value="<?php echo $_SESSION['231email'] ?>" readonly/><br><br>
    <label>Mobile</label><br>
    <input type="text" name="Gender"  id="name"  value="<?php echo $_SESSION['231mobile'] ?>" readonly/><br><br>
    <label>Password</label><br>
    <input type="text" name="Email"  id="name"  value="<?php echo $_SESSION['231password'] ?>" readonly/><br><br>
    <label>Privilege</label><br>
    <input type="text" name="Mobile"  id="name"  value="<?php echo $_SESSION['231privilege'] ?>" readonly/><br><br>
    <label>Status</label><br>
    <input type="text" name="Sports"  id="name"  value="<?php echo $_SESSION['231status'] ?>" readonly/><br><br>
        <ul1><li><a herf="#">Update</a></li></ul1>
    </form>
</div>
</body>
</html>