<?php

session_start();
require_once __DIR__."/../../controller/MemberController.controller.php";

$member = new MemberController();
$member->deletemember($_SESSION['231uname']);







?>