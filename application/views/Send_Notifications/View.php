<?php
session_start();

//$_SESSION['sendername']

?>
<!DOCTYPE html>
<html  >
<head>
  <title>Send</title>
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

<section class="engine"><a href="#">bootstrap template</a></section><section class="mbr-section form1 cid-s16RHCqksQ" id="form1-5">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5"><strong>Send Message</strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Since You Are Admin You Can Send Messages To Anyone</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
                <form action="sendit.php" method="POST" class="mbr-form form-with-styler">
                
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-12  form-group" data-for="name">
                            <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Title</label>
                            <input type="text" name="title" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-5">
                        </div>
                        <div class="col-md-12  form-group" data-for="email">
                            <label for="email-form1-5" class="form-control-label mbr-fonts-style display-7">To (Use Ctrl+<Click> to select Multiple)</label>
                        </div>
                        <div class="col-md-12  form-group" data-for="email">
                            <script>
                            $(".chosen-select").chosen({
                            	  no_results_text: "Oops, nothing found!"
                            })

							</script>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
							<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
							<style>
                            
                            #wgtmsr{
                                width:100%;   
                            }
                            #wgtmsr option{
                                width:100%;   
                            }
                            </style>
 							 <select data-placeholder="Begin typing a name to filter..." id="wgtmsr" multiple class="chosen-select" name="list[]" required>
  								 <?php 
  require_once __DIR__."/../../controller/membercontroller.php";
  require_once __DIR__."/../../model/Member.php";
  $membercontroller = new MemberController();
  $list = $membercontroller->getallmemberdetails();
  foreach($list as $val){
      $uname = $val['uname'];
      echo('<option>'.$uname.'</option>');
  }
  
  
                                ?>
  								</select>

                        </div>
                        
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-5" class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-5"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-success display-4">SEND</button></div>
                    </div>
                    
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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>