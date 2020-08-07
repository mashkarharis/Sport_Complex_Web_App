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
    
    public function getNewRequests(){
        try {
            $sql ="select * from members where status='Pending'";
            $message=("Error While get pendings ...");
            $result=$this->dao->execute($sql,$message);
            $data=array();
            if (mysqli_num_rows($result)> 0) {
                while($row=mysqli_fetch_array($result)){
                    $arr=array("nicnumber"=>$row['nicnumber'],
                        "first_name"=>$row['first_name'],
                        "last_name"=>$row['last_name'],
                        "user_name"=>$row['user_name'],
                        "email"=>$row['email'],
                        "mobile_no"=>$row['mobile_no'],
                        "previlege"=>$row['previlege'],
                        "status"=>$row['status']);
                    array_push($data,$arr);
                    
                }
                return $data;
                
            }else{
                $arr = array("nicnumber"=>"No Pendings Request",
                    "first_name"=>"",
                    "last_name"=>"",
                    "user_name"=>"",
                    "email"=>"",
                    "mobile_no"=>"",
                    "previlege"=>"",
                    "status"=>"");
                return array($arr);
            }
            
        } catch (Exception $ex){
            $arr = array("nicnumber"=>$ex->getMessage(),
                "first_name"=>"",
                "last_name"=>"",
                "user_name"=>"",
                "email"=>"",
                "mobile_no"=>"",
                "previlege"=>"",
                "status"=>"");
            return array($arr);
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
    public function getallmemberdetails(){
        try {
            $sql ="SELECT * FROM members";
            $message="Members Data Loading Failed";
            $result=$this->dao->execute($sql,$message);
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $objects = array("nic"=>$row['nicnumber'],"uname"=>$row['user_name'],"fname"=>$row['first_name'],"lname"=>$row['last_name'],"email"=>$row['email'],
                    "mobile"=>$row['mobile_no'],"previlege"=>$row['previlege'],"status"=>$row['status'],"password"=>$row['password']
                );
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array();
        }
    }
    
}