<?php session_start(); 
$_SESSION['uname']=$_SESSION['name'];
?>
<!DOCTYPE html>
<html  >
<head>
  <title>HandleRequest</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="html2canvas.js"></script>
<style>
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
div.vspace1em {
        clear: both;
        height: 1em;
}
</style>
  
</head>
<body>
<div id="screenshot">
  <section class="menu cid-s16OMeKKiW" once="menu" id="menu2-1">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="#">
                        WEBAPP</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
        </div>
    </nav>
</section>



<section class="mbr-section form1 cid-s16RHCqksQ" id="form1-5">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5">Handle Requests</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="Handle.php" method="POST" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
<table id="myTable">
  <tr class="header">
    <th >NIC</th>
    <th >User Name</th>
    <th >First Name</th>
    <th >Last Name</th>
    <th >Email</th>
    <th >Mobile No</th>
    <th >Approve Membership Request</th>
    <th >Reject Membership Request</th>
  </tr>
                    <?php 
                    $data=$_SESSION['pendinglist'];
                    foreach($data as $val) {
                        
                        $nic = $val['nicnumber'];
                        $uname = $val['user_name'];
                        $fname = $val['first_name'];
                        $lname = $val['last_name'];
                        $email = $val['email'];
                        $mobile = $val['mobile_no'];
                        $previlege= $val['previlege'];
                        echo('<tr>');
                        echo('<td>'.$nic.'</td>');
                        echo('<td>'.$uname.'</td>');
                        echo('<td>'.$fname.'</td>');
                        echo('<td>'.$lname.'</td>');
                        echo('<td>'.$email.'</td>');
                        echo('<td>'.$mobile.'</td>');
                        echo('<td><a style="color:green;font-size:18px;" href="approve.php?user_name='.$uname.' ">Approve</a></td>');
                        echo('<td><a style="color:red;font-size:18px;" href="notApprove.php?user_name='.$uname.' ">Reject</a></td>');
            
                        echo('</tr>');
            
                    }
                    ?>
</table>
                    

            </div>
        </div>
    </div>
    
    <section class="engine"><a href="#">portfolio site templates</a></section><section class="header1 cid-s1FE8xQoI3" id="header16-a">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
               <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4" href="../AdminDashBoard/AdminDashBoard.php">Go To DashBoard</a></div>
            </div>
        </div>
    </div>

</section>
    
    
    
    
    
    
    
    
    
    
            
</section>

<section once="footers" class="cid-s16SbPiVnb" id="footer6-6">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    � Copyright 2019 OOSD- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</div>
</body>
</html>

