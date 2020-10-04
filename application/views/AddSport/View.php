<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/web/assets/boot/boot.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/boot/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/boot/css/mbr-additional.css" type="text/css">



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

    <section class="engine"><a href="#">OOSD</a></section>
    <section class="carousel slide testimonials-slider cid-s16Pdq6JUp" data-interval="false" id="testimonials-slider1-4">





        <div class="container text-center">


            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
                <div class="carousel-inner">


                    <div class="carousel-item">
                        <div class="user col-md-8">


                            <div class="user_desk mbr-light mbr-fonts-style display-7">
                                Add Sport
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="mbr-section form1 cid-s16RHCqksQ" id="form1-5">





        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <!---Formbuilder Form--->




                    <form action="add.php" method="POST" class="mbr-form form-with-styler">
                        <div class="row">
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>

                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Sport Name</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name">
                            </div>
                        </div>

                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Price Per Hour</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' name="fee" id="fee" data-form-field="fee" required="required" class="form-control display-7">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Maximum Capacity</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' name="maxplay" data-form-field="Name" required="required" class="form-control display-7" id="maxplay">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Image Source</label>
                                <input type="text" name="src" data-form-field="Name" required="required" class="form-control display-7" id="src">
                            </div>
                        </div>





                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Monday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="mon_o" data-form-field="Name" required="required" class="form-control display-7" id="mon_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Monday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="mon_c" data-form-field="Name" required="required" class="form-control display-7" id="mon_c">
                            </div>
                        </div>




                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Tuesday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="tue_o" data-form-field="Name" required="required" class="form-control display-7" id="tue_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Tuesday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="tue_c" data-form-field="Name" required="required" class="form-control display-7" id="tue_c">
                            </div>
                        </div>



                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Wednesday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="wed_o" data-form-field="Name" required="required" class="form-control display-7" id="wed_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Wednesday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="wed_c" data-form-field="Name" required="required" class="form-control display-7" id="wed_c">
                            </div>
                        </div>



                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Thursday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="thu_o" data-form-field="Name" required="required" class="form-control display-7" id="thu_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Thursday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="thu_c" data-form-field="Name" required="required" class="form-control display-7" id="thu_c">
                            </div>
                        </div>



                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Friday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="fri_o" data-form-field="Name" required="required" class="form-control display-7" id="fri_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Friday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="fri_c" data-form-field="Name" required="required" class="form-control display-7" id="fri_c">
                            </div>
                        </div>



                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Saturday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="sat_o" data-form-field="Name" required="required" class="form-control display-7" id="sat_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Saturday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="sat_c" data-form-field="Name" required="required" class="form-control display-7" id="sat_c">
                            </div>
                        </div>



                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Sunday Open At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="sun_o" data-form-field="Name" required="required" class="form-control display-7" id="sun_o">

                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col  form-group" data-for="name">
                                <label for="name-form1-5" class="form-control-label mbr-fonts-style display-7">Sunday Close At</label>
                                <input type="number" onkeypress='return event.charCode<58 && event.charCode>47' step="1" max="24" min="00" name="sun_c" data-form-field="Name" required="required" class="form-control display-7" id="sun_c">
                            </div>
                        </div>

                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-success display-4">ADD</button></div>
                    </form>
                    <!---Formbuilder Form--->
                </div>
                <div class="col-md-12 input-group-btn align-center"><a class="btn btn-success display-4" href='./../AdminDashBoard/AdminDashBoard.php'>Go To DashBoard</a></div>
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


</body>

</html>
<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("conpassword");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>