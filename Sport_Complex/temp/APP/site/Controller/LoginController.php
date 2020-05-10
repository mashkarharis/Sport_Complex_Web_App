<?php

include_once '../../globalfunction_and_settings.php';
class LoginController{
    
    public static function getSite($login) {
        $checkExist=MemberController::getMemberValidation($login->get_name(),$login->get_pwd());
        if(!$checkExist){
            return false;
        }
        $role=MemberController::getRole($login->get_name());
        if( !strcmp($role,"admin")){
            return "../AdminDashBoard/AdminDashBoard.php";
            
        }
        else{
            return "../UserDashBoard/UserDashBoard.php";
            
        }
        
    }
    
    
    
    
}


?>