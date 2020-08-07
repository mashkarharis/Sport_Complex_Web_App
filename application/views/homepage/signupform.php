<?php
require_once __DIR__."/../../controller/membercontroller.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $mobileno=$_POST['contact'];
  $password=$_POST['password'];
  $nid=$_POST['id'];

  $membercontroller = new MemberController();
  $membercontroller->signupmember($nid,$fname,$lname,$uname,$email,$mobileno,$password);


}

?>