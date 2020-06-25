<?php 
session_start();
require_once __DIR__."/../../controller/sportcontroller.php";
require_once __DIR__."/../../controller/bookingcontroller.php";
class Calendar{
    
    public $sportnames;
    public $month;
    public $year;
    public $firstDayOfMonth;
    public $prev_month;
    public $prev_year;
    public $next_month;
    public $next_year;
    public $sport_id;
    public $next_state;
    public $previous_state;
    
    function __construct($month,$year,$sport_id){
        $sportcontroller=new SportController();
        $this->sportnames=$sportcontroller->get_sport_names();
        $this->month=$month;
        $this->year=$year;
        $this->sport_id=$sport_id;
        $this->next=$sport_id<count($this->sportnames)-1?$sport_id+1:0;
        $this->prev=$sport_id==0?count($this->sportnames)-1:$sport_id-1;
        $this->firstDayOfMonth=mktime(0,0,0,$this->month,1,$this->year);
        $this->prev_month=date('m',mktime(0,0,0,$this->month-1,1,$this->year));
        $this->prev_year=date('Y',mktime(0,0,0,$this->month-1,1,$this->year));
    
        $this->next_month=date('m',mktime(0,0,0,$this->month+1,1,$this->year));
        $this->next_year=date('Y',mktime(0,0,0,$this->month+1,1,$this->year));
        
    }
   

    public function makeCalendar(){
        
         //get number of days in month
        $numberDays=date('t',$this->firstDayOfMonth);

        //get some info about the first day of this month    
        $dateComponents=getdate($this->firstDayOfMonth);
    
        //getting the name of this month
        $monthName=$dateComponents['month'];
    
        //getting the index value 0-6 of the first day of this month
        $dayOfWeek=$dateComponents['wday'];
    
        //getting current date
        $dateToday=date('Y-m-d');
        
        $cal="<center><h2>$monthName $this->year</h2>";
        
        $cal.="<hr><center><div class='btn-group btn-primary btn-s rounded-left'><a class='btn btn-primary btn-s' href='?month=".date('m')."&year=".date('Y')."&state=".$this->prev."'><</a>";
        $cal.="<a class='btn btn-danger btn-s' disabled>".$this->sportnames[$this->sport_id]."</a>";
        $cal.="<a class='btn btn-primary btn-s rounded-right' href='?month=".date('m')."&year=".date('Y')."&state=".$this->next."'>></a></div></center>";
        $cal.="
        <br>
            
        <div class='container'>
        <hr>
        <table class=table table-bordered>";
        $cal.="<div class='btn-group'><a class='btn btn-primary btn-s' href='?month=".$this->prev_month."&year=".$this->prev_year."&state=".$this->sport_id."'>Prev Month</a>";
        $cal.="<a class='btn btn-success btn-s' href='?month=".date('m')."&year=".date('Y')."&state=".$this->sport_id."'>Current Month</a>";
        $cal.="<a class='btn btn-primary btn-s' href='?month=".$this->next_month."&year=".$this->next_year."&state=".$this->sport_id."'>Next Month</a></div></center>";

        
        $cal.="
        <br>
        
        <div class='container'>
        <hr>
        <table class=table table-bordered>";

        
        //create cal headers
        $daysOfWeek=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"); 
        $cal.="<tr class='bg-info'>";    
        foreach($daysOfWeek as $day){
            $cal.="<th class='header'>$day</th>";
        }
        $cal.="</tr>";
        $cal.="<tr>";
        //initiating the day counter
        $currentDay=1;
        //The varaiable $dayOfWeek will make sure that there must be only 7 columns on our table 
        if($dayOfWeek>0){
            for($k=0;$k<$dayOfWeek;$k++){
                $cal.="<td></td>";
    
            }
        }
        //Getting the month number
        $month=str_pad($this->month,2,"0",STR_PAD_LEFT);
        
        $booking=new bookingcontroller();
        
        while($currentDay<=$numberDays){
            //if seventh column reached ,start a new row
            if($dayOfWeek==7){
                $dayOfWeek=0;
                $cal.="</tr><tr>";
            }
            $currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
            $date="$this->year-$month-$currentDayRel";
            $dayName=strtolower(date('l',strtotime($date)));
            if ($date==date('Y-m-d')){
                $today='today';
            } else{  
                $today='';
            }
            
    
                if($date<date('Y-m-d')){
                    $cal.="<td ><h4>$currentDayRel</h4><button class='btn btn-danger btn-xs' disabled>NA</a></td>";
                }
                else{
                    $slotstatus=$booking->get_timeslots($dayName,$date,$this->sportnames[$this->sport_id],$_SESSION['name']);
                    $openslots=0;
                    foreach ($slotstatus as $value) {
                        if ($value=="open") {
                            $openslots+=1;
                        }
                    }
                    if($openslots==0){
                        $cal.="<td class='$today'><h4>$currentDayRel</h4><a href='check.php?date=".$date."&sportname=".$this->sportnames[$this->sport_id]."&dayname=".$dayName."&uname=".$_SESSION['name']."' class='btn btn-danger btn-xs'> No Slots available</a></td>";
                    }else{
                        $cal.="<td class='$today'><h4>$currentDayRel</h4><a href='check.php?date=".$date."&sportname=".$this->sportnames[$this->sport_id]."&dayname=".$dayName."&uname=".$_SESSION['name']."' class='btn btn-success btn-xs'>".$openslots." available</a></td>";
                    }
                }
            
            //Incrementing the counters
             $currentDay++;
             $dayOfWeek++;
            }
            $cal.="</tr>";
            $cal.="</table></div>";
            
            $cal.="<a class='btn btn-primary btn-s rounded-right' href='../UserDashBoard/UserDashBoard.php'>Go To DashBoard</a></div></center>";
            $cal.="
        <br>
                
        <div class='container'>
        <hr>
        <table class=table table-bordered>";
            
            echo $cal;
        }

        // 
        // private function getFirstSport(){
        //     $stmt=$mysqli->prepare('select * from booking where MONTH(date)=? AND YEAR(date)=? ' );
        
        //     $stmt->bind_param('ss',$month,$year);
        //     $bookings=array();
        //     if($stmt->execute()){
        //         $result=$stmt->get_result();
        //         if($result->num_rows>0){
        //             while($row=$result->fetch_assoc()){
        //                 $bookings[]=$row['date'];
        //             }
        //             $stmt->close();
        //         }
        //     }
        

        // }
        // Check free slots
        function checkNumberOfBookings($mysqli,$date,$sport_id){
            $stmt=$mysqli->prepare("select * from bookings where date=? AND sport_id=?");
            $stmt->bind_param('si',$date,$sport_id);
            $totalBookings=0;
            if($stmt->execute()){
                $result=$stmt->get_result();
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $totalBookings++;
                    }
                    $stmt->close();
                }
            }
            return $totalBookings;
        }

    


}

?>