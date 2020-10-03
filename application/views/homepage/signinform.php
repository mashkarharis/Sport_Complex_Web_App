<?php

require_once __DIR__."/../../controller/membercontroller.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    
    $uname=$_POST['uname'];
    $password=md5($_POST['password']);
    
    $membercontroller = new MemberController();
    $membercontroller->gotodashboard($uname,$password);
    
  
 }

?>