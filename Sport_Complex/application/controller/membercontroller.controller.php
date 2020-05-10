<?php
require_once __DIR__."/../model/Member.model.php";
require_once __DIR__."/../controller/urlcontroller.controller.php";
class MemberController{

    public function gotodashboard($uname,$password){
        $member=new Member();
        $valid=$member->getMemberValidation($uname,$password);
        $url = new URLController();
        if($valid=="user"){$url->loaduserdashboard();}
        elseif($valid=="admin"){$url->loadadmindashboard();}
        elseif($valid=="invalid"){$url->loadwithmessage("Invalid","Sorry, You have entered invalid username or password, Please retry !!!");}
        else{$url->loadwithmessage("Error",$valid);}


    }
    public function signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password){
        $url = new URLController();
        $member=new Member();
        $status=$member->signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password);
        if($status=="Success"){$url->loadwithmessage("Success","SignUp Success We We check Your Details and Contact you !");}
        else{$url->loadwithmessage("Failed",$status);}

    }

}




?>
