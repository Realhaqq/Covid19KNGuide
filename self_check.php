<?php
session_start();
  extract($_GET);
  extract($_POST);
  extract($_SESSION);
include 'config/connection.php';?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.designing-world.com/suha-v1.1.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:55:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>COVID19 - StartupKano</title>
    <!-- Favicon-->
    <link rel="png" href="http://startupkano.com/wp-content/uploads/2020/01/cropped-STARTUPKANO-pyramid-192x192-1-e1585851275967.png">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Preloader-->
    <!--<div class="preloader" id="preloader">-->
    <!--  <div class="spinner-grow text-secondary" role="status">-->
    <!--    <div class="sr-only">Loading...</div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="home"><img src="http://startupkano.com/wp-content/uploads/2020/01/cropped-STARTUPKANO-pyramid-192x192-1-e1585851275967.png" alt=""> <b> COVID19 KN GUIDE</b></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
          <form action="#" method="POST">
            <!--<input class="form-control" type="search" placeholder="Enter your keyword">-->
            <!--<button type="submit"><i class="fa fa-search"></i></button>-->
          </form>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="img/kano.png" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">COVID19 GUIDE</h6>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav">
        <li><a href="#"><i class="lni-user"></i>Developers</a></li>
        
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">

    
    
    <?php  if(isset($_POST['check_form'])){
        // echo $_POST['name'];
               $_SESSION['name'] = $name;
               $_SESSION['address'] = $address;
               $_SESSION['suspect_name'] = $suspect_name;
               $_SESSION['age'] = $age;
               $_SESSION['phone'] = $phone;
               
            //   header("Location: _self_check.");
               
               echo '<script>location = "_self_check";</script>';
           }?>


                     <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
              <div class="card">
              <div class="card-header">            
             Self Check
          </div>
                <div class="card-body">
                    
                    <br>
                    
                    
                    <form action="" method="POST">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                          <div class="form-group">
                            <label>Traceable Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        
                          <div class="form-group">
                            <label>Suspect Name</label>
                            <input type="text" name="suspect_name" class="form-control">
                        </div>
                        
                          <div class="form-group">
                            <label>Suspect's Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="check_form">Submit</button>
                    </form>

                </div>
                </div>
              </div>
            </div>               
      
            <br>
            <br>
            <br>
            <br>
            
            
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav h-100">
        <ul class="h-100 d-flex align-items-center justify-content-between">
          <li ><a href="home"><img src="img/core-img/home.png" alt="Home">Dashboard</a></li>
          <li><a href="hotlines"><img src="img/call.png" alt="Message">Hotlines</a></li>
        
          <li class="active"><a href="news"><img src="img/news.png" alt="Pages">News</a></li>
    
          
            <li><a href="self_check"><img src="img/check.png" alt="Cart">Self Check</a></li>
        </ul>
      </div>
    </div>
    
    

    <!-- All JavaScript Files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/default/active.js"></script>
  </body>

<!-- Mirrored from demo.designing-world.com/suha-v1.1.0/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:56:41 GMT -->
</html>