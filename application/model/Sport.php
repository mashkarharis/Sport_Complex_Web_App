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
    public function getdata(){
        try {
            $sql ="SELECT * FROM sports";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);

            $list =array();
            
            while($row = $result->fetch_assoc()) {
                array_push($list, $row);
            }
            return $list;
        } catch (Exception $ex){
            return array();
        }

    }
    public function get_sport_names(){
        try {
            $sql ="SELECT name FROM sports";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $objects = $row['name'];
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array();
        }
    }
    public function getsportdata($sname){
        try {
            $sql ="SELECT * FROM sports where name='".$sname."';";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            $row = $result->fetch_assoc();            
            return $row;
        } catch (Exception $ex){
            return array('name'=>$ex->$message);
        }
    }

    public function deletesport($name){
        try {
            $sql ="delete from sports where name = '$name'";
            $message="Deletion Failed ...";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        } 
    }
    public function updatesport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        try {
            $sql ="UPDATE sports SET fee ='$fee', maxplay = '$maxplay', imgname = '$imgname', mon_open_at = '$mon_o', mon_close_at = '$mon_c', tue_open_at = '$tue_o', tue_close_at = '$tue_c', wed_open_at = '$wed_o', wed_close_at = '$wed_c', thu_open_at = '$thu_o', thu_close_at = '$thu_c', fri_open_at = '$fri_o', fri_close_at = '$fri_c', sat_open_at = '$sat_o', sat_close_at = '$sat_c', sun_open_at = '$sun_o', sun_close_at = '$sun_c' WHERE name='$name'";
            $message="Error Occured While Updating Data !";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }


    }
    public function addsport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        try {
            $sql ="INSERT into sports  VALUES ('$name','$maxplay','$fee','$imgname','$mon_o','$mon_c','$tue_o','$tue_c','$wed_o','$wed_c','$thu_o','$thu_c','$fri_o','$fri_c','$sat_o','$sat_c','$sun_o','$sun_c');";
            $message="Error Occured While Adding Data !";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }


    }
    
}

?>