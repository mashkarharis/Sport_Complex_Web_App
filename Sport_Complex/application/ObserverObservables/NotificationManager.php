<?php
require_once __DIR__."/../model/Notification.php";
require_once __DIR__."/../model/Member.php";
require_once __DIR__."/Observable.php";
class NotificationManager extends Observable{
    
    private $observers=array();
    
    public function notifyallobservers($notification){
        $int=0;
        foreach($this->observers as $observer) {
            $int+=$observer->notify($notification);
        }
        return $int;
    }
    
    public function addobservers($obs){
        array_push($this->observers,$obs);
    }
    public function sendnotification($notification){
        $res=$notification->savenotification();
        if($res==true){
           $sent=$this->notifyallobservers($notification);
           if ($sent==count($this->observers)) {
               return true;
           }else{
               return false;
           }
        }
        else{
            return false;
        }        
    }
      
    
    
    
}

/* $id=microtime();
$notification=new Notification();
$notification->setid($id);
$notification->setsenderuname("Vimal432");
$notification->settitle("Testing");
$notification->setdesc("This is only for testing purpose");
$notification->settype("From_Admin");
$notification->setdatetime(date_create()->format('Y-m-d H:i:s'));


$manager=new NotificationManager();
$manager->addobservers(Member::getInstance("Vimal432"));
$manager->addobservers(Member::getInstance("rej12"));
echo $manager->sendnotification($notification);
 */



?>