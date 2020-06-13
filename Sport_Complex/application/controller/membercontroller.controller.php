<?php
require_once __DIR__."/../controller/controller.php";
require_once __DIR__."/../model/Member.model.php";
require_once __DIR__."/../ModelFactory/MemberFactory.php";
require_once __DIR__."/../ModelFactory/AdminMemberFactory.php";
require_once __DIR__."/../ModelFactory/UserMemberFactory.php";
require_once __DIR__."/../ModelFactory/Factory.php";
require_once __DIR__."/../controller/urlcontroller.controller.php";
class MemberController extends controller {

    public function gotodashboard($uname,$password){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $valid=$member->getMemberValidation($uname,$password); // common
        $url = new URLController();
        if($valid=="user"){$data = $member->getMemberData($uname);$url->loaduserdashboard($data);}
        elseif($valid=="admin"){$data = $member->getMemberData($uname);$url->loadadmindashboard($data);}
        elseif($valid=="invalid"){$url->loadwithmessage("Invalid","Sorry, You have entered invalid username or password, Please retry !!!");}
        else{$url->loadwithmessage("Error",$valid);}


    }
    public function AcceptRequest($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $status=$member->AcceptRequest($uname); //common
        $url = new URLController();
        if($status=="Success"){$url->popupandrefresh("Success","Accepted Request ...","../../Views/AdminDashBoard/approve.php");}
        else{$url->popupandrefresh("Failed",$status,"../../Views/AdminDashBoard/approve.php");}
    }
    public function RejectRequest($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $status=$member->deletemember($uname); // Common
        $url = new URLController();
        if($status=="Success"){$url->popupandrefresh("Success","Rejected Request ...","../../Views/AdminDashBoard/approve.php");}
        else{$url->popupandrefresh("Failed Rejection",$status,"../../Views/AdminDashBoard/approve.php");}
    }
    
    
    
    
    public function signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password){
        $url = new URLController();
        $Factory=new UserMemberFactory();
        $member=$Factory->getInstance($uname);
        $status=$member->signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password); // User 
        if($status=="Success"){$url->loadwithmessage("Success","SignUp Success We We check Your Details and Contact you !");}
        else{$url->loadwithmessage("Failed",$status);}

    }
    public function viewmydetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData($uname); // Common 
        $url->loadmydetails($data);

    }
    public function removedetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getRemoveMemberData($uname); // Common 
        $url->loadremovedetails($data);
    }
    public function printmydetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData($uname);// Common 
        $url->loadmydetailsforprint($data);
        
    }
    public function updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $status=$member->updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status); // Common 
        if($status=="Success"){$url->loadwithmessage("Success","Your Update Success !");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function deletemember($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $status=$member->deletemember($uname);    // Common 
        if($status=="Success"){$url->loadwithmessage("Success","Remove Member Success ...");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function getallmemberdetails(){
        $Factory=new AdminMemberFactory();
        $member = $Factory->getInstance("...");
        return $member->getallmemberdetails();  // Admin 
        
    }
    
    public function approve(){
        session_start();
        $_SESSION['name']=$_SESSION['name'];
        $Factory=new AdminMemberFactory();
        $member = $Factory->getInstance("...");
        $arrays = $member->getNewRequests();     // Admin  
        $url = new URLController();
        $url->handlerequests($arrays);
    }

}




?>
