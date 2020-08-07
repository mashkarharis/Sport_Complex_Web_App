<?php

class Login{
    
    private $uname;
    private $password;
    
    public function __construct($uname1,$password1) {
        $this->uname=$uname1;
        $this->password=$password1;
    }
    public function get_name(){
        return $this->uname;
    }
    public function get_pwd(){
        return $this->password;
    }
}




?>