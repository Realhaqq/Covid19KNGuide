<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
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

            
           

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://newsapi.org/v2/everything?sortBy=publishedAt&apiKey=b9a73a0b219f495995f00201dbfd426e&pageSize=100&page=1&q=kano&language=en",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cookie: __cfduid=d6a28b26451267e6ba6950c69649e346d1586991682"
  ),
));

$response = curl_exec($curl);
 $result = json_decode($response, true);
curl_close($curl);
foreach($result['articles'] as $name) { 
    


// foreach($result['source'] As $articles){
?>              
                     <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
              <div class="card">
              <div class="card-header" style="background-image: url('<?php echo $name['urlToImage'];?>');">            
              <img src="img/kano.png" width="50px">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                  </div>
                <div class="card-body">

              
                             <p><a target="_blank" href="<?php echo $name['url'];?>"><?php echo $name['title'];?></a><hr>
                             
                             * <?php 
                             
                             echo time_ago_in_php($name['publishedAt']);?>


                             </p>
                        
       
                </div>
                </div>
              </div>
            </div>               
    <?php
    
    }
    
    ?>                 
               
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
    
    
    <?php
    function time_ago_in_php($timestamp){
  
  date_default_timezone_set("Asia/Kolkata");         
  $time_ago        = strtotime($timestamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
  
  $minutes = round($seconds / 60); // value 60 is seconds  
  $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
  $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
  $weeks   = round($seconds / 604800); // 7*24*60*60;  
  $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
  $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
                
  if ($seconds <= 60){

    return "Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      return "one minute ago";

    } else {

      return "$minutes minutes ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "an hour ago";

    } else {

      return "$hours hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

      return "yesterday";

    } else {

      return "$days days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "a week ago";

    } else {

      return "$weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "a month ago";

    } else {

      return "$months months ago";

    }

  } else {
    
    if ($years == 1){

      return "one year ago";

    } else {

      return "$years years ago";

    }
  }
}
    
    ?>
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