<?php
session_start(); 
require_once __DIR__."/../../controller/sportcontroller.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name=$_POST['name'];
    $fee=$_POST['fee'];
    $maxplay=$_POST['maxplay'];
    $imgname=$_POST['src'];
    $mon_o=$_POST['mon_o'];
    $mon_c=$_POST['mon_c'];
    $tue_o=$_POST['tue_o'];
    $tue_c=$_POST['tue_c'];
    $wed_o=$_POST['wed_o'];
    $wed_c=$_POST['wed_c'];
    $thu_o=$_POST['thu_o'];
    $thu_c=$_POST['thu_c'];
    $fri_o=$_POST['fri_o'];
    $fri_c=$_POST['fri_c'];
    $sat_o=$_POST['sat_o'];
    $sat_c=$_POST['sat_c'];
    $sun_o=$_POST['sun_o'];
    $sun_c=$_POST['sun_c'];
    
    
    
    $sportcontroller = new SportController();
    $sportcontroller->updatesport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c);
    
    
}


?>