<?php
class ConnectionPool{
   /*  
    private static $servername = '127.0.0.1:3308';
    private static $password = '1234';
    private static $databasename = 'webapp';
    private static $user= 'root'; */
    
    private static $lifetime = 10;
    private static $lock = array();
    private static $unlock =array();
    private static $connectionid=0;
    
    private static function getconid(){
        ConnectionPool::$connectionid+=1;
        return ConnectionPool::$connectionid;
    }
    
    
    private static function dead($conn){
        try {
            $conn->close();
            return true;
        }
        catch (Exception $ex) {
            return null;
        } 
    }
    private static function validate($conn){
        
        try {
            return (!($conn->connect_error));
        }
        catch (Exception $ex) {
            return (false);
        } 
       
    }
    private static function create(){
        
        try {
            
            $conn = new mysqli('127.0.0.1:3308','root','1234','webappfinalized');
            
            return $conn;
            
        }
        catch (Exception $ex) {
            
            return (null);
        } 
    }
    
    public static function checkout(){
        
        if(count(ConnectionPool::$unlock)>0){
            foreach((ConnectionPool::$unlock) as $connectiondata) {
                $gap = time() - $connectiondata[2];
                echo ("\nConncetion Gap : ");
                echo ($gap);
                $boolean = $gap> ConnectionPool::$lifetime;
                if ($boolean) {
                    unset(ConnectionPool::$unlock[$connectiondata[0]]);
                    self::dead($connectiondata[1]);
                    echo ("\nConnection Killed : "); echo ($connectiondata[0]);
                    $connectiondata=null;
                }
                else{
                    if(self::validate($connectiondata[1])){
                        unset(ConnectionPool::$unlock[$connectiondata[0]]);
                        ConnectionPool::$lock[$connectiondata[0]]=$connectiondata;
                        echo ("\nOld Connection Returned : ");echo($connectiondata[0]);
                        return $connectiondata;
                    }else{
                        unset(ConnectionPool::$unlock[$connectiondata[0]]);
                        self::dead($connectiondata[1]);
                        echo ("\nValidation Failed Connection Killed : ");echo ($connectiondata[0]);
                        $connectiondata=null;
                    }
                }
            }
        }
        $conn = self::create();
        $id = self::getconid();
        $condata = array($id,$conn,time());
        ConnectionPool::$lock[$condata[0]]=$condata;
        echo ("\nNew Connection : ");
        echo ($condata[0]);
        return $condata;
    }
    public static function checkIn($connectiondata){
        
        $connectiondata[2]=time();
        unset(ConnectionPool::$lock[$connectiondata[0]]);
        ConnectionPool::$unlock[$connectiondata[0]]=$connectiondata;
        echo ("\nConnection Checked In : ");echo ($connectiondata[0]);
        return true;
    }
    
    
}