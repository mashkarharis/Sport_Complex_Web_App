<?php
require_once __DIR__."/../../controller/sportcontroller.php";
require_once __DIR__."/../../model/Sport.php";
$sportcontroller = new SportController();    
$list =$sportcontroller->get_data();
foreach($list as $row){
    echo('<div class="media-container-row" style="border-style: dotted;margin-bottom:40px;
    border: 3px solid grey;
    border-radius: 655px;">');
    echo('<div class="card" style="width: 18rem; margin-top:80px;margin-right:30px;border-style: dotted;margin-bottom:40px;
    border: 3px solid lightgrey;
    border-radius: 5px;">');
    echo('<img src="'.$row['imgname'].'" style="width:283px; height:300px;" class="img-responsive" alt="">');
    echo('</div>');
    echo('<div class="card" style="width: 18rem; margin-top:40px;margin-bottom:40px;">');
    echo('<div class="card-body">');
    echo('<h5 class="card-title" style="font-weight:bold;color:blue;">'.$row['name'].'</h5>');
    echo('</div>');
    echo('<ul class="list-group list-group-flush">');
    echo('<li class="list-group-item">Price per hour Rs.'.$row['fee'].'</li>');
    echo('<li class="list-group-item">Capacity '.$row['maxplay'].' Players</li>');
    echo('<li class="list-group-item"  style="font-weight:bold;"><u>Open Close Times</u></li>');
    echo('</ul>');
    echo('<a style="color:grey;">Monday from '.$row['mon_open_at'].' to '.$row['mon_close_at'].'</a>');
    echo('<a style="color:grey;">Tuesday from '.$row['tue_open_at'].' to '.$row['tue_close_at'].'</a>');
    echo('<a style="color:grey;">Wednesday from '.$row['wed_open_at'].' to '.$row['wed_close_at'].'</a>');
    echo('<a style="color:grey;">Thursday from '.$row['thu_open_at'].' to '.$row['thu_close_at'].'</a>');
    echo('<a style="color:grey;">Friday from '.$row['fri_open_at'].' to '.$row['fri_close_at'].'</a>');
    echo('<a style="color:grey;">Saturday from '.$row['sat_open_at'].' to '.$row['sat_close_at'].'</a>');
    echo('<a style="color:grey;">Sunday from '.$row['sun_open_at'].' to '.$row['sun_close_at'].'</a>');
    
    echo('</div>');
    echo('</div>');
}
?>