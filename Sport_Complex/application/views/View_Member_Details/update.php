<?php

require_once __DIR__."/../../controller/membercontroller.controller.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nic=$_POST['nic'];
    $uname=$_POST['uname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $privilege=$_POST['privilege'];
    $status=$_POST['status'];
    $profilepic="";
    
    
    $membercontroller = new MemberController();
    $membercontroller->updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status);
    
    
}


?>