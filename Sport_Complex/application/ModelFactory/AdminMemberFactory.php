<?php

require_once __DIR__."/MemberFactory.php";
require_once __DIR__."/../model/AdminMember.php";
class AdminMemberFactory extends MemberFactory{
    public function getInstance($id){
        return AdminMember::getInstance($id);
    }
}


?>