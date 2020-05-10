<?php
require_once __DIR__."/../DB/DataBase.php";

class Member{

    private $user_name;
    private $password;
    private $nicnumber;
    private $first_name;
    private $last_name;
    private $profile_pic;
    private $email;
    private $mobile_no;
    private $privilege;
    private $status;

    public function getMemberValidation($uname,$pwd){
            $DBData = new DBaseData();
        try {
            $array=$DBData->get_data();
            $servername = $array[0];
            $user = $array[1];
            $pass = $array[2];
            $dbname = $array[3];

            error_reporting(0);
            $connect= mysqli_connect($servername,$user,$pass);
            if(!$connect){throw new Exception("Can't Connect Right Now");}     
            $dbexist=mysqli_select_db($connect,$dbname);
            if(!$dbexist){throw new Exception("No DataBase Found");} 
            $sql ="select * from members where user_name='$uname' and password='$pwd'";
            $result=mysqli_query($connect, $sql);
            if(!$result){throw new Exception("Error Occured While Using Data");}
            $closed=mysqli_close($connect);
            if(!$closed){throw new Exception("Error Occured While Closing Database");}

            
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

    public function setvalues($nic,$fname,$lname,$uname,$emailaddress,$mobileno,$pass,$profilepic,$privileges,$stat){
        $this->nicnumber=$nic;
        $this->first_name=$fname;
        $this->last_name=$lname;
        $this->user_name=$uname;
        $this->email=$emailaddress;
        $this->mobile_no=$mobileno;
        $this->password=$pass;
        $this->profile_pic=$profilepic;
        $this->privilege=$privileges;
        $this->status=$stat;
    }

    public function signupmember($nic,$fname,$lname,$uname,$emailaddress,$mobileno,$pwd){
        $DBData = new DBaseData();
        try {
            $array=$DBData->get_data();
            $servername = $array[0];
            $user = $array[1];
            $pass = $array[2];
            $dbname = $array[3];

            error_reporting(0);
            $connect= mysqli_connect($servername,$user,$pass);
            if(!$connect){throw new Exception("Can't Connect Right Now");}     
            $dbexist=mysqli_select_db($connect,$dbname);
            if(!$dbexist){throw new Exception("No DataBase Found");} 
            $sql ="insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status) 
            values ('$nic','$fname','$lname','$uname','null','$emailaddress','$mobileno','$pwd','user','Pending')";
            $result=mysqli_query($connect, $sql);
            if(!$result){throw new Exception("We think NIC or Username Has Already in use... Try Changing NIC Or Username");}
            $closed=mysqli_close($connect);
            if(!$closed){throw new Exception("Error Occured While Closing Database");}

            return "Success";

        } catch (Exception $ex){
            return $ex->getMessage();
        }
        


    }
    
}