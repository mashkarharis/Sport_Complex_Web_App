<?php

class Sport{
    private $name;
    private $maxplay;
    private $fee;
    private $imgname;
    private $opentimes;
    private $closetimes;
    public function __construct($name1,$maxplay1,$fee1,$imgname1,$opentime1,$closetime1) {
        $this->name=$name1;
        $this->maxplay=$maxplay1;
        $this->fee=$fee1;
        $this->imgname=$imgname1;
        $this->opentimes=$opentime1;
        $this->closetimes=$closetime1;
    }
    function get_name() {
        return $this->name;
    }
    function get_maxplay() {
        return $this->maxplay;
    }    
    function get_fee() {
        return $this->fee;
    }
    function get_imgname() {
        return $this->imgname;
    }
    function get_opentime() {
        return $this->opentimes;
    }
    function get_closetime(){
        return $this->closetimes;
    }
    public function get_data_for_set_price(){
            $DBData = new DBaseData();
        try {
            $array=$DBData->get_data();
            $servername = $array[0];
            $user = $array[1];
            $pass = $array[2];
            $dbname = $array[3];
            


            $conn = new mysqli($servername, $user, $pass, $dbname);
            $sql = "SELECT name,fee,imgname FROM sports";
            $result = $conn->query($sql);
            $conn->close();
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                $objects= new Sport($row['name'], "", $row['fee'], $row['imgname'], "", "");
                array_push($list, $objects);
            }
            return $list;
        } catch (Exception $ex){
            return array();
        }
    }
}

?>