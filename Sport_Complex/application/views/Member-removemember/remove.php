<?php


require_once __DIR__."/../../controller/MemberController.controller.php";

$uname =  $_POST['uname']; 

$member = new MemberController();
$member->removedetails($uname);



?>