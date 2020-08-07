<?php
session_start();
$_SESSION['sendername']=$_SESSION['name'];
require_once __DIR__."/../../controller/urlcontroller.php";

$url = new URLController();
$url->removebookingmember();

?>