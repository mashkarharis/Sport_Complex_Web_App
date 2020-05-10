<?php
class URLController{
    public function loadhompage(){
        header('Location: application/views/homepage/index.php');
    }
    public function loadadmindashboard(){
        header('Location: ../../views/AdminDashBoard/AdminDashBoard.php');
    }
    public function loaduserdashboard(){
        header('Location: ../../views/UserDashBoard/UserDashBoard.php');
    }
    public function loadwithmessage($title,$body){
        session_start();
        $_SESSION['msg_title']=$title; 
        $_SESSION['msg_body']=$body;
        header('Location: ../../views/Message/Message.php');
    }



}




?>