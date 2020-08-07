<?php 
    session_start(); 
    $data=$_SESSION['data'];
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
  
  
  <title>Home</title>
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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="https://mobirise.co">
                        WEBAPP</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/c">free site builder</a></section><section class="carousel slide testimonials-slider cid-s16Pdq6JUp" data-interval="false" id="testimonials-slider1-4">
    
    

    

    <div class="container text-center">
        

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <div class="carousel-inner">
                
                
            <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                        <?php
                            echo('<img src="'.$data['imgname'].'" style="width:283px; height:300px;" class="img-responsive" alt="">');
                        ?>
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7"></p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $data['name'] ?>
                        </div>
                    </div>
                </div></div>

            
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-s16RHCqksQ" id="form1-5">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5">Confirm Remove</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="delete.php" method="POST" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Maximum Capacity</label>
                            <input type="text" name="src" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['imgname'] ?>" readonly>
                        </div>
                    </div>
                     <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Price Per Hour</label>
                            <input type="text" name="fee" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['fee'] ?>" id="uname" readonly>
                        </div>
                    </div>

                    

                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Monday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['mon_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Monday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['mon_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>


                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Tuesday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['tue_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Tuesday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['tue_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>


                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Wednesday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['wed_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Wednesday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['wed_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>

                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Thursday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['thu_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Thursday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['thu_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>

                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Friday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['fri_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Friday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['fri_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>

                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Saturday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['sat_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Saturday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['sat_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>

                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Sunday Open TIme</label>
                            <input type="text" name="fname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['sun_open_at'] ?>" id="fname"readonly>
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Sunday Close TIme</label>
                            <input type="text" name="lname" data-form-field="Name" required="required" class="form-control display-7" value="<?php echo $data['sun_close_at'] ?>" id="lname"readonly>
                        </div>
                    </div>

                    <div class="col-md-12 input-group-btn align-center"><button type="submit" name="button"  id="button" class="btn btn-form btn-success display-4">REMOVE</button></div>
                 	<a href="" id="blank"></a>
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

