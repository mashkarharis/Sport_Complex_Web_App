<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp</title>

    <!-- libs -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- custom css -->
    
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- pre loader -->
    <div class="preloader">
        <div class="spinner">
             <span class="sk-inner-circle"></span>
        </div>
   </div>
   <!-- MENU -->
    <div class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <!-- NAVBAR HEADER -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <!-- lOGO -->
                <a href="index.php" class="navbar-brand">WebApp</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#facility" class="smoothScroll">Our Sports</a></li>  
                    <li><a href="#service" class="smoothScroll">Services</a></li>
                    <li><a href="#aboutus" class="smoothScroll">About Us</a></li>
                    <?php 
                    session_start();
                    if(!isset($_SESSION['uname'])){
                    
                        echo('<li><a href="#login" class="smoothScroll" data-toggle="modal">LogIn</a></li>');
                    
                        echo('<li><a href="#signup" class="smoothScroll" data-toggle="modal">SignUp</a></li>');
                    
                    }
                    elseif($_SESSION['privilege']=="admin"){
                        
                        echo('<a >Logged In As : '.$_SESSION['uname'].'</a>');
                        echo('<li><a href="../AdminDashBoard/AdminDashBoard.php" class="smoothScroll" data-toggle="modal">Admin DashBoard</a></li>');
                        echo('<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a></div>');
                    
                    }
                    elseif($_SESSION['privilege']=="user"){
                        
                        echo('<a >Logged In As : '.$_SESSION['uname'].'</a>');
                        echo('<li><a href="../UserDashBoard/UserDashBoard.php" class="smoothScroll" data-toggle="modal">User DashBoard</a></li>');
                        echo('<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a></div>');
                    
                    }
                    
                    ?>

                </ul>
            </div>

        </div>
    </div>
    <!-- HOME -->
    <section id="home" class="parallax-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                            <h1>WELCOME</h1>
                            <p>Official Website of Sport Complex</p>
                            <p>"Actions Are By Intentions"</p>
                            
                    </div>
                </div>

            </div>
        </div>

        <img src="./images/hmpg.jpg" alt="">
    </section>
    
    <!-- Sign in -->

    <div id="login" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="signinform.php" method="post" >
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" name="uname" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="required">					
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Sign In">
                        </div>
                    </form>				
                    
                </div>
                <div class="modal-footer">
                    <a href="forgetpwd.html">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div> 
    <!-- sign up -->
    <div id="signup" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h4 class="modal-title">Sign Up</h4>
                    <h5>Please fill the form to sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="signupform.php" method="post">
                    


                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" name="id" placeholder="NIC" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" name="uname" placeholder="User Name" required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                            <small style="color: slategray;">*we will not share your email ID with others</small>
                        </div>
                        
                        <div class="form-group">
                            <i class="fa fa-mobile"></i>
                            <input type="text" class="form-control" name="contact" placeholder="Mobile Number" required="required">
                            <small style="color: slategray;">*we will not share your mobile with others</small>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="required">					
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" required="required">					
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="termsandcondition.html">Terms of Use</a> &amp; <a href="privacypolicy.html">Privacy Policy</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="SignUp">
                        </div>
                    </form>				
                    
                </div>
                
            </div>
        </div>
    </div> 
<script>
var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

     <!-- Facilities -->
     <section id="facility" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                            <h1>Our Sports</h1>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div id="owl-facility" class="owl-carousel">
                    <?php include_once "octimes.php"; ?>
                </div>

            </div>
        </div>
    </section>
    
    <!-- O/C Times -->
    <!-- services -->
    <section id="service" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                            <h1>Our Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-4 col-sm-6">
                      <h2>Coaching</h2>
                      <span class="fa fa-compass service-icon"></span>
                      <p>We Are always try to enhance your skills.<br> Hence in our place we give you <br> coaching for every sports. <br> We try to do our best for you ! </p>
                      
                      
                 </div>
                 <div class="col-md-4 col-sm-6">
                      <h2>Ontime payment</h2>
                      <span class="fa fa-credit-card service-icon"></span>
                      <p>We know most of people can't follow strict schedule. <br> That is why we offer you best price per hour through ontime payment system.<br> No need to worry, you can pay for what you play</p>
                      
                      
                 </div>
                 <div class="col-md-4 col-sm-6">
                      <h2>New Equipments</h2>
                      <span class="fa fa-cubes service-icon"></span>
                      <p>We are here for you with latest equipmets.<br> We would like to give you the best of the best.</p>
                      
                      
                 </div>
  
                 
                 
            </div>
       </div>

    </section>
    <!-- Testimonials -->


<!-- FOOTER -->
    <footer>
        <div id="aboutus" class="container">
            <div class="row">


                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Our mission</h2>
                            <i class="fa fa-adjust" style="font-size: 50px;"></i>
                            <p>Our Mission is to serve our cutomers with high quality experience in sport sector.</p>
                        </div>
                        <div class="col-md-4">
                            <h2>Our Vision</h2>
                            <i class="fa fa-empire" style="font-size: 50px;"></i>
                            <p>Our vision is to become the one of qualitiest sport service provider in the country with large amount of members.</p>
                        </div>

                        <div class="col-md-4">
                        <div class="footer-info">
                        <h2>Our Contacts</h2>
                        <ul class="social-icon">
                     <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                     <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                     </ul>
                     <ul class="social-icon">
                         <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                    </ul>
                         <p>Call Us  : <a href="">091XXXXXXX</a></p>
                         <p>Email Us : <a href="">info@company.com</a></p>
                         
                    </div></div>


                        




                        
                    </div>
                </div>
               <br>
               <br>

              

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                            <p>Copyright © 2020 Sport Complex  
                            
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </footer>
    <!-- scripts  -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    
    <!-- Sweet alert js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(()=>{
            Swal.fire({
                title: 'New Event!',
                text: 'Hurry Up and register',
                imageUrl: 'images/ad.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
               
            })
        });
    </script>
</body>
</html>                         
