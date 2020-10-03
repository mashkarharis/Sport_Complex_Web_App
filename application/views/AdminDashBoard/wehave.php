<?php
 require_once __DIR__."/../../controller/sportcontroller.php";
 require_once __DIR__."/../../controller/membercontroller.php";
 
 require_once __DIR__."/../../controller/bookingcontroller.php";
 $sportcontroller = new SportController();
 $membercontroller=new MemberController();
 $bookingcontroller=new bookingcontroller();

 $sportlist=$sportcontroller->get_data();
 $capacity=0;
 foreach($sportlist as $sport){
    $capacity+=$sport['maxplay'];
 }
 $listlength =count($sportlist);


 $members=$membercontroller->getallmemberdetails();
 $member_len=count($members);

 $bookings=$bookingcontroller->getallbookingdetails();
 $booking_total=count($bookings);


echo('<div class="container pt-4 mt-2">');
echo('<div class="media-container-row">');
echo('<div class="card p-3 align-center col-12 col-md-6 col-lg-3">');
echo('<div class="panel-item p-3">');
echo('<div class="card-img pb-3">');
echo('<span class="mbr-iconfont mbrib-users"></span>');
echo('</div>');

echo('<div class="card-text">');
echo('<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">');
echo("$member_len");
echo('</h3>');
echo('<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Members</h4>');
echo('<p class="mbr-content-text mbr-fonts-style display-7">');
echo('Members are our strength.&nbsp;</p>');
echo('</div>');
echo('</div>');
echo('</div>');


echo('<div class="card p-3 align-center col-12 col-md-6 col-lg-3">');
echo('<div class="panel-item p-3">');
echo('<div class="card-img pb-3">');
echo('<span class="mbr-iconfont mbri-setting"></span>');
echo('</div>');
echo('<div class="card-text">');
echo('<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">');
echo("$booking_total");
echo('</h3>');
echo('<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">');
echo('Bookings</h4>');
echo('<p class="mbr-content-text mbr-fonts-style display-7">');
echo('Best Game Need Best Players</p>');
echo('</div>');
echo('</div>');
echo('</div>');

echo('<div class="card p-3 align-center col-12 col-md-6 col-lg-3">');
echo('<div class="panel-item p-3">');
echo('<div class="card-img pb-3">');
echo('<span class="mbr-iconfont mbri-flag"></span>');
echo('</div>');
echo('<div class="card-text">');
echo('<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">');
echo("$listlength");
echo('</h3>');
echo('<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">');
echo('Sports</h4>');
echo('<p class="mbr-content-text mbr-fonts-style display-7">');
echo('This is our service</p>');
echo('</div>');
echo('</div>');
echo('</div>');


echo('<div class="card p-3 align-center col-12 col-md-6 col-lg-3">');
echo('<div class="panel-item p-3">');
echo('<div class="card-img pb-3">');
echo('<span class="mbr-iconfont mbri-rocket"></span>');
echo('</div>');

echo('<div class="card-texts">');
echo('<h3 class="count pt-3 pb-3 mbr-fonts-style display-2">');
echo("$capacity");
echo('</h3>');
echo('<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">');
echo('Capacity</h4>');
echo('<p class="mbr-content-text mbr-fonts-style display-7">');
echo('Number of persons can play at once</p>');
echo('</div>');
echo('</div>');
echo('</div>');

echo('</div>');
?>