<?php
require_once __DIR__."/../DB/DAO.php";
abstract class Model{
    
    public function __construct(){
        $this->dao=DAO::getInstance();
    }
}