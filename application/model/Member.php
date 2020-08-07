<?php
require_once __DIR__."/../ObserverObservables/Observer.php";
require_once __DIR__."/../DB/DAO.php";
class Member extends Observer{
    
    private $uname;
    private $nic;
    private $fname;
    private $lname;
    private $profilepic;
    private $email;
    private $mobileno;
    private $password;
    private $previlege;
    private $status;
    
    public function setuname($uname1){$this->uname=$uname1;}
    public function getuname(){return $this->uname;}
    
    public function setnic($nic1){$this->nic=$nic1;}
    public function getnic(){return $this->nic;}
    
    public function setfname($fname1){$this->fname=$fname1;}
    public function getfname(){return $this->fname;}
    
    public function setlname($lname1){$this->lname=$lname1;}
    public function getlname(){return $this->lname;}
    
    public function setprofilepic($profilepic1){$this->profilepic=$profilepic1;}
    public function getprofilepic(){return $this->profilepic;}
    
    public function setemail($email1){$this->email=$email1;}
    public function getemail(){return $this->email;}
    
    public function setmobileno($mobileno1){$this->mobileno=$mobileno1;}
    public function getmobileno(){return $this->mobileno;}
    
    public function setpassword($password1){$this->password=$password1;}
    public function getpassword(){return $this->password;}
    
    public function setprevilege($previlege1){$this->previlege=$previlege1;}
    public function getprevilege(){return $this->previlege;}
    
    public function setstatus($status1){$this->status=$status1;}
    public function getstatus(){return $this->status;}
    
    
    
    
    
    private function __construct() {}
    
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,Member::$_instances)){
           $_instance = new Member();
           $_instance->setuname($uname);
           Member::$_instances[$uname]=$_instance;
        }
        return Member::$_instances[$uname];
    }
    public function getdao(){
        return DAO::getInstance();
    }
    
    public function getMemberValidation(){
       try {
            $uname=$this->getuname();
            $pwd=$this->getpassword();
            $sql ="select * from members where user_name='$uname' and password='$pwd'";
            $message=("Error Occured While Using Data");
            $result=$this->getdao()->execute($sql,$message);
                        
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

    public function getMemberData(){
        try {
            $usernameval=$this->getuname();
            $sql ="select * from members where user_name='$usernameval'";
            $message=("Error Occured While Using Data");
            $result=$this->getdao()->execute($sql,$message);
            
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
    
    
    
    public function getRemoveMemberData(){
        try {
            $usernameval=$this->getuname();
            $sql ="select * from members where user_name='$usernameval'";
            $message=("Error While Process Data");
            $result=$this->getdao()->execute($sql,$message);
            
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
    public function deletemember(){
        try {
            $uname=$this->getuname();
            $sql ="delete from members where user_name = '$uname'";
            $message="Deletion Failed ...";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        } 
    }
    
    public function AcceptRequest(){
        try {
            $uname=$this->getuname();
            $sql ="UPDATE  members SET status='Active' where user_name='$uname'";
            $message="Accept Failed ...";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        } 
        
    }
    
    public function updatemember(){
        try {
            $nic=$this->getnic();
            $uname=$this->getuname();
            $fname=$this->getfname();
            $lname=$this->getlname();
            $email=$this->getemail();
            $mobile=$this->getmobileno();
            $password=$this->getpassword();
            $privilege=$this->getprevilege();
            $status=$this->getstatus();
            
            $sql ="UPDATE members SET user_name = '$uname', first_name = '$fname', last_name = '$lname', email = '$email', mobile_no = '$mobile', password = '$password', previlege = '$privilege', status = '$status' WHERE nicnumber='$nic'";
            $message="Error Occured While Updating Data !";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
    }
    public function notify($notification){
        try {
            $uname=$this->getuname();
            $id=$notification->getid();
            $sql ="insert into mailbox (notification_id,receiveruname,status)
            values ('$id','$uname','UNREAD')";
            $message="Message Send  Failed ...";
            
            $this->getdao()->execute($sql,$message);
            
            return 1;
            
        } catch (Exception $ex){
            return 0;
        } 
        
        
    }
    
    
}