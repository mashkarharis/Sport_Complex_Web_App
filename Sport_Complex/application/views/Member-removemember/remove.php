<?php


require_once __DIR__."/../../controller/MemberController.php";

$uname =  $_POST['uname']; 

$member = new MemberController();
$member->removedetails($uname);



?>