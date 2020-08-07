<?php

require_once __DIR__."/../model/Member.php";
require_once __DIR__."/../model/Notification.php";
require_once __DIR__."/../ObserverObservables/NotificationManager.php";
require_once __DIR__."/../controller/urlcontroller.php";

require_once __DIR__."/../ModelFactory/MemberFactory.php";
require_once __DIR__."/../ModelFactory/AdminMemberFactory.php";
require_once __DIR__."/../ModelFactory/UserMemberFactory.php";
require_once __DIR__."/../ModelFactory/Factory.php";

class NotificationController {
    public function adminsendmessage($sendername,$receiverlist,$title,$message){
        
        $id=microtime();
        $notification=new Notification();
        $notification->setid($id);
        $notification->setsenderuname($sendername);
        $notification->settitle($title);
        $notification->setdesc($message);
        $notification->settype("From_Admin");
        $notification->setdatetime(date_create()->format('Y-m-d H:i:s'));
        
        $Factory=new MemberFactory();
        $manager=new NotificationManager();
        foreach ($receiverlist as $uname) {
            $manager->addobservers($Factory->getInstance($uname));
        }
        $url = new URLController();
        if($manager->sendnotification($notification)){$url->loadwithmessage("Success","Sent Notifications To All Selected");}
        else{$url->loadwithmessage("Failed","Sent Failed To Some Members");}
    }
    public function membersendmessage($sendername,$receiverlist,$title,$message){
        
        $id=microtime();
        $notification=new Notification();
        $notification->setid($id);
        $notification->setsenderuname($sendername);
        $notification->settitle($title);
        $notification->setdesc($message);
        $notification->settype("From_Member");
        $notification->setdatetime(date_create()->format('Y-m-d H:i:s'));
        
        $Factory=new MemberFactory();
        $manager=new NotificationManager();
        foreach ($receiverlist as $uname) {
            $manager->addobservers($Factory->getInstance($uname));
        }
        $url = new URLController();
        if($manager->sendnotification($notification)){$url->loadwithmessage("Success","Sent Notifications To All Selected");}
        else{$url->loadwithmessage("Failed","Sent Failed To Some Members");}
    }
    
    public function getallnotifications($uname){
        $notification=new Notification();
        $list=$notification->getmynotificationids($uname);
        $notificationlist=$notification->fetchdata($list);
        
        return $notificationlist;
    } 
}


?>