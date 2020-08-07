<?php

session_start();
require_once __DIR__."/../../controller/sportcontroller.php";
$data=$_SESSION['data'];
$sport = new SportController();
$sport->deletesport($data['name']);







?>