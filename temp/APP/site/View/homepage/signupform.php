<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$password=md5($_POST['password']);
$nic=$_POST['nic'];
$email=$_POST['email'];
$contact=$_POST['contact'];




$user =new User($fname,$lname,$uname,$email,$nic,$contact,$password,'$profile_pic','$site');
$user->addUser();

echo " <script type='text/javascript'>
    alert('Membership request successfully sent! Thank you for joining us');
    </script>";
header("Location: index.php");




<?php
error_reporting(0);
include_once '../../../globalfunction_and_settings.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $password=md5($_POST['password']);
    $nic=$_POST['nic'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    
    $user =new User($fname,$lname,$uname,$email,$nic,$contact,$password,'$profile_pic','$site');
    $user->addUser();
    if(!$site){
        echo "<script type='text/javascript'>
              if(window.confirm('Invalid user name or password ! ')){
                window.location.href = 'index.php'
              }else{
                window.location.href = 'index.php'
              }
            </script>";
        
    }else{
        header("Location: $site");
    }
}

?>