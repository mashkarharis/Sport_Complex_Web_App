<?php
require_once __DIR__."/SportFacadeImpl.php";

require_once __DIR__."/../DB/DAO.php";

class Sport{

    private  $spimpl;

    public function __construct() {
        return $this->spimpl=new SportFacadeImpl();
    }

    public function get_data_for_set_price(){
        return $this->spimpl->get_price();
    }
    public function getdata(){
        return $this->spimpl->fetch();
    }
    public function get_sport_names(){
        return $this->spimpl->get_names();
    }
    public function getsportdata($sname){
        return $this->spimpl->fetchone($sname);
    }

    public function deletesport($name){
        return $this->spimpl->delete($name);
    }
    public function updatesport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        return $this->spimpl->update($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c);


    }
    public function addsport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        return $this->spimpl->add($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c);
    }
    
}

?>