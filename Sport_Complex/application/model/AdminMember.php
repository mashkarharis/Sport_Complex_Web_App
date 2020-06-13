<?php
require_once __DIR__."/Member.model.php";
class AdminMember extends Member{
    
    private function __construct() {
        $this->dao=DAO::getInstance();
    }
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,AdminMember::$_instances)){
            $_instance = new AdminMember();
            AdminMember::$_instances[$uname]=$_instance;
        }
        return AdminMember::$_instances[$uname];
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
    
    


?>