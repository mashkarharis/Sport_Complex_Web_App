<?php

require_once __DIR__."/../../controller/membercontroller.controller.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    
    $uname=$_POST['uname'];
    $password=($_POST['password']);
    
    $membercontroller = new MemberController();
    $membercontroller->gotodashboard($uname,$password);
    
  
 }

?>