<?php
require_once __DIR__."/Member.model.php";
class UserMember extends Member{
    
    private function __construct() {
        $this->dao=DAO::getInstance();
    }
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,UserMember::$_instances)){
            $_instance = new UserMember();
            UserMember::$_instances[$uname]=$_instance;
        }
        return UserMember::$_instances[$uname];
    }
    public function signupmember($nic,$fname,$lname,$uname,$emailaddress,$mobileno,$pwd){
        try {
            $sql ="insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status)
            values ('$nic','$fname','$lname','$uname','null','$emailaddress','$mobileno','$pwd','user','Pending')";
            $message="We think NIC or Username Has Already in use... Try Changing NIC Or Username";
            $this->dao->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
    }
}




?>