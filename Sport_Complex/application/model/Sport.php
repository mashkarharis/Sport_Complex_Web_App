<?php

require_once __DIR__."/../DB/DAO.php";

class Sport{
    
    public function __construct() {}
    public function getdao(){
        return DAO::getInstance();
    }
    public function get_data_for_set_price(){
       try {
            $sql ="SELECT name,fee,imgname FROM sports";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);

            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $objects = array("name"=>$row['name'], "fee"=>$row['fee'], "imgname"=>$row['imgname']);
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array();
        }
    }
}

?>