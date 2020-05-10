<?php

include_once '../../globalfunction_and_settings.php';
class SportController{
    public static function get_data_for_set_price(){
        
        try {
            $servername = DBData::$servername;
            $user = DBData::$user;
            $pass = DBData::$password;
            $dbname = DBData::$databasename;
            


            $conn = new mysqli($servername, $user, $pass, $dbname);
            $sql = "SELECT name,fee,imgname FROM sports";
            $result = $conn->query($sql);
            $conn->close();
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $objects= new sports($row['name'], "", $row['fee'], $row['imgname'], "", "");
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array(1,2);
        }
        
        
        
        
        
        
    }
    public static function get_openclose_times(){
        try {
            $servername = DBData::$servername;
            $user = DBData::$user;
            $pass = DBData::$password;
            $dbname = DBData::$databasename;
            
            
            
            $conn = new mysqli($servername, $user, $pass, $dbname);
            $sql = "SELECT name,mon_open_at,tue_open_at,wed_open_at,thu_open_at,fri_open_at,sat_open_at,sun_open_at,mon_close_at,tue_close_at,wed_close_at,thu_close_at,fri_close_at,sat_close_at,sun_close_at FROM sports";
            $result = $conn->query($sql);
            $conn->close();
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $opentime1=array($row['mon_open_at'],$row['tue_open_at'],$row['wed_open_at'],$row['thu_open_at'],$row['fri_open_at'],$row['sat_open_at'],$row['sun_open_at']);
                $closetime1=array($row['mon_close_at'],$row['tue_close_at'],$row['wed_close_at'],$row['thu_close_at'],$row['fri_close_at'],$row['sat_close_at'],$row['sun_close_at']);
                $objects= new sports($row['name'], "", "", "", $opentime1, $closetime1);
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array(1,2);
        }
        
        
    }
    
    
}

?>