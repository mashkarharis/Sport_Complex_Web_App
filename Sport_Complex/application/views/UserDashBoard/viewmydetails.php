<?php

session_start();
require_once __DIR__."/../../controller/MemberController.php";

$member = new MemberController();
$member->viewmydetails($_SESSION['name']);



?>