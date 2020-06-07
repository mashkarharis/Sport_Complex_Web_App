<?php
require_once __DIR__."/../DB/DAO.php";
require_once __DIR__."/Model.php";
class Member extends Model{

    private function __construct() {
        parent::__construct();
    }
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        $_instance = Member::$_instances[$uname];
        
        if(is_null($_instance) ){
           $_instance = new Member();
           Member::$_instances[$uname]=$_instance;
        }
        return $_instance;
    }
    
    
    public function getMemberValidation($uname,$pwd){
       try {
            $sql ="select * from members where user_name='$uname' and password='$pwd'";
            $message=("Error Occured While Using Data");
            $result=$this->dao->execute($sql,$message);
                        
            if (mysqli_num_rows($result)> 0) {

                $row = mysqli_fetch_assoc($result);
                $role=$row['previlege'];
                return $role;

            }else{
                return "invalid";
            }
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
        
    }

    public function getMemberData($usernameval){
        try {
            $sql ="select * from members where user_name='$usernameval'";
            $message=("Error Occured While Using Data");
            $result=$this->dao->execute($sql,$message);
            
            if (mysqli_num_rows($result)> 0) {

                $row = mysqli_fetch_assoc($result);
                $arr=array($row['nicnumber'],$row['first_name'],$row['last_name'],$row['user_name'],$row['profile_pic'],$row['email'],$row['mobile_no'],$row['password'],$row['previlege'],$row['status']);
                return $arr;

            }else{
                return array("11","","","","","","","","","");
            }
            
        } catch (Exception $ex){
            return array("22","","","","","","","","","");
        }
        

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