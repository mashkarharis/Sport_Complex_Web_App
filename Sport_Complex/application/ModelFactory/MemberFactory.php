<?php

require_once __DIR__."/Factory.php";
require_once __DIR__."/../model/Member.model.php";
class MemberFactory extends Factory{
    public function getinstance($id){
        return Member::getInstance($id);
    }
}


?>