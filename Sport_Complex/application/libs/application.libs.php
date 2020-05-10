<?php
require __DIR__.'/../controller/urlcontroller.controller.php';
class Application{
    public function start(){
        session_start();
        error_reporting(0);
        $url=new URLController();
        $url->loadhompage();
        

    }
}


?>
