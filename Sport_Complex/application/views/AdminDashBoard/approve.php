<?php


session_start();
$_SESSION['name']=$_SESSION['name'];
require_once __DIR__."/../../controller/MemberController.controller.php";

$member = new MemberController();
$member->approve();




?>