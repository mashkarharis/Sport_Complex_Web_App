<?php

abstract class Observable{
    
    public abstract function notifyallobservers($notification);
    public abstract function addobservers($obs);
    
}








?>