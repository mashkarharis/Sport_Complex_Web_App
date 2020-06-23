<?php


session_start();
require_once __DIR__."/../../controller/MemberController.php";

$member = new MemberController();
$member->printmydetails($_SESSION['name']);



?>