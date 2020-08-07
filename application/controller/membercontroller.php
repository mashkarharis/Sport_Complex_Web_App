<?php
require_once __DIR__."/../model/Member.php";
require_once __DIR__."/../model/Notification.php";
require_once __DIR__."/../ObserverObservables/NotificationManager.php";
require_once __DIR__."/../ModelFactory/MemberFactory.php";
require_once __DIR__."/../ModelFactory/AdminMemberFactory.php";
require_once __DIR__."/../ModelFactory/UserMemberFactory.php";
require_once __DIR__."/../ModelFactory/Factory.php";
require_once __DIR__."/../controller/urlcontroller.php";
class MemberController{

    public function gotodashboard($uname,$password){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $member->setpassword($password);
        $valid=$member->getMemberValidation(); // common
        $url = new URLController();
        if($valid=="user"){$data = $member->getMemberData();$url->loaduserdashboard($data);}
        elseif($valid=="admin"){$data = $member->getMemberData();$url->loadadmindashboard($data);}
        elseif($valid=="invalid"){$url->loadwithmessage("Invalid","Sorry, You have entered invalid username or password, Please retry !!!");}
        else{$url->loadwithmessage("Error",$valid);}


    }
    public function AcceptRequest($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $status=$member->AcceptRequest(); //common
        $url = new URLController();
        if($status=="Success"){$url->popupandrefresh("Success","Accepted Request ...","../../Views/AdminDashBoard/approve.php");}
        else{$url->popupandrefresh("Failed",$status,"../../Views/AdminDashBoard/approve.php");}
    }
    public function RejectRequest($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $status=$member->deletemember(); // Common
        $url = new URLController();
        if($status=="Success"){$url->popupandrefresh("Success","Rejected Request ...","../../Views/AdminDashBoard/approve.php");}
        else{$url->popupandrefresh("Failed Rejection",$status,"../../Views/AdminDashBoard/approve.php");}
    }
    
    
    
    
    public function signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password){
        $url = new URLController();
        $Factory=new UserMemberFactory();
        $member=$Factory->getInstance($uname);
        
        $member->setnic($nic);
        $member->setfname($fname);
        $member->setlname($lname);
        $member->setemail($email);
        $member->setmobileno($mobileno);
        $member->setpassword($password);
        
        
        
        
        $status=$member->signupmember(); // User 
        if($status=="Success"){$url->loadwithmessage("Success","SignUp Success We We check Your Details and Contact you !");}
        else{$url->loadwithmessage("Failed",$status);}

    }
    public function viewmydetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData(); // Common 
        $url->loadmydetails($data);

    }
    public function removedetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getRemoveMemberData(); // Common 
        $url->loadremovedetails($data);
    }
    public function printmydetails($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData();// Common 
        $url->loadmydetailsforprint($data);
        
    }
    public function updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        
        $member->setnic($nic);
        $member->setfname($fname);
        $member->setlname($lname);
        $member->setemail($email);
        $member->setmobileno($mobile);
        $member->setpassword($password);
        $member->setprofilepic($profilepic);
        $member->setprevilege($privilege);
        $member->setstatus($status);
        
        
        
        $status=$member->updatemember(); // Common 
        if($status=="Success"){$url->loadwithmessage("Success","Your Update Success !");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function deletemember($uname){
        $Factory=new MemberFactory();
        $member=$Factory->getInstance($uname);
        $url = new URLController();
        $status=$member->deletemember();    // Common 
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
    
    public function getalladmindata(){
        $Factory=new AdminMemberFactory();
        $member = $Factory->getInstance("...");
        return $member->getalladmindata();  // Admin 
    }
}




?>
