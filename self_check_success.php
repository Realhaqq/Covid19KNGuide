<?php
session_start();
  extract($_GET);
  extract($_POST);
  extract($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.designing-world.com/suha-v1.1.0/payment-success.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:58:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>COVID19 - </title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="home"><i class="lni-arrow-left"></i>Back</a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">SelfCheck Success</h6>
        </div>
        <!-- Navbar Toggler-->
        <!--<div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>-->
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">Suha Jannat</h6>
          <p class="available-balance">Balance <span>$<span class="counter">379.23</span></span></p>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav">
        <li><a href="profile.html"><i class="lni-user"></i>My Profile</a></li>
        <li><a href="notifications.html"><i class="lni-alarm lni-tada-effect"></i>Notifications<span class="ml-3 badge badge-warning">3</span></a></li>
        <li><a href="pages.html"><i class="lni-empty-file"></i>All Pages</a></li>
        <li><a href="wishlist-grid.html"><i class="lni-heart-filled"></i>My Wishlist</a></li>
        <li><a href="settings.html"><i class="lni-cog"></i>Settings</a></li>
        <li><a href="intro.html"><i class="lni-power-switch"></i>Sign Out</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Order/Payment Success-->
      <div class="order-success-wrapper">
        <div class="content"><i class="lni-check-mark-circle lni-flashing-effect"></i>
          <h5>Check Done</h5>
          <p><?php echo $_SESSION['response'];?></p>
        </div>
      </div>
    </div>
    <!-- Footer Nav-->
    <!--<div class="footer-nav-area" id="footerNav">-->
    <!--  <div class="suha-footer-nav h-100">-->
    <!--    <ul class="h-100 d-flex align-items-center justify-content-between">-->
    <!--      <li class="active"><a href="home.html"><img src="img/core-img/home.png" alt="Home">Home</a></li>-->
    <!--      <li><a href="message.html"><img src="img/core-img/chat.png" alt="Message">Support</a></li>-->
    <!--      <li><a href="cart.html"><img src="img/core-img/cart.png" alt="Cart">Cart</a></li>-->
    <!--      <li><a href="pages.html"><img src="img/core-img/heart.png" alt="Pages">Pages</a></li>-->
    <!--      <li><a href="settings.html"><img src="img/core-img/setting.png" alt="Settings">Settings</a></li>-->
    <!--    </ul>-->
    <!--  </div>-->
    <!--</div>-->
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

<!-- Mirrored from demo.designing-world.com/suha-v1.1.0/payment-success.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:58:22 GMT -->
</html>