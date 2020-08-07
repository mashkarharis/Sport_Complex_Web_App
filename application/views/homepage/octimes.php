<?php
    require_once __DIR__."/../../controller/sportcontroller.php";
    require_once __DIR__."/../../model/Sport.php";
    $sportcontroller = new SportController();    
    $list =$sportcontroller->get_data_for_set_price();
    foreach($list as $val){
        $image = $val['imgname'];
        $name = $val['name'];
        $fee = $val['fee'];
        echo ('<div class="col-md-4 col-sm-6 item">');
            echo ('<div class="facility-item">');
            echo ('<img src="images/'.$image.'"  class="img-responsive" alt="">');
            echo ('<div class="facility-overlay">');
                  
            echo ('</div>');
            echo ('</div>');
            echo ('<p>');
            echo($name);
            echo('</p>');
            echo ('<h3>');
            echo($fee);echo('.00/= LKR/HR</h3>');
        echo ('</div>');
    }
?>