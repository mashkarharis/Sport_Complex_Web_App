<?php
require_once __DIR__."/Member.model.php";
class AdminMember extends Member{
    
    private function __construct() {}
    
    private static $_instances = array();
    
    private function  __clone() { }
    
    public static function getInstance($uname){
        
        if(!array_key_exists($uname,AdminMember::$_instances)){
            $_instance = new AdminMember();
            AdminMember::$_instances[$uname]=$_instance;
        }
        return AdminMember::$_instances[$uname];
    }
}
    
    


?>