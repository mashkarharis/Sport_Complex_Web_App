<?php

require_once __DIR__."/../../controller/bookingcontroller.php";
 class TimeSlot{

    function viewSlots($date,$sport,$dayname,$uname){
        $slots="";
        $slots.="<div class='container'>
                <h1 class='text-center'>Book for date:".$date."</h1><hr>
                <div class='row'>
                <div class='col=md-12'></div>";
        
        $booking=new bookingcontroller();
        $slotstatus=$booking->get_timeslots($dayname,$date,$sport,$uname);
        
        foreach($slotstatus as $key=>$value){
            $slots.="<div class='col-md-2'>
                        <div class='form-group'>";
            if($value=="closed"){
                $slots.="<button disabled class='btn btn-danger' >".$key." : Closed</button>";
            }else if($value=="open"){ 
                $slots.="<button class='btn btn-success book' data-timeslot=".$key.">".$key." : Book It </a>";
            }else if($value=="NoSpace"){
                $slots.="<button disabled class='btn btn-danger' >".$key." : No Space</button>";
            }else{
                $slots.="<button disabled class='btn btn-danger' >".$key." : Booked</button>";
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
                                    <input required type='text' readonly name='sport' value='".$sport."' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Timeslot</label>
                                    <input required type='text' readonly name='timeslot' id='timeslot' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Date</label>
                                    <input required type='text'  readonly name='date' value='".$date."' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for=''>User Name</label>
                                    <input required  type='text'  readonly name='uname' value='".$uname."' class='form-control'>
                                </div>
                                <div class='form-group pull-right'>
                                
                                    <button type='submit' readonly name='submit'  class='btn btn-success'>Confirm</button>
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