<?php

 class Book{
    
    function __construct(){
        
    }
    
    function makeBook($name,$email,$date,$timeslot,$sport_id){
        $mysqli=new mysqli('localhost','root','','bookingcalendar');
        $stmt=$mysqli->prepare('select * from bookings where date=? AND timeslot=? AND sport_id=?' );
        $stmt->bind_param('ssi',$date,$timeslot,$sport_id);
        if($stmt->execute()){
            $result=$stmt->get_result();
            if($result->num_rows>0){
                $msg="<div class='container'><center><div class='alert alert-danger'><strong>Already booked</strong></div></center></div>";
               
            }else{
                $stmt=$mysqli->prepare("INSERT INTO bookings(name,email,date,timeSlot,sport_id) VALUES (?,?,?,?,?)");
                $stmt->bind_param("ssssi",$name,$email,$date,$timeslot,$sport_id);
                $stmt->execute();
                $msg="<div class='container'><center><div class='alert alert-success'><strong>Booking Successful</strong></div></center></div>";
                $bookings[]=$timeslot;
                $stmt->close();
                $mysqli->close();
            }
        }
        return $msg;
        
      
    }


    function cancelBook(){
        
    }
    
}

?>