<?php
include_once '../../globalfunction_and_settings.php';

class MemberController{
    
    //get member by user name query
    public static function getMember($user_name){
        $sql="SELECT * FROM members WHERE user_name=$user_name";
        $conn=$this->connect();
        $result = $conn->query($sql);
        
        return $result;
    }
    //view all member details
    public static function getMembers(){
        $sql="SELECT * FROM members";
        $conn=$this->connect();
        $result = $conn->query($sql);
        
        return $result;
    }
    //validate member
    public static function getMemberValidation($user_name,$password){
        try {
            $servername = DBData::$servername;
            $user = DBData::$user;
            $pass = DBData::$password;
            $dbname = DBData::$databasename;
            
            $conn = new mysqli($servername, $user, $pass, $dbname);
            $sql = "select * from members where user_name='$user_name' and password='$password'";
            $result = $conn->query($sql);
            $conn->close();
            
            if ($result->num_rows > 0) {
                return true;
            }else{
                return false;
            }
        } catch (Exception $ex){
            return false;
        }
        
    }
    //get member  by user name and password
    public static function getMemberPwd($user_name,$password){
        $sql="select * from members where user_name='$user_name' and password='$password'";
        $conn=$this->connect();
        $result = $conn->query($sql);
        
        return $result;
    }
    
    
    //insert new member to members table
    public static function setMember($first_name,$last_name,$user_name,$email,$nic,$mobile_no,$password){
        $sql = "INSERT INTO members
        VALUES ('','$first_name','$last_name','$user_name','','$email','$nic','$mobile_no','$password','user','pending')";
        $conn=$this->connect();
        $conn->query($sql);
        
        
    }
    //get role
    public static function getRole($user_name){
        
        try {
            $servername = DBData::$servername;
            $user = DBData::$user;
            $pass = DBData::$password;
            $dbname = DBData::$databasename;
            
            
            $conn = new mysqli($servername, $user, $pass, $dbname);
            $sql="SELECT previlege FROM members where user_name='$user_name' ";
            $result = $conn->query($sql);
            $conn->close();
            
            if ($result->num_rows > 0) {
                
                $row = $result->fetch_assoc();
                $role=$row['previlege'];
                return $role;
                
            } else {
                return false;
            }
        } catch (Exception $ex){
            return false;
        }
        
        
        
        
    }
    public static function showMember($user_name){
        $result=$this->getMember($user_name);
        return $result;
        
    }

    //show memeber with password and username
    public static function showValidMember($user_name,$password){
        $exist=$this->getMemberValidation($user_name,$password);
        if($exist){
            $result=$this->getMemberPwd($user_name,$password);
            return $result;
        }else{
            return false;
        }
    }
    
    /*
     update datas
     */
    
    //update property
    public static function updateProperty($property,$value){
        
    }
}


?>