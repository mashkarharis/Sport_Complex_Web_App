<?php
error_reporting(0);
include_once '../../../globalfunction_and_settings.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    
    $uname=$_POST['uname'];
    $password=($_POST['password']);
    
    $login =new Login($uname,$password);
    $site=LoginController::getSite($login);
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