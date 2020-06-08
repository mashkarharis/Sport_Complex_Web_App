<?php


session_start();
require_once __DIR__."/../../controller/MemberController.controller.php";

$member = new MemberController();
$member->printmydetails($_SESSION['name']);



?>