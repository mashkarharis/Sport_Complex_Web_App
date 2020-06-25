<?php
require_once "timeSlot.php";
require_once __DIR__."/../../controller/bookingcontroller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>MyCal</title>
</head>
<body>

    <?php
    if(isset($_GET['date'])){
        $date=$_GET['date'];
        $sport=$_GET['sportname'];
        $dayname=$_GET['dayname'];
        $uname=$_GET['uname'];
    }
    
    if(isset($_POST['submit'])){
        $timeslot=$_POST['timeslot'];
        $uname=$_POST['uname'];
        $date=$_POST['date'];
        $sport=$_POST['sport'];
        
        $book=new bookingcontroller();
        $msg=$book->makeBook($uname,$date,$timeslot,$sport);
        echo $msg;
        
    }
    $timeslot=new TimeSlot();
    $timeslot->viewSlots($date,$sport,$dayname,$uname);
    ?>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</body>
</html>