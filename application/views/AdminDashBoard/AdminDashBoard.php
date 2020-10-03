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
                         <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-r"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Member Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-t"><span class="mbri-flag mbr-iconfont mbr-iconfont-btn"></span>Sport Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-v"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>Booking Section &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a> <a class="nav-link link text-white display-4" href="AdminDashBoard.html#content4-11"></a>   
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

<section class="counters2 counters cid-rYz8nPfenH" id="counters2-3">

    

    

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
<div style="height: 70px; background-color: #b2ccd2;"></div>
<section class="counters1 counters cid-rYztgGjkR8" id="counters1-m">

    

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            We Have</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            Why you should choose us&nbsp;</h3>

        <?php include_once "wehave.php"; ?>   
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
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="sendnotifications.php">Send</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info1 cid-rYzxdAYqgT" id="info1-s">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    My Mail Box</h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">Check Your Mails</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="mailbox.php">MailBox</a></div>
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
                    <a href='approve.php'><span class="mbr-iconfont mbri-success"></span></a>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Approve Membership</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Approve membership of signed up guests</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                <a href='viewfullmemberdetails.php'><span class="mbr-iconfont mbri-print"></span></a>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        View Full Member Details</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        View All details of member except password</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <a href='removemember.php'><span class="mbr-iconfont mbri-close"></span></a>
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

<div style="height: 70px; background-color: #b2ccd2;"></div>


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
                <a href="Addsport.php"><span class="mbr-iconfont mbri-features"></span></a>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Add new Sport</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Add new Sport to Complex</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <a href="EditSport.php"><span class="mbr-iconfont mbri-edit"></span></a>
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
                <a href="removesports.php"><span class="mbr-iconfont mbri-close"></span></a>
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
                    <a href="viewsports.php"><span class="mbri-desktop mbr-iconfont"></span></a>
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
<div style="height: 70px; background-color: #b2ccd2;"></div>

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
                    <a href='viewbookings.php'><span class="mbr-iconfont mbri-pages"></span></a>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">View Bookings</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Full Detail View of Booking</p>
                </div>
            </div>


            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                <a href='sendnotifications.php'><span class="mbr-iconfont mbri-like"></span></a>
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
 

<div style="height: 70px; background-color: #b2ccd2;"></div>
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