<?php

require_once __DIR__."/../controller/urlcontroller.php";
require_once __DIR__."/../model/Sport.php";
class SportController{
    private $sportmodel;
    public function __construct(){
        $this->sportmodel = new Sport("","","","","","");
    } 
    public function get_data_for_set_price(){
        return $this->sportmodel->get_data_for_set_price();

    }
    public function get_sport_names(){
        return $this->sportmodel->get_sport_names();
    }
    public function get_data(){
        return $this->sportmodel->getdata();
    }
    public function removedetails($sname){
        $url = new URLController();
        $data = $this->sportmodel->getsportdata($sname); // Common 
        $url->loadremovesportdetails($data);
    }
    public function deletesport($name){
        $url = new URLController();
        $status=$this->sportmodel->deletesport($name);    // Common 
        if($status=="Success"){$url->loadwithmessage("Success","Remove Sport Success ...");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function updatesport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        session_start(); 
        $url = new URLController();

       $mon_o=date('H:i',strtotime('+'.$mon_o.' hour',strtotime('00:00')));
       $tue_o=date('H:i',strtotime('+'.$tue_o.' hour',strtotime('00:00')));
       $wed_o=date('H:i',strtotime('+'.$wed_o.' hour',strtotime('00:00')));
       $thu_o=date('H:i',strtotime('+'.$thu_o.' hour',strtotime('00:00')));
       $fri_o=date('H:i',strtotime('+'.$fri_o.' hour',strtotime('00:00')));
       $sat_o=date('H:i',strtotime('+'.$sat_o.' hour',strtotime('00:00')));
       $sun_o=date('H:i',strtotime('+'.$sun_o.' hour',strtotime('00:00')));

       $mon_c=date('H:i',strtotime('+'.$mon_c.' hour',strtotime('00:00')));
       $tue_c=date('H:i',strtotime('+'.$tue_c.' hour',strtotime('00:00')));
       $wed_c=date('H:i',strtotime('+'.$wed_c.' hour',strtotime('00:00')));
       $thu_c=date('H:i',strtotime('+'.$thu_c.' hour',strtotime('00:00')));
       $fri_c=date('H:i',strtotime('+'.$fri_c.' hour',strtotime('00:00')));
       $sat_c=date('H:i',strtotime('+'.$sat_c.' hour',strtotime('00:00')));
       $sun_c=date('H:i',strtotime('+'.$sun_c.' hour',strtotime('00:00')));


       $status=$this->sportmodel->updatesport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c); // Common 
       if($status=="Success"){$url->loadwithmessage("Success","Your Update Success !");}
       else{$url->loadwithmessage("Failed",$status);}
    }
    
    public function addsport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c){
        session_start(); 
        $url = new URLController();

       $mon_o=date('H:i',strtotime('+'.$mon_o.' hour',strtotime('00:00')));
       $tue_o=date('H:i',strtotime('+'.$tue_o.' hour',strtotime('00:00')));
       $wed_o=date('H:i',strtotime('+'.$wed_o.' hour',strtotime('00:00')));
       $thu_o=date('H:i',strtotime('+'.$thu_o.' hour',strtotime('00:00')));
       $fri_o=date('H:i',strtotime('+'.$fri_o.' hour',strtotime('00:00')));
       $sat_o=date('H:i',strtotime('+'.$sat_o.' hour',strtotime('00:00')));
       $sun_o=date('H:i',strtotime('+'.$sun_o.' hour',strtotime('00:00')));

       $mon_c=date('H:i',strtotime('+'.$mon_c.' hour',strtotime('00:00')));
       $tue_c=date('H:i',strtotime('+'.$tue_c.' hour',strtotime('00:00')));
       $wed_c=date('H:i',strtotime('+'.$wed_c.' hour',strtotime('00:00')));
       $thu_c=date('H:i',strtotime('+'.$thu_c.' hour',strtotime('00:00')));
       $fri_c=date('H:i',strtotime('+'.$fri_c.' hour',strtotime('00:00')));
       $sat_c=date('H:i',strtotime('+'.$sat_c.' hour',strtotime('00:00')));
       $sun_c=date('H:i',strtotime('+'.$sun_c.' hour',strtotime('00:00')));


       $status=$this->sportmodel->addsport($name,$fee,$maxplay,$imgname,$mon_o,$mon_c,$tue_o,$tue_c,$wed_o,$wed_c,$thu_o,$thu_c,$fri_o,$fri_c,$sat_o,$sat_c,$sun_o,$sun_c); // Common 
       if($status=="Success"){$url->loadwithmessage("Success","Sport Add Success !");}
       else{$url->loadwithmessage("Failed",$status);}
    }


}


?>