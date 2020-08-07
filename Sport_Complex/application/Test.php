<?php
$arr=array();
$conn = new mysqli('127.0.0.1:3308','root','1234','webapp');
$a1=array($conn,"A");
array_push($arr,$a1);
$conn = new mysqli('127.0.0.1:3308','root','1234','webapp');
$a2=array($conn,"B");
array_push($arr,$a2);
echo(count($arr));