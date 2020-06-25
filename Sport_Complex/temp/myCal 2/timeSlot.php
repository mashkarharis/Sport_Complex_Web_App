<?php

 class TimeSlot{
    public $duration;
    public $cleanup;
    public $start;
    public $end;

    function __construct(){
        $this->duration=1;
        $this->cleanup=0;
        $this->start='09:00';
        $this->end='15:00';
    }

    function makeTimeslots($duration,$cleanup,$start,$end){
        $start=new DateTime($start);
        $end=new DateTime($end);
        $interval=new DateInterval("PT".$duration."H");
        $cleanupinterval=new DateInterval("PT".$cleanup."M");
        $slots=array();
    
        for($intStart=$start;$intStart<$end;$intStart->add($interval)->add($cleanupinterval)){
            $endPeriod=clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end){
            break;
    
            }
            $slots[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }
        return $slots;
    }

    function getBookedDates($date,$sport_id){
        $mysqli=new mysqli('localhost','root','','bookingcalendar');
        $stmt=$mysqli->prepare('select * from bookings where date=? AND sport_id=?' );
        $stmt->bind_param('si',$date,$sport_id);
        $bookings=array();
        if($stmt->execute()){
            $result=$stmt->get_result();
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $bookings[]=$row['timeSlot'];
                }
                $stmt->close();
            }
        }
        return $bookings;
    }

    function viewSlots($date,$sport_id){
        $slots="";
        $slots.="<div class='container'>
            <h1 class='text-center'>Book for date:".$date."</h1><hr>
                <div class='row'>
                <div class='col=md-12'></div>";
        
                    // <?php echo isset($msg)?$msg:'';
                
            
        $timeslots=$this->makeTimeslots($this->duration,$this->cleanup,$this->start,$this->end);
        $bookings=$this->getBookedDates($date,$sport_id);
        foreach($timeslots as $ts){
            $slots.="<div class='col-md-2'>
                        <div class='form-group'>";
            if(in_array($ts,$bookings)){
                $slots.="<button disabled class='btn btn-danger' >".$ts."</button>";
            }else{ 
                $slots.="<button class='btn btn-success book' data-timeslot=".$ts.">".$ts." </a>";
            } 
            $slots.=" </div></div>";
        } 
        $slots.="</div></h1></div>";
        $slots.="

            <div class='modal' id='myModal'>
            <div class='modal-dialog'>
            <div class='modal-content'>

            
                <div class='modal-header'>
                    <h4 class='modal-title'>Confirm  Booking:<span id='slot'></span></h4>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                </div>

                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <form action='' method='post'>
                                <div class='form-group'>
                                    <label for=''>Sport</label>
                                    <input required type='text' readonly name='sport' value='".$sport_id."' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Timeslot</label>
                                    <input required type='text' readonly name='timeslot' id='timeslot' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Name</label>
                                    <input required type='text'  name='name' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Email</label>
                                    <input required  type='text'  name='email' class='form-control'>
                                </div>
                                <div class='form-group pull-right'>
                                
                                    <button type='submit' name='submit'  class='btn btn-success'>Confirm</button>
                                </div>
                            </form>
                            
                        </div>   
                    </div>
                </div>";
        $slots.="</div></div></div>
                    <script>
                    $('.book').click(function(){
                    var timeslot=$(this).attr('data-timeslot');
                    $('#slot').html(timeslot);
                    $('#timeslot').val(timeslot);
                    $('#myModal').modal('show');

                    })
                    </script>"; 
        echo $slots;
    }

    
}

?>