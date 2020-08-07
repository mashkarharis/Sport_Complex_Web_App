<?php
require_once __DIR__."/../model/UserMember.php";
require_once __DIR__."/MemberFactory.php";

class UserMemberFactory extends MemberFactory{
    public function getinstance($id){
        return UserMember::getInstance($id);
    }
}


?>
      
   