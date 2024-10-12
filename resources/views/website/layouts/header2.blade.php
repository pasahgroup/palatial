  <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="background:#fdfdfd;">              
            <div class="classy-nav-container breakpoint-off">  
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="../assets/corporate/img/logos/logoe.png" alt="" style="height:5vh; width:100%;"></a>
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
                                         <li><a href="/whatWeOfferClient">Palatial Tour Services</a></li>
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