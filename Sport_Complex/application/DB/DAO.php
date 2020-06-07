<?php 
require_once __DIR__."/ConnectionPool.php";
class DAO{
    
    
    private static $_instance = null;
    
    private function  __construct() { }
    
    private function  __clone() { }
    
    public static function getInstance(){
        
        if(is_null(self::$_instance) ){
            self::$_instance = new DAO();
        }
        return self::$_instance;
    }
    
    public function execute($sqlquery,$exceptionmessage){
            
            error_reporting(0);
            $connectiondata =  ConnectionPool::checkout();
            $conn = $connectiondata[1];
            if(!$conn){throw new Exception("Can't Connect Right Now");}
            $result=$conn->query($sqlquery);
            echo"\nWork Done !";
            if($result==false){echo"Came here";throw new Exception($exceptionmessage);}
            $closed=ConnectionPool::checkIn($connectiondata);
            if(!$closed){throw new Exception("Error Occured While Closing Database");}
            return $result;
    }
    

 }/* 
 $a=DAO::getInstance();
 $sql= "insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status)
            values ('00123v','A','B','gC','null','D','12','12','user','Pending')"; 
 $a->execute($sql,"OK");
  */
 
/*  while(true){
    $a=DAO::getInstance();
    $result=$a->execute("SELECT name,fee,imgname FROM sports","OK");
    while($row = $result->fetch_assoc()) {
        
    }
    $slp=rand(5,15);
    echo ("\nSleep for : ");
    echo ($slp);
    echo ("\n--------------------");
    sleep($slp);
    echo ("");
 } */

?>