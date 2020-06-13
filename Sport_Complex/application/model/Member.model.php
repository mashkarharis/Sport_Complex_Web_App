<?php
require_once __DIR__."/../DB/DAO.php";
require_once __DIR__."/Model.php";
class Member extends Model{

    private function __construct() {
        $this->dao=DAO::getInstance();
    }
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,Member::$_instances)){
           $_instance = new Member();
           Member::$_instances[$uname]=$_instance;
        }
        return Member::$_instances[$uname];
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
    
    
    
    public function getRemoveMemberData($usernameval){
        try {
            $sql ="select * from members where user_name='$usernameval'";
            $message=("Error While Process Data");
            $result=$this->dao->execute($sql,$message);
            
            if (mysqli_num_rows($result)> 0) {
                
                $row = mysqli_fetch_assoc($result);
                $arr=array($row['nicnumber'],$row['first_name'],$row['last_name'],$row['user_name'],$row['profile_pic'],$row['email'],$row['mobile_no'],$row['password'],$row['previlege'],$row['status']);
                return $arr;
                
            }else{
                return array("Invalid User Name","","","","","","","","","");
            }
            
        } catch (Exception $ex){
            return array($ex->getMessage(),"","","","","","","","","");
        }
        
        
    }
    public function deletemember($uname){
        try {
            $sql ="delete from members where user_name = '$uname'";
            $message="Deletion Failed ...";
            $this->dao->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        } 
    }
    
    public function AcceptRequest($uname){
        try {
            $sql ="UPDATE  members SET status='Active' where user_name='$uname'";
            $message="Accept Failed ...";
            $this->dao->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        } 
        
    }
    
    public function updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status){
        try {
            $sql ="UPDATE members SET user_name = '$uname', first_name = '$fname', last_name = '$lname', email = '$email', mobile_no = '$mobile', password = '$password', previlege = '$privilege', status = '$status' WHERE nicnumber='$nic'";
            $message="Error Occured While Updating Data !";
            $this->dao->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
    }
    
    
}