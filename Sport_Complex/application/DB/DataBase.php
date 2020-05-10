<?php 

class DBaseData{
    
    
    private  $servername = 'localhost';
    private  $password = '1234';
    private  $databasename = 'webapp';
    private  $user= 'root';
    
    public function get_data(){
        return array($this->servername,$this->user,$this->password,$this->databasename);
    }
    
    
}
?>