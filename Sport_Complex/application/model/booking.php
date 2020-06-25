<?php
require_once __DIR__."/../DB/DAO.php";
class Booking{
    public function __construct() {}
    public function getdao(){
        return DAO::getInstance();
    }
    public function get_timeslots($dayName,$date,$sportname,$uname){
        try{
            //all time slots in a day
            $slots=$this->makeTimeslots(1,0,'00:00','24:00');
            //update slots with status
            $slotstatus=array();
            foreach ($slots as $value) {
                $slotstatus[$value]="closed";
            }
            
            //all time slots that open
            $getopenclosetime=$this->getoctime($dayName,$date,$sportname);
            $openslots=$this->makeTimeslots(1,0,substr($getopenclosetime[0],0,5),substr($getopenclosetime[1],0,5));
            //update value
            foreach ($openslots as $value) {
                $slotstatus[$value]="open";
            }
            
            //All booked time slots no space
            $fillslots=$this->getfillslots($dayName,$date,$sportname);
            //update
            foreach ($fillslots as $value) {
                $slotstatus[$value]="NoSpace";
            }
            
            
            //All booked time slots by user
            $bookedslots=$this->getbookedbyuser($dayName,$date,$sportname,$uname);
            //update
            foreach ($bookedslots as $value) {
                $slotstatus[$value]="userbooked";
            }
            // All slots removed by admin on specific date
            /* Later
             * Will
             * Implement
             */
            
            return $slotstatus;
            
        } catch (Exception $ex){
            return array();
        }
            
    }
    
    
    public function makeTimeslots($duration,$cleanup,$start,$end){
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
            $slots[]=$intStart->format("H:i")."-".$endPeriod->format("H:i");
        }
        return $slots;
    } 
    
    public function getoctime($dayName,$date,$sportname){
        try{
            $open=substr($dayName,0,3)."_open_at";
            $close=substr($dayName,0,3)."_close_at";
            $sql ="SELECT ".$open.",".$close." FROM sports where name='".$sportname."' ;";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            
            if (mysqli_num_rows($result)> 0) {
                
                $row = mysqli_fetch_assoc($result);
                $arr=array($row[$open],$row[$close]);
                return $arr;
                
            }
            else{
                return array();
            }
            
        } catch (Exception $ex){
            return array();
        }
        
    }    
    
    public function getbookedbyuser($dayName,$date,$sportname,$uname){
        try{
            $sql ="SELECT slot FROM bookings where uname='".$uname."' and sport='".$sportname."' and date='".$date."' ;";
            $message="Booking Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                array_push($list, $row['slot']);
            }
            return $list;
            
        } catch (Exception $ex){
            return array();
        }
    }
    public function getfillslots($dayName,$date,$sportname){
        try{
            $sql ="SELECT slot FROM bookings where sport='".$sportname."' and date='".$date."' ;";
            $message="Booking Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            
            $list =array();
            
            while($row = $result->fetch_assoc()) {
                array_push($list, $row['slot']);
            }
            
            $max=$this->getmaxofsport($sportname);
            $occurences=array_count_values($list);
            $newlist =array();
            foreach ($occurences as $key => $value) {
                if ($value>$max) {
                    array_push($newlist,$key);
                }
            }
            return $newlist;
            
        } catch (Exception $ex){
            return array();
        }
    }
    public function getmaxofsport($sport){
        try{
            $sql ="SELECT maxplay FROM sports where name='".$sport."';";
            $message="Sport Loading Failed";
            $result=$this->getdao()->execute($sql,$message);
            
            if (mysqli_num_rows($result)> 0) {
                
                $row = mysqli_fetch_assoc($result);
                $max=$row['maxplay'];
                return ($max);
                
            }else{
                return 0;
            }
            
        } catch (Exception $ex){
            return 0;
        }
    }
    public function makeBook($uname,$date,$timeslot,$sport){
        try {
            $id=microtime();
            $sql ="insert into bookings (booking_id,uname,date,slot,sport)
            values ('$id','$uname','$date','$timeslot','$sport')";
            $message="Booking Failed ...";
            $this->getdao()->execute($sql,$message);
            return "Success";
            
        } catch (Exception $ex){
            return $ex->getMessage();
        }
    }

}
/* 
$b=new Booking();
$slots= ($b->get_timeslots("monday","2020-06-29","Basketball","Vimal432") ) ;
foreach ($slots as $key=>$value) {
    echo "\n".$key."--".$value;
}
$openslots=0;
foreach ($slots as $value) {
    if ($value=="open") {
        $openslots+=1;
    }
}
echo $openslots; */
?>



