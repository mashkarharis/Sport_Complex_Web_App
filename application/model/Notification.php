<?php
require_once __DIR__."/../DB/DAO.php";
class Notification{
    
    private $notification_id;
    private $senderuname;
    private $title;
    private $description;
    private $type;
    private $datetime;
    
    
    public function setid($id){$this->notification_id=$id;}
    public function getid(){return $this->notification_id;}
    
    public function setsenderuname($name){$this->senderuname=$name;}
    public function getsenderuname(){return $this->senderuname;}
    
    public function settitle($title){$this->title=$title;}
    public function gettitle(){return $this->title;}
    
    
    public function setdesc($desc){$this->description=$desc;}
    public function getdesc(){return $this->description;}
    
    public function settype($type){$this->type=$type;}
    public function gettype(){return $this->type;}
    
    public function setdatetime($datetime){$this->datetime=$datetime;}
    public function getdatetime(){return $this->datetime;}
    
    public function getdao(){
        return DAO::getInstance();
    }
    
    public function savenotification(){
        try {
            $id=$this->getid();
            $sender=$this->getsenderuname();
            $title=$this->gettitle();
            $desc=$this->getdesc();
            $type=$this->gettype();
            $time=$this->getdatetime();
            
            
            $sql ="insert into notifications (notification_id,senderuname,title,description,type,datetime)
            values ('$id','$sender','$title','$desc','$type','$time')";
            $message="Message Store Failed ...";
            $this->getdao()->execute($sql,$message);
            return true;
            
        } catch (Exception $ex){
            return false;
        }
        
        
        
    }
    public function getmynotificationids($uname){
        try {
            $list=array();
            $sql ="select notification_id from mailbox where receiveruname ='$uname'";
            $message="Message Fetching Failed ...";
            $result=$this->getdao()->execute($sql,$message);
            
            while($row = $result->fetch_assoc()) {
                $object = (new Notification());
                $object->setid($row['notification_id']);
                array_push($list, $object);
            }
            return $list;
            
        } catch (Exception $ex){
            return array();
        }
        
    }
    public function fetchdata($list){
        try {
            
            foreach ($list as $notification) {
                
                $id=$notification->getid();
                $sql ="select * from notifications where notification_id = '$id' ";
                $message="Members Data Loading Failed";
                $result=$this->getdao()->execute($sql,$message);
                $row = $result->fetch_assoc();
                $notification->setsenderuname($row['senderuname']);
                $notification->settitle($row['title']);
                $notification->setdesc($row['description']);
                $notification->settype($row['type']);
                $notification->setdatetime($row['datetime']);
                
            }
           
            return $list;
            
        } catch (Exception $ex){
            return $list;
        }
    }
    
    
    
    
}






?>