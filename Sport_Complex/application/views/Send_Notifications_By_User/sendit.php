<?php


session_start();
//$_SESSION['sendername']


require_once __DIR__."/../../controller/notificationcontroller.php";
require_once __DIR__."/../../controller/MemberController.php";

$member = new MemberController();
$sendername=$_SESSION['sendername'];
$data=$member->getalladmindata();
$receiverlist=array();
foreach ($data as $admin) {
    array_push($receiverlist,$admin['uname']);
}
$title=  $_POST['title'];
$message=  $_POST['message'];


$notification = new NotificationController();
$notification->membersendmessage($sendername,$receiverlist,$title,$message);



?>