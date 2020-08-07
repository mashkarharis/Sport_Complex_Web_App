<?php
?>
<!DOCTYPE html>
<html  >
<head>
  
  <title>Message</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rYuC0ylxOn" once="menu" id="menu2-4">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4">
                        WebApp</a></span>
            </div>
        </div>
        
    </nav>
</section>

<section class="engine"></section><section class="header5 cid-rYuC8aavKk mbr-fullscreen" id="header5-5">

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">
                <?php 
                session_start();
                echo $_SESSION['msg_title'] ?></h2>
                <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style"><?php 
                echo $_SESSION['msg_body'] ?></p>
                
            </div>
        </div>
    </div>

    
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>