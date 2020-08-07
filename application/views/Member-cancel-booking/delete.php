<?php

session_start();
require_once __DIR__."/../../controller/bookingcontroller.php";

$booking = new bookingcontroller();
$booking->deletebooking($_SESSION['booking_id']);

?>