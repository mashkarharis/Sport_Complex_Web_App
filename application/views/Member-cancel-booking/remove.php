<?php

session_start();
require_once __DIR__."/../../controller/bookingcontroller.php";




$uname = $_SESSION['uname']; 
$date =  date("Y-m-d", strtotime($_POST['Date']));
$time = $_POST['Time'];
echo($date.'\n');
$lasttimes=(date('H:i',strtotime('+'.$time.' hour',strtotime('00:00')))."-".date('H:i',strtotime('+'.($time+1).' hour',strtotime('00:00'))));
echo($lasttimes.'\n');
$booking = new bookingcontroller();
$booking->removebookingbymember($uname,$date,$lasttimes);



?>