<?php

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
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {

  background-position: 20px 20px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

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
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  
  
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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="https://mobirise.co">
                        WEBAPP</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
        </div>
    </nav>
    
    </section>

<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<h2 style="text-align:center" >All Member Details</h2>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for NIC.." title="Type in a name">
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<table id="myTable">
  <tr class="header">
    <th >NIC</th>
    <th >User Name</th>
    <th >First Name</th>
    <th >Last Name</th>
    <th >Email</th>
    <th >Mobile No</th>
    <th >Previlege</th>
    <th >Status</th>
  </tr>
  <?php 
  require_once __DIR__."/../../controller/membercontroller.controller.php";
  require_once __DIR__."/../../model/Member.model.php";
  $membercontroller = new MemberController();
  $list = $membercontroller->getallmemberdetails();
  foreach($list as $val){
      $nic = $val['nic'];
      $uname = $val['uname'];
      $fname = $val['fname'];
      $lname = $val['lname'];
      $email = $val['email'];
      $mobile = $val['mobile'];
      $previlege= $val['previlege'];
      $status = $val['status'];
      $password = $val['password'];
      echo('<tr>');
      echo('<td>'.$nic.'</td>');
      echo('<td>'.$uname.'</td>');
      echo('<td>'.$fname.'</td>');
      echo('<td>'.$lname.'</td>');
      echo('<td>'.$email.'</td>');
      echo('<td>'.$mobile.'</td>');
      echo('<td>'.$previlege.'</td>');
      echo('<td>'.$status.'</td>');
      echo('</tr>');
  }
  
  
  ?>
  
  </table>

<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>
<div class="vspace1em"></div>


<section once="footers" class="cid-s16SbPiVnb" id="footer6-6">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 OOSD- All Rights Reserved
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
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>