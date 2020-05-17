<?php
    session_start();
    $_SESSION['name']=$_SESSION['uname'];
    
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>AdminDashBoard</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top collapsed">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">
                        WEBAPP</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="AdminDashBoard.html#counters2-3">
                        <span class="mbri-watch mbr-iconfont mbr-iconfont-btn">

                        </span>My Basic Info &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> 
                        <a class="nav-link link text-white display-4" href="viewmydetails.php">
                        <span class="mbri-devices mbr-iconfont mbr-iconfont-btn">

                        </span>View/Edit Full Profile &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a>
                         <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-r"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Member Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-t"><span class="mbri-flag mbr-iconfont mbr-iconfont-btn"></span>Sport Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-v"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>Booking Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-11"><span class="mbri-rocket mbr-iconfont mbr-iconfont-btn"></span>Equipment Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a>   
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        </a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Log Out</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/p">web templates free download</a></section><section class="counters2 counters cid-rYz8nPfenH" id="counters2-3">

    

    

    <div class="container pt-4 mt-2">
        <div class="media-container-row">
            <div class="media-block" style="width: 25%;">
                <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">
                    Admin DashBoard</h2>
                <h3 class="mbr-section-subtitle pb-5 align-left mbr-fonts-style display-5">Welcome To AdminDashBoard</h3>
                <div class="mbr-figure">
                    <img src="assets/images/mbr-6.png" alt="" title="">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont pr-2 mbri-speed"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">1</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Privilege</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    <?php echo $_SESSION['privilege']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont pr-2 mbri-credit-card"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">2</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    NIC NO.</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['nic']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont pr-2 mbri-edit"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">3</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    User Name</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['uname']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont pr-2 mbri-briefcase"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">4</h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Email</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7"><?php echo $_SESSION['email']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="countdown1 cid-rYz9Tr8zMH" id="countdown1-j">
    
    
    
    <div class="container ">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Next Event</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5">
            Event of Annual Swimming Competition Will Star Within</h3>
        
    </div>
    <div class="container countdown-cont align-center">
        <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
        <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div> 
        <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div> 
        <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
        <div class="countdown pt-5 mt-2" data-due-date="2018/01/01"> 
        </div>
    </div>
</section>

<section class="counters1 counters cid-rYztgGjkR8" id="counters1-m">

    

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            We Have</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            Why you should choose us&nbsp;</h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbrib-users"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  100
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Members</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                Members are our strength.&nbsp;</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-setting"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  200
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Equipments</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                    Best Game Need Best Equipments</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-flag"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  300
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Sports</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                    This is our service</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-rocket"></span>
                        </div>

                        <div class="card-texts">
                             <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  400
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Capacity</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                    Number of persons can play at once</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<section class="mbr-section content4 cid-rYzvn5TyDQ" id="content4-r">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Manage Memeber Details</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    You Can Add,View,Remove,etc, Members</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-rYzuLmie8W" id="features1-n">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-success"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Approve Membership</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Approve membership of signed up guests</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit2"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Edit Member</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Edit Details of Members</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-close"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Remove Member</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Remove Member</p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="features1 cid-rYzuOfMLoQ" id="features1-o">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-print"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        View Full Member Details</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        View All details of member except password</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-clock"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Renew Membership</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Renew membership</p>
                </div>
            </div>

            

            

        </div>

    </div>

</section>

<section class="mbr-section info1 cid-rYzxdAYqgT" id="info1-s">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    Send Notification To Member</h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">Send Notification</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="https://mobirise.co">Send</a></div>
            </div>
        </div>
    </div>
</section>

<section class="section-table cid-rYzCMZI09H" id="table1-z">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Member List&nbsp;</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Basic member details</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NIC</th><th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      EMAIL</th><th class="head-item mbr-fonts-style display-7">
                      MOBILE NO.</th><th class="head-item mbr-fonts-style display-7">
                      PREVILEGE</th><th class="head-item mbr-fonts-style display-7">
                      STATUS</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">44</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td><td class="body-item mbr-fonts-style display-7">$317.000</td><td class="body-item mbr-fonts-style display-7">$317.000</td><td class="body-item mbr-fonts-style display-7">$317.000</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">35</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td><td class="body-item mbr-fonts-style display-7">$445.500</td><td class="body-item mbr-fonts-style display-7">$445.500</td><td class="body-item mbr-fonts-style display-7">$445.500</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">66</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td><td class="body-item mbr-fonts-style display-7">$152.558</td><td class="body-item mbr-fonts-style display-7">$152.558</td><td class="body-item mbr-fonts-style display-7">$152.558</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">70</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td><td class="body-item mbr-fonts-style display-7">$459.146</td><td class="body-item mbr-fonts-style display-7">$459.146</td><td class="body-item mbr-fonts-style display-7">$459.146</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="mbr-section content4 cid-rYzA3r0b8t" id="content4-t">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Manage Sports Details</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    You Can Add,View,Remove,etc, Sports</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-rYzA4pUBfv" id="features1-u">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-features"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Add new Sport</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Add new Sport to Complex</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Edit Sport</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Edit Details of Sport</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-close"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Remove Sport</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Remove Sport Form Complex</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbri-desktop mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        View Sport</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       View Sport Details</p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="section-table cid-rYzvaRJlb2" id="table1-q">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">
          Open Close Times</h2>
      
      <div class="table-wrapper">
        <div class="container">
          
        </div>

        <div class="container scroll">
          <table class="table" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">
                      NAME</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">Caren Rials</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">Leon Rogol</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">Shala Barrera</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          
        </div>
      </div>
    </div>
</section>

<section class="services5 cid-rYzuYHI6Ud" id="services5-p">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-5">
                    Sport Price Per Hour</h2>
                
            </div>
            <!--Card-1-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Watch 1
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                Rs.100</p>
                        </div>
                        <div class="bottom-line">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Card-2-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Watch 2
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                Rs.200</p>
                        </div>
                        <div class="bottom-line">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Card-3-->
            <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Watch 3
                            </h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                Rs.300</p>
                        </div>
                        <div class="bottom-line">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Card-4-->
            
            <!--Card-5-->
            
            <!--Card-6-->
            
            <!--Card-7-->
            
            <!--Card-8-->
            
            <!--Card-9-->
            
            <!--Card-10-->
            
            <!--Card-11-->
            
            <!--Card-12-->
            
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rYzAHOB1Cf" id="content4-v">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Manage Booking Details</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    You Can Add,View,Remove,etc, Bookings</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-rYzB9XtqtB" id="features1-w">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-pages"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">View Bookings</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Full Detail View of Booking</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-close"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Cancel Booking</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Cancel Booking</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-like"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Suggest Change In Booking</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Suggest A Change Without Cancel Booking</p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="section-table cid-rYzDLXNBpV" id="table1-10">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Booking List&nbsp;</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Basic Booking Details</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">BID</th><th class="head-item mbr-fonts-style display-7">
                      Person</th><th class="head-item mbr-fonts-style display-7">
                      Sport</th><th class="head-item mbr-fonts-style display-7">
                      Date</th><th class="head-item mbr-fonts-style display-7">
                      Time</th><th class="head-item mbr-fonts-style display-7">
                      Status</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">44</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td><td class="body-item mbr-fonts-style display-7">$317.000</td><td class="body-item mbr-fonts-style display-7">$317.000</td><td class="body-item mbr-fonts-style display-7">$317.000</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">35</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td><td class="body-item mbr-fonts-style display-7">$445.500</td><td class="body-item mbr-fonts-style display-7">$445.500</td><td class="body-item mbr-fonts-style display-7">$445.500</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">66</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td><td class="body-item mbr-fonts-style display-7">$152.558</td><td class="body-item mbr-fonts-style display-7">$152.558</td><td class="body-item mbr-fonts-style display-7">$152.558</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">70</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td><td class="body-item mbr-fonts-style display-7">$459.146</td><td class="body-item mbr-fonts-style display-7">$459.146</td><td class="body-item mbr-fonts-style display-7">$459.146</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="mbr-section content4 cid-rYzEiFZgbD" id="content4-11">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Manage Equipments Details</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    You Can Add,View,Remove,etc, Equipment</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-rYzEysDYEG" id="features1-13">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-features"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Add new Equipment</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Add new Equipment to Complex</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Edit Equipment</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Edit Details of Equipment</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-close"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Remove Equipment</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Remove Equipment From Complex</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbri-desktop mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        View Equipment</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       View Equipment Details</p>
                </div>
            </div>

        </div>

    </div>

</section>

<section once="footers" class="cid-rYzEVoRgni" id="footer6-14">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2020 OOSD - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/countdown/jquery.countdown.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>