<?php

require_once __DIR__."/../controller/urlcontroller.php";
require_once __DIR__."/../model/booking.php";
class bookingcontroller{
    private $bookingmodel;
    public function __construct(){
        $this->bookingmodel = new Booking();
    } 
    public function get_timeslots($dayName,$date,$sportname,$uname){
        return $this->bookingmodel->get_timeslots($dayName,$date,$sportname,$uname);
        
    }
    public function makeBook($uname,$date,$timeslot,$sport){
        session_start();
        $_SESSION['name']=$uname;
        $status=$this->bookingmodel->makeBook($uname,$date,$timeslot,$sport);
        $url = new URLController();
        if($status=="Success"){$url->popupandrefresh("Success","Booking Success ...","../../Views/booking/index.php");}
        else{$url->popupandrefresh("Booking Failed",$status,"../../Views/booking/index.php");}
        
    }
}



?>