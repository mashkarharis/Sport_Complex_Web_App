<?php


require_once __DIR__."/../../controller/sportcontroller.php";

$sname =  $_POST['sname']; 

$sport = new SportController();
$sport->removedetails($sname);



?>