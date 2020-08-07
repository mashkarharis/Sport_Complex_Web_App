<?php
require_once __DIR__."/Member.php";
class UserMember extends Member{
    
    private function __construct() {}
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,UserMember::$_instances)){
            $_instance = new UserMember();
            $_instance->setuname($uname);
            UserMember::$_instances[$uname]=$_instance;
        }
        return UserMember::$_instances[$uname];
    }
    public function signupmember(){
        try {
            $nic=$this->getnic();
            $uname=$this->getuname();
            $fname=$this->getfname();
            $lname=$this->getlname();
            $emailaddress=$this->getemail();
            $mobileno=$this->getmobileno();
            $pwd=$this->getpassword();
            $sql ="insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status)
            values ('$nic','$fname','$lname','$uname','null','$emailaddress','$mobileno','$pwd','user','Pending')";
            $message="We think NIC or Username Has Already in use... Try Changing NIC Or Username";
            parent::getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
    }
}




?>