<?php

require_once __DIR__."/../controller/urlcontroller.php";
require_once __DIR__."/../model/booking.php";
class bookingcontroller{
    private $bookingmodel;
    public function __construct(){
        $this->bookingmodel = new Booking();
    } 
    public function get_timeslots($dayName,$date,$sportname,$uname){
        session_start();
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
    public function removebookingbymember($uname,$date,$lasttime){
        session_start();
        $url = new URLController();
        $data = $this->bookingmodel->getbookingsbymember($uname,$date,$lasttime); // Common 
        $url->loadremovebookingdetails($data);
    }
    public function deletebooking($id){
        session_start();
        $url = new URLController();
        $status=$this->bookingmodel->deletebooking($id);    // Common 
        if($status=="Success"){$url->loadwithmessage("Success","Remove Booking Success ...");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function getallbookingdetails(){
        return $this->bookingmodel->getallmemberdetails();
    }
        
}




?>