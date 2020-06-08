<?php
require_once __DIR__."/../controller/controller.php";
require_once __DIR__."/../model/Sport.model.php";
class SportController extends controller{
    private $sportmodel;
    public function __construct(){
        $this->sportmodel = new Sport("","","","","","");
    } 
    public function get_data_for_set_price(){
        return $this->sportmodel->get_data_for_set_price();

    }



}


?>