<?php


session_start();
//$_SESSION['sendername']


require_once __DIR__."/../../controller/notificationcontroller.php";
$sendername=$_SESSION['sendername'];
$receiverlist=  $_POST['list'];
$title=  $_POST['title'];
$message=  $_POST['message'];


$notification = new NotificationController();
$notification->adminsendmessage($sendername,$receiverlist,$title,$message);



?>