<?php
require_once __DIR__."/../controller/controller.php";
class URLController extends controller{
    public function loadhompage(){
        header('Location: application/views/homepage/index.php');
    }
    public function loadadmindashboard($data){
        session_start();
        $_SESSION['privilege']=$data[8];
        $_SESSION['nic']=$data[0];
        $_SESSION['uname']=$data[3];
        $_SESSION['email']=$data[5];
        header('Location: ../../views/AdminDashBoard/AdminDashBoard.php');
    }
    public function loaduserdashboard($data){
        session_start();
        $_SESSION['privilege']=$data[8];
        $_SESSION['nic']=$data[0];
        $_SESSION['uname']=$data[3];
        $_SESSION['email']=$data[5];
        header('Location: ../../views/UserDashBoard/UserDashBoard.php');
    }
    public function loadwithmessage($title,$body){
        session_start();
        $_SESSION['msg_title']=$title; 
        $_SESSION['msg_body']=$body;
        header('Location: ../../views/Message/Message.php');
    }
    public function logout(){
        header('Location: ../homepage/index.php');
    }
    public function viewfullmemberdetails(){
        header('Location: ../ViewFullMemberDetails/View.php');
    }
    
    public function loadmydetails($data){
        session_start();
        $_SESSION['231nic']=$data[0];
        $_SESSION['231fname']=$data[1];
        $_SESSION['231lname']=$data[2];
        $_SESSION['231uname']=$data[3];
        $_SESSION['231profilepic']=$data[4];
        $_SESSION['231email']=$data[5];
        $_SESSION['231mobile']=$data[6];
        $_SESSION['231password']=$data[7];
        $_SESSION['231privilege']=$data[8];
        $_SESSION['231status']=$data[9];
        header('Location: ../../views/View_Member_Details/View.php');
    }
    public function loadmydetailsforprint($data){
        session_start();
        $_SESSION['231nic']=$data[0];
        $_SESSION['231fname']=$data[1];
        $_SESSION['231lname']=$data[2];
        $_SESSION['231uname']=$data[3];
        $_SESSION['231profilepic']=$data[4];
        $_SESSION['231email']=$data[5];
        $_SESSION['231mobile']=$data[6];
        $_SESSION['231password']=$data[7];
        $_SESSION['231privilege']=$data[8];
        $_SESSION['231status']=$data[9];
        header('Location: ../../views/Member-PrintMyDetails/View.php');
    }
    public function removemember(){
        header('Location: ../../views/Member-removemember/View.php');
    }
    public function loadremovedetails($data){
        session_start();
        $_SESSION['231nic']=$data[0];
        $_SESSION['231fname']=$data[1];
        $_SESSION['231lname']=$data[2];
        $_SESSION['231uname']=$data[3];
        $_SESSION['231profilepic']=$data[4];
        $_SESSION['231email']=$data[5];
        $_SESSION['231mobile']=$data[6];
        $_SESSION['231password']=$data[7];
        $_SESSION['231privilege']=$data[8];
        $_SESSION['231status']=$data[9];
        header('Location: ../../views/Member-removemember/View2.php');
    }
    
    public function handlerequests($data){
        session_start();
        $_SESSION['name']=$_SESSION['name'];
        $_SESSION['pendinglist']=$data;
        header('Location: ../../views/Member-HandleRequest/View.php');
    }
    public function popupandrefresh($topic,$message,$filetoredirect){
        session_start();
        $_SESSION['topic']=$topic;
        $_SESSION['message']=$message;
        $_SESSION['redirectto']=$filetoredirect;
        header('Location: ../../views/ALERT/View.php');
        
    }
}




?>