<?php
include_once '../../globalfunction_and_settings.php';
class sports{
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
    
    
}




?>


