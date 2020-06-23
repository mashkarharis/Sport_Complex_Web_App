<?php
require_once __DIR__."/../model/Sport.php";
class SportController{
    private $sportmodel;
    public function __construct(){
        $this->sportmodel = new Sport("","","","","","");
    } 
    public function get_data_for_set_price(){
        return $this->sportmodel->get_data_for_set_price();

    }



}


?>