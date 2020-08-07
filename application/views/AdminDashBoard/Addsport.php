<?php
session_start();
require_once __DIR__."/../../controller/urlcontroller.php";
$url = new URLController();
$url->AddSport();



?>