<?php
require_once __DIR__."/../../controller/MemberController.controller.php";

$user_name=$_GET['user_name'];
$member = new MemberController();
$member->AcceptRequest($user_name);
?>