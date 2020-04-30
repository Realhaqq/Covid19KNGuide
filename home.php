<?php include 'config/connection.php';?>

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
    
    <link rel="stylesheet" type="text/css" href="css/addtohomescreen.css">
<script src="js/addtohomescreen.js"></script>
<script>
addToHomescreen();
</script>
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
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="home"><img src="http://startupkano.com/wp-content/uploads/2020/01/cropped-STARTUPKANO-pyramid-192x192-1-e1585851275967.png" alt=""> <b>COVID19 KN GUIDE</b></a></div>
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
$query_cases = $dBASE->query("SELECT * FROM cases WHERE id='1'");
$row_case = $query_cases->fetch_array();
?>
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="col-8">
                  <center>
                      <br><br><br><br>
                  <h1><?php echo $row_case['total_reported'];?></h1>
                  <p>Total Cases Reported</p>
                  </center>
                 
                  
                  </div>
                  <div class="col-4">
                      <h5><?php echo $row_case['total_confirmed'];?></h5>
                    <p style="color: yellow;">Active</p><hr>
                   
                   
                     <h5><?php echo $row_case['total_recovered'];?></h5>
                    <p style="color: green;">Recovered</p><hr>
                   
                   
                     <h5><?php echo $row_case['total_death'];?></h5>
                    <p style="color: red;">Deaths</p>
                   
                </div>
                </div>
                
                <p>Tap on statistic on the right side for more information:
                <br>
                Data source: https://covid19.ncdc.gov.ng/</p>
              </div>
            </div>
            </div>
            </div>
            
            
            <!-- Kano Cases-->
<?php 
$query_kn_cases = $dBASE->query("SELECT * FROM state_cases WHERE state='KANO'");
$row_kn_case = $query_kn_cases->fetch_array();
?>            
              <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
              <div class="card">
                <div class="card-body">
                 
                 <center>
                     <b>Kano State</b><br>
                     <p>Last Updated: <?php echo $row_kn_case['ontime'];?></p>
                     
                     
                     <div class="row">
                         <div class="col-4">
                             <h5><?php echo $row_kn_case['total_confirmed'];?></h5>
                             <p>Active</p>
                         </div>
                         <div class="col-4">
                             <h5><?php echo $row_kn_case['total_death'];?></h5>
                             <p>Deaths</p>
                         </div>
                         <div class="col-4">
                             <h5><?php echo $row_kn_case['total_recovered'];?></h5>
                             <p>Recovered</p>
                         </div>
                     </div>
                     
                     
                 </center>
                </div>
                </div>
              </div>
            </div>
            
            
            <br>
            <br>
            <center><h5 class="ml-1">Cases Summary in other States</h5></center>
            
             <?php 
$query_all_cases = $dBASE->query("SELECT * FROM state_cases");
while($row_all_case = $query_all_cases->fetch_array()){
?>                      
                     <!-- Product Catagories-->
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
              <div class="card">
                <div class="card-body">
      
                <div class="row">
                         <div class="col-1">
                             <img src="img/start.png" width="50px">
                         </div>
                         <div class="col-9">
                             <p><?php echo $row_all_case['state'];?></p>
                         </div>
                         <div class="col-2">
                             <p><?php echo $row_all_case['total_confirmed'];?></p>
                         </div>
                     </div>
       
                </div>
                </div>
              </div>
            </div>               
    <?php } ?>                 
               
            <br>
            <br>
            <br>
            <br>
            
            
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav h-100">
        <ul class="h-100 d-flex align-items-center justify-content-between">
          <li class="active"><a href="home"><img src="img/core-img/home.png" alt="Home">Dashboard</a></li>
          <li><a href="hotlines"><img src="img/call.png" alt="Message">Hotlines</a></li>
        
          <li><a href="news"><img src="img/news.png" alt="Pages">News</a></li>
    
          
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