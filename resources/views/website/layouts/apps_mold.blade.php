<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
 <title>{{$title ?? 'Palatial Tours'}}</title>
  <link rel="icon" type="image/png" href="../mold/assets/img/favicon.png" />

  <link rel="stylesheet" href="../mold/assets/css/min/bootstrap.min.css" media="all">
  <link rel="stylesheet" href="../mold/assets/css/jqueryui.css" media="all">
  <link rel="stylesheet" href="../mold/vendor/animate-css/animate.css" media="all">
  <link rel="stylesheet" href="../mold/assets/font/iconfont/iconstyle.css" media="all">
  <link rel="stylesheet" href="../mold/assets/font/font-awesome/css/font-awesome.css" media="all">
  <link rel="stylesheet" href="../mold/assets/css/main.css" media="all" id="maincss">


<link rel="stylesheet" href="../assetf/style.css">
 <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
<link href="../../assets/corporate/css/style.css" rel="stylesheet">

  <!-- Custom -->
  <link href="../../img_library/main.css" rel="stylesheet">
    <link href="../../img_library/mform.css" rel="stylesheet">
    <link href="../../css/mform.css" rel="stylesheet">
    
    <!--   <link href="../custom/css/style.css" rel="stylesheet">

        <link href="../../assets/pages/css/components.css" rel="stylesheet">
<link href="../../assets/pages/css/slider.css" rel="stylesheet">
  
  <link href="../../assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assets/corporate/css/custom.css" rel="stylesheet">
 -->
<!--     <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../../css/button.css">
    <link rel="stylesheet" href="../../../css/custom.css">
       <link rel="stylesheet" href="../../css/customAnimation.css">
       <link rel="stylesheet" href="../../css/customAnimation2.css">
        <link rel="stylesheet" href="../../css/customSportLight.css">
 -->

   <!-- <link rel="stylesheet" href="../../css/css/font-mytravel.css">
  <link rel="stylesheet" href="../../css/style-shortline.css">
   -->
  

  
<!-- Custom css -->
 <link rel="stylesheet" href="../css/font621.min.css">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link href="../../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
<link href="../../assets/pages/css/animate.css" rel="stylesheet">

 <script src="../js/jquery361.min.js"></script>
 <script src="../custom/js/bootstrap.min.js"></script>



  <!-- <link href="../../assets/pages/css/animate.css" rel="stylesheet">
  <link href="../../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet"> 
-->
</head>

<body>
<!-- 
  <div class="pre-loader">
    <div class="loading-img"></div>
  </div>
 -->

    <header class="header-area">    
   <div class="container-fluid top-header-area">
         <div class="row align-items-center py-3 px-xl-5 d-lg-flex" style="background-color:#fafbfb;margin-top:0px;margin-bottom:0px;">
            <div class="col-lg-2">
                <a href="" class="text-decoration-none">
                    <span class="h3 text-uppercase text-primary bg-dark px-2">ISOL</span>
                    <span class="h3 text-uppercase text-dark bg-primary px-2 ml-n1">Tour</span>
                </a>            

            </div>

              <div class="col-lg-4 col-6 text-left">
                 <div class="email-address">
                    <a href="mailto:info@palatialtours.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><span style="color:#072004;">  info@palatialtours.com</span></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <img src="../../../images/whatsapp.png" alt="" style="width:20px; height:20px;">
                               <span style="color:#072004;">(+255)753 216 263</span>
                            </a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-left">
                      <form  method="post"  action="{{ route('search-tour') }}" enctype="multipart/form-data">
                                  @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="search any keyword" required="">
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-lg-3 col-6 text-right">
<!-- btn btn-primary btn-square mr-2 -->
                      <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-twitter"></i></a>
      <a href="#"  class="btn btn-outline btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
          <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-linkedin-in"></i></a>
           <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-instagram"></i></a>

            </div>
        </div>
    </div>




        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="background:#fdfdfd;">
           <!-- <div class="main-header-area" id="stickyHeader" style="background:#2e4432;"> -->
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>

  <li><a href="/">Home</a>
                                  <!--   <ul class="dropdown">
                                         <li><a href="/">Home</a></li>
                                    </ul -->
                                </li>



                                    <li><a href="#">Tour Packages</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Packages</li>
                                            <li><a href="/safaris">Wildlife Safaris</a></li>
                                            <li><a href="/trekking">Hiking & Trekking</a></li>
                                            <li><a href="/holiday">Beach Holidays</a></li>
                                            <li><a href="/dayTours">Day Tours</a></li>
                                            <li><a href="/historical-sites">Historical Sites</a></li>                                 
                                        </ul>
                                        
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Special Packages</li>
                                             <li><a href="/group">All Group Tours</a></li>
                          <li><a href="/Group-scheduled">Scheduled Group Tours</a></li>
                <li><a href="/offers">Special Offers</a></li>
                <li><a href="/special-occasions">Special Occasions</a></li>
                   <li><a href="/cultural">Cultural Tours</a></li>
                    <li><a href="/addons">Addons</a></li>
                                        </ul>                                 
                                    </div>
                                </li>
                               




                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                         <li><a href="/whatWeOfferClient">ISOL Tour Services</a></li>
                <li><a href="/drongo-attractions">Palatial Tour Attractios</a></li>
                <li><a href="#">Palatial Crafts and Designing</a></li>
                                       
                                    </ul>
                                </li>
    


                                 <li><a href="/safaris-gallery">Galleries</a>
                                    <!-- <ul class="dropdown">
                                         <li><a href="/safaris-gallery">Gallery</a></li>
                                    </ul> -->
                                </li>



                                <li><a href="#">Opportunities</a>
                                    <ul class="dropdown">
                                        <li><a href="/New-Agent">Agent-Register</a></li>
                        <li><a href="/New-tourGuide">Tour Guide -Register</a></li>
                        <li><a href="/New-Partner">Partner-Register</a></li>
                                       
                                    </ul>
                                </li>





                                    <li><a href="/aboutus">About Us</a>
                                   <!--  <ul class="dropdown">
                                         <li><a href="/safaris-gallery">About Us</a></li>
                                    </ul> -->
                                   </li>

                                  <li><a href="/mailing">Contact</a>
                                    <!-- <ul class="dropdown">
                                         <li><a href="/aboutus">Contact</a></li>
                                    </ul> -->
                                </li>



                                     <li><a href="#"> <i class="fa fa-search" style="color:pink;"></i></a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-12">
                                            <li class="title">Search by selecting program</li>
                                           
                                       
  <div class="south-search-area">
            <div class="row wppadding">
                <div class="col-12">
                    <div class="advanced-search-form">
                      
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                             <form  method="post"  action="{{ route('search-tour') }}" enctype="multipart/form-data">
                                  @csrf
                            <div class="row wpadding">
                                <input type="hidden" name="_method" value="POST">
                                 <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="search" placeholder="any keyword">
                                    </div>
                                </div>
                              
                                <div class="col-12 search-form-second-steps">
                                       <div class="row">                                          <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="price" placeholder="maximum price">
                                    </div>
                                </div>
                                     
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                 
                                    <div class="form-group mb-0" target="_blank">
                                        <button type="submit" class="btn btn-success" target="_blank" name="search2" value="search2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
     </div>
                                

</li>
<li>||</li>
    <li><a href="#" class="btn btn-success" style="color:#000">Create My Safari</a>
                                    <ul class="dropdown">
                                         <li><a href="/tailorForm" class="btn-outline btn-success">Create New Safari(Tailor Maide)</a></li>
                <li><a href="/tailorClientForm" class="btn-outline btn-success">My Existing Safari-Tailor Made</a></li>
                                                      
                                    </ul>
                                </li>

                                 <li><a href="#" class="btn btn-outline btn-primary" style="color:#000">My Last Booking</a>
                                    <ul class="dropdown">
                <li><a href="/bookingTrip" class="btn-outline btn-primary">My Existing Safari</a></li>
                                                      
                                    </ul>
                                </li>
    </ul>

      </div>
     </div>
 </nav>
           </div>
        </div>
    </header>

     @yield('content')

  <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(../assetf/img/bg-img/cta.jpg); color:yellow;">
        <!-- Main Footer Area -->
        <div class="row px-xl-5 pt-5">
              <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Destinations</h5>
                           
                              <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/circuitTour/Northern Circuit"><i class="fa fa-angle-right mr-2"></i>Northern Circuit</a>
                            <a class="text-secondary mb-2" href="/circuitTour/Southern Circuit"><i class="fa fa-angle-right mr-2"></i>Southern Circuit</a>
                            <a class="text-secondary mb-2" href="/circuitTour/Eastern Circuit"><i class="fa fa-angle-right mr-2"></i>Eastern Circuit</a>
                            <a class="text-secondary mb-2" href="/circuitTour/Western Circuit"><i class="fa fa-angle-right mr-2"></i>Western Circuit</a>
                     <a class="text-secondary mb-2" href="/circuitTour/Central Circuit"><i class="fa fa-angle-right mr-2"></i>Central Circuit</a>
                        </div>
                        <br>
 
                    </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">About Palatial Tours</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Why Adventure with us</a>
                            <a class="text-secondary mb-2" href="/whatWeOfferClient"><i class="fa fa-angle-right mr-2"></i>What We offer</a>
                            <a class="text-secondary mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Accommodation-Hotels</a>
                            <a class="text-secondary mb-2" href="/accommodation-camps"><i class="fa fa-angle-right mr-2"></i>Accommodation-Camps</a>
                  
                        </div>
                    </div>
                       <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Support</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Visa information</a>
                            <a class="text-secondary mb-2" href="/whatWeOfferClient"><i class="fa fa-angle-right mr-2"></i>Health & Vaccination</a>
                            <a class="text-secondary mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Payment Methods</a>
                            <a class="text-secondary mb-2" href="/accommodation-camps"><i class="fa fa-angle-right mr-2"></i>About Tanzania</a>
                  
                        </div>
                    </div>
                   
                   
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Contacts</h5>
                           
                           <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Address:{{$contacts->address??'Arusha'}}</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact No: (+255)753 216 263</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Email: info@palatialtours.com</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Website: www.palatialtours.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
              
<div class="col-md-8">
         <div class="footer-widget-area mb-100">
                <h3 class="" style="color:yellow;">Working Hours</h3>
            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
        </div>
      </div>

                <div class="col-md-4">
         <div class="footer-widget-area mb-100">
            <br>
            <div class="weekly-office-hours">
                              <div class="single-featured-properties-slide">
                                       <a class="nav-brand" href="/"><img src="../assets/corporate/img/logos/logoe.png" alt="" style="height:20vh; width: 80%"></a>
                                </div>
                            </div>
        </div>
      </div>



            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                   <div class="col-md-4 mb-5 float-right">
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    2024 &copy; <a class="text-primary" href="#">Palatial Tour</a>. All Rights Reserved.<a href="javascript:;">| Privacy Policy</a>  |  <a href="javascript:;">Terms of Service</a>  |  <a href="https://palatialtours.com:2096" target=”_blank” >Email</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary float-right">
                  Developed by: <a href="https://www.pasah.net" target="_blank">www.pasah.net</a>
                </p>
            </div>
        </div>
  </footer>

  <script src="../mold/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../mold/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="../mold/vendor/jquery.ui.touch-punch.min.js"></script>
  <script src="../mold/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="../mold/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../mold/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="../mold/vendor/retina.min.js"></script>
  <script src="../mold/vendor/jquery.imageScroll.min.js"></script>
  <script src="../mold/assets/js/min/responsivetable.min.js"></script>
  <script src="../mold/assets/js/bootstrap-tabcollapse.js"></script>

  <script src="../mold/assets/js/min/countnumbers.min.js"></script>
  <script src="../mold/assets/js/main.js"></script>

  <!-- Current Page JS -->
  <script src="../mold/assets/js/min/home.min.js"></script>
  <script>
    $(document).ready(function(){
            $('.equal-height > div').deasil_equalHeight();
            $('#carousel').carousel({
              interval: 10000
            })
          });
          $(window).resize(function(){
            $('.equal-height > div').deasil_equalHeight();
          });
  </script>











    <!-- Popper js -->
<!--     <script src="../assetf/js/popper.min.js"></script>

    <script src="../assetf/js/bootstrap.min.js"></script>
              -->        
    <script src="../assetf/js/plugins.js"></script>
    <script src="../assetf/js/classy-nav.min.js"></script>
    <script src="../assetf/js/jquery-ui.min.js"></script>
      
    <script src="../assetf/js/active.js"></script>
     <script src="../assets/js/main.js"></script> 

<!-- Custom Javascript -->


  <!--  <script src="../assets/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="../assets/vendor/jquery.ui.touch-punch.min.js"></script>



  <script src="../assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/retina.min.js"></script>
 <script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js"></script>
 -->

 <!--  <script src="..assets/vendor/jquery.imageScroll.min.js"></script>
  <script src="../assets/js/min/responsivetable.min.js"></script>
  <script src="../assets/js/bootstrap-tabcollapse.js"></script> -->

  <!-- <script src="../assets/js/min/countnumbers.min.js"></script> -->
  <!-- <script src="../assets/js/main.js"></script>  -->


 <!-- Custom2 -->

   <!-- <script src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="../../assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script> -->

    <!-- <script src="../../assets/corporate/scripts/layout.js" type="text/javascript"></script> -->
    <!-- <script src="../../assets/pages/scripts/bs-carousel.js" type="text/javascript"></script> -->
 <script src="../../img_library/scripts.js" type="text/javascript"></script>


  
</body>
</html>