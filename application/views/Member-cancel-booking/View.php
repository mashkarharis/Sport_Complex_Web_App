<?php session_start();
$_SESSION['uname']=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html  >
<head>
  <title>Booking</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="html2canvas.js"></script>
  <script>

	

  </script>
  
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
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5">Remove Booking</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="remove.php" method="POST" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                    
                        <div class="col  form-group" data-for="Date">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Date Of Booking</label>
                            <input type="Date"  name="Date" id="Date" data-form-field="Date" required="required" class="form-control display-7"  id="Date" >
                        </div>
                        <div class="col  form-group" data-for="Time">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Booking Start Hour (24-Format) </label>
                            <input type="number" onkeypress='return event.charCode < -1' step="1" max="24" min="00" name="Time" id="Time" data-form-field="Time" required="required" class="form-control display-7"  id="Time" >
                        </div>
                    </div>

                    <div class="col-md-12 input-group-btn align-center"><button type="submit" name="button"  id="button" class="btn btn-form btn-success display-4">REMOVE</button></div>
                 	
                 </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
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

