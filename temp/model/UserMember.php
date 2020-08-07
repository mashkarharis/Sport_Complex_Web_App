<?php
require_once __DIR__."/Member.model.php";
class UserMember extends Member{
    
    private function __construct() {}
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,UserMember::$_instances)){
            $_instance = new UserMember();
            UserMember::$_instances[$uname]=$_instance;
        }
        return UserMember::$_instances[$uname];
    }
}




?>