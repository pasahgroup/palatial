@extends('website.layouts.apps')
@section('content')

    <style type="text/css">
.bg-color{
  /*background-color:#93c192;*/
   background-color:#2e4432;
}
.w-100 {
  /*min-width: 100% !important;*/
  /*min-height: 5% !important;*/
  /*min-height: 50px;*/
  background-repeat:no-repeat;
  /*background-size: 99% 100%;*/
}
</style>


   <link rel="stylesheet" href="../../css/slider2.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 


<div id="wrapper">
  <section class="slideshow" id="js-header">

    <div class="slideshow__slide js-slider-home-slide is-current" data-slide="1">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image: url('https://images.pexels.com/photos/190537/pexels-photo-190537.jpeg?auto=compress&cs=tinysrgb&h=1080&w=1920');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">Everything broken can be repaired</h1>
            <a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#">
              <span class="slideshow__slide-caption-subtitle-label">See how</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="slideshow__slide js-slider-home-slide is-next" data-slide="2">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image: url('https://images.pexels.com/photos/110649/pexels-photo-110649.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">See through the field</h1>
            <a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#">
              <span class="slideshow__slide-caption-subtitle-label">Learn more about</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="slideshow__slide js-slider-home-slide is-prev" data-slide="3">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image: url('https://images.pexels.com/photos/196666/pexels-photo-196666.jpeg?auto=compress&cs=tinysrgb&h=1080&w=1920');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">Hey, take a time to relax!</h1>
            <a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#">
              <span class="slideshow__slide-caption-subtitle-label">Everybody needs</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="c-header-home_footer">
      <div class="o-container">
        <div class="c-header-home_controls -nomobile o-button-group">
          <div class="js-parallax is-inview" data-speed="1" data-position="top" data-target="#js-header">
            <button class="o-button -white -square -left js-slider-home-button js-slider-home-prev" type="button">
              <span class="o-button_label">
                <svg class="o-button_icon" role="img">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev"></use>
                </svg>
              </span>
            </button>
            <button class="o-button -white -square js-slider-home-button js-slider-home-next" type="button">
              <span class="o-button_label">
                <svg class="o-button_icon" role="img">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next"></use>
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div>

    <svg xmlns="http://www.w3.org/2000/svg">
      <symbol viewBox="0 0 18 18" id="arrow-next">
        <path id="arrow-next-arrow.svg" d="M12.6,9L4,17.3L4.7,18l8.5-8.3l0,0L14,9l0,0l-0.7-0.7l0,0L4.7,0L4,0.7L12.6,9z" />
      </symbol>
      <symbol viewBox="0 0 18 18" id="arrow-prev">
        <path id="arrow-prev-arrow.svg" d="M14,0.7L13.3,0L4.7,8.3l0,0L4,9l0,0l0.7,0.7l0,0l8.5,8.3l0.7-0.7L5.4,9L14,0.7z" />
      </symbol>
    </svg>












  
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" style="padding:0px;">
        <div class="hero-slides owl-carousel" style="margin-bottom:0%">
            <!-- Single Hero Slide -->
           
           @foreach ($sliders as $slides)
            <div class="single-hero-slide bg-img" style="background-image: url({{URL::asset('/storage/uploads/'.$slides->attachment)}}); margin-left:20px;margin-right:20px">
                <div class="container h-100" style="height:10% !important;">
                    <div class="row h-100 align-items-center" style="margin-top:100px;">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important;">{{ $slides->tour_name }} </h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1" style="color:white">{{ $slides->description }}</p>


                                                                    <p><a href="{{ route('safaris-slider',$slides->tour_id) }}" data-animation="animated fadeInUp">
                                                                        <b style="color:yellow">Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    @endforeach


      @foreach ($quickLinkSliders as $quickSliderf)
             <div class="single-hero-slide bg-img" style="background-image: url({{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}); margin-left:20px;margin-right:20px;">
                  <div class="container h-100" style="height:10% !important;">
                   <div class="row h-100 align-items-center" style="margin-top:100px;">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important">{{ $quickSliderf->quick_title }}</h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1" style="color:white">{{ $quickSliderf->quick_description }}</p>


                                                                    <p><a href="/QuickLink/{{$quickSliderf->id}}" data-animation="animated fadeInUp">
                                                                        <b style="color:yellow">Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    @endforeach

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->










 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">

   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Tour Packages</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                        
                            <div class="row">
                               
  <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Wildlife Safaris</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                 



           <div class="single-featured-properties-slide">

             <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment)}}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                         <span class="off-box" style="background-color:#2e4432">{{ $popular_safari->days  }} Days: ${{number_format($popular_safari->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $popular_safari->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_safari->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>
                         

                               </div>



                                  @foreach ($popular_safarif as $safaris)   
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <!-- <a href="#"><img src="../assetf/img/bg-img/fea-product.jpg" alt=""></a> -->
                               

        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                            <span class="off-box" style="background-color:#2e4432">{{ $safaris->days  }} Days: ${{number_format($safaris->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $safaris->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$safaris->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>


                                </div>                          

                                @endforeach
                            </div>
                        </div>
                    </div>




   <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Beach Holiday</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->

                                 <div class="single-featured-properties-slide">
                                            <div class="item active">
                 <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment)}}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432">{{ $popular_holiday->days  }} Days: ${{number_format($popular_holiday->price),2 }}</span>
                <div class="package-list-content">
                        <h3 class="package-list-title">
            <p>{{ $popular_holiday->tour_name }}</p>
                                                    </h3>
     <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_holiday->id) }}">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>

                               </div>




                            
                         @foreach ($popular_holidayf as $holidays)
                                                <div class="item active">
                                                    <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$holidays->attachment) }}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432">{{ $holidays->days  }} Days: ${{number_format($holidays->price),2 }}</span>
                <div class="package-list-content">
                    <h3 class="package-list-title">
            <p>{{ $holidays->tour_name }}</p>
                                                    </h3>
     <a class="package-list-button" href="{{ route('safaris-slider-packages',$holidays->id) }}">Explore More</a>
                                                                                    </div>
                                                                                </div>
                                            </div>
                                             @endforeach


                            </div>
                        </div>
                    </div>


       <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hiking and Trekking</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">


   <div class="single-featured-properties-slide">
    <div class="item active">
                 <div class="package-list-wrap ">

                                                                                <img src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment)}}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                <span class="off-box" style="background-color:#2e4432">{{ $popular_trekking->days  }} Days: ${{number_format($popular_trekking->price),2 }}</span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p>{{ $popular_trekking->tour_name }}</p>
                                                    </h3>
     <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_trekking->id) }}">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>
</div>





                                <!-- Single Slide -->
                                 @foreach ($popular_trekkingf as $trekking) 
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$trekking->attachment) }}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                            <span class="off-box" style="background-color:#2e4432">{{ $trekking->days  }} Days: ${{number_format($trekking->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $trekking->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$trekking->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>


                                </div>                          

                                @endforeach
                            </div>
                        </div>
                    </div>

                           <div class="col-12 col-sm-4 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Historical Sites</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">




 <div class="single-featured-properties-slide">
    <div class="item active">
                 <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$popular_historical->attachment)}}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                 <span class="off-box" style="background-color:#2e4432">{{ $popular_historical->days  }} Days: ${{number_format($popular_historical->price),2 }}</span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p>{{ $popular_historical->tour_name }}</p>
                                                    </h3>
     <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_historical->id) }}">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>
</div>







                                <!-- Single Slide -->
                                         @foreach ($popular_historicalf as $historicalf)
                                     
                                <div class="single-featured-properties-slide">
                              

    <div class="item">
                                                    <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$historicalf->attachment) }}" class="img-fluid" alt="No Image" style="height:250px;width:100%;">
                                                                                        <span class="off-box" style="background-color:#2e4432">{{ $historicalf->days  }} Days: ${{number_format($historicalf->price),2 }}</span>
                <div class="package-list-content">
            <h3 class="package-list-title">
            <p>{{ $historicalf->tour_name }}</p>
                                                    </h3>
     <a class="package-list-button" href="{{ route('safaris-slider-packages',$historicalf->id) }}">Explore More</a>
                                                                                    </div>
                                                                                </div>
                                            </div>

                                </div>
                               
                                @endforeach
                            </div>
                        </div>
                    </div>


                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>


 <hr class="">









 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Special Offers</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                        
                            <div class="row">
                               
           

                        <div class="footer-widget-area mb-100">
                           
    @foreach ($offers_private as $special_private)
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:">{{$special_private->sales_header}}</b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong>{{ round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                                                                        <div class="blog_image">
                                                                        <img src="{{URL::asset('/storage/uploads/'.$special_private->attachment) }}" class="img-responsive" alt="{{  $special_private->tour_name }}" style="height:280px;width:100%;">
                                                                        </div>
                                                                </div>
                                                                             <h3 class="text-center demo-3"> <b style="color:" title="{{$special_private->tour_name}}">{{$special_private->tour_name}}</b>
                                                                             </h3>
                                                                 <hr>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);height:40px; ">
                                                                                         <strong>Dead Line: <b class="text-danger">{{ $special_private->offer_deadline }}</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
                                                                                     </span><s style=""><sup>$ {{ number_format($special_private->price),2 }} </sup></s><br>
                                                                                        <span style="font-size:12px;">Save ${{ number_format($special_private->save),2 }}</span>

                                                                                 </div>
                                                                        </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $special_private->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_private->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_private->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>

                                                            <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
                                                                                    <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}" class="booking-btn text-center"><b>Explore Tour Details</b></a>
                                                                        </div>
                                                                            </div>
                                                                </div>

                                                </div>
                                        </div>
                        @endforeach


                         @foreach ($offers_group as $special_group)
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:">{{$special_group->sales_header}}</b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong>{{ round($special_group->save/$special_group->price * 100),0 }}% Off</strong></div>
                                                                        <div class="blog_image">
                                                                        <img src="{{URL::asset('/storage/uploads/'.$special_group->attachment) }}" class="img-responsive" alt="{{  $special_group->tour_name }}" style="height:280px;width:100%;">
                                                                        </div>
                                                                </div>
                                                                             <h3 class="text-center demo-3"> <b style="color:" title="{{$special_group->tour_name}}">{{$special_group->tour_name}}</b>
                                                                             </h3>
                                                                 <hr>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);height:40px;">
                                                                                         <strong>Dead Line: <b class="text-danger">{{ $special_group->offer_deadline }}</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_group->new_price),2 }} </strong> pp
                                                                                     </span><s style=""><sup>$ {{ number_format($special_group->price),2 }} </sup></s><br>
                                                                                        <span style="font-size:12px;">Save ${{ number_format($special_group->save),2 }}</span>

                                                                                 </div>
                                                                        </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->days }} Days, {{ $special_group->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>

                                                            <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
                                                                                    <a href="{{route('grouptour.show',$special_group->tour_id,$offers) }}" class="booking-btn text-center"><b>Explore Tour Details</b></a>
                                                                        </div>
                                                                            </div>
                                                                </div>

                                                </div>
                                        </div>
                        @endforeach
                        </div>
                              


                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <!-- <a href="#" id="moreFilter">+ More filters</a> -->
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0" target="_blank">
                                        <a class="btn-transparent" href="/offers" target="_blank"  style="color:#b76b0b"><i class="fa fa-rocket margin-right-10"></i>Explore More Offers
                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>







 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%" >  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="container">
            <div class="row bg-color">
                <div class="col-12">
                    <div class="advanced-search-form" style="background-color:#cabaa5;">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Partnering</p>
                        </div>
                        <!-- Search Form -->
                        <!-- <form action="#" method="post" id="advanceSearch"> -->
                            <div class="row">
  <div class="col-md-12">
                    <div class="heading-section heading-section-white">
                        <h3 class="subheading" style="color:#b76b0b">Partnering with SafariBookings.com</h3>
                <h2 class="mb-3"><a href="https://www.safaribookings.com/" target="_blank"><b>https://www.safaribookings.com</b></a></h2>
              </div>
            </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

 <hr class="">
 



 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%">  

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="containerx">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Popular Experiences</p>
                        </div>
                     
 <div class="row small-package-list">
                                             @if ($popular_safari)
                                                <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment) }}" class="img-responsive" alt="{{  $popular_safari->tour_name }}" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="{{$popular_safari->tour_name}}">{{$popular_safari->tour_name}}</b>
                                                                    </h3>


                                                                            <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2">{{$popular_safari->type}}</marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11)">
                                                                                         <strong><b class="text-white">{{ $popular_safari->days }} Days, {{ $popular_safari->days -1 }} Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From ${{ number_format($popular_safari->price),2 }}</b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_safari->days }} Days, {{ $popular_safari->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_safari->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_safari->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_safari->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                              
                                                                             <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/{{$popular_safari->id}}" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        @endif


        @if ($popular_trekking)
                                                         <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment) }}" class="img-responsive" alt="{{  $popular_trekking->tour_name }}" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="{{$popular_trekking->tour_name}}">{{$popular_trekking->tour_name}}</b>
                                                                    </h3>

                                                                        <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2">{{$popular_trekking->type}}</marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                                                                         <strong><b class="text-white">{{ $popular_trekking->days }} Days, {{ $popular_trekking->days -1 }} Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From ${{ number_format($popular_trekking->price),2 }}</b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_trekking->days }} Days, {{ $popular_trekking->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_trekking->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_trekking->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_trekking->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                                 <div class="row">
                                                                            </div>
                                                                             <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/{{$popular_trekking->id}}" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        @endif



   @if ($popular_holiday)
                                        <div class="col-lg-4 col-md-4">
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                        <div class="blog_image">
                                                                        <img src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment) }}" class="img-responsive" alt="{{  $popular_holiday->tour_name }}" style="height:250px;width:100%;">
                                                                        </div>
                                                                </div>

                                                                <h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="{{$popular_holiday->tour_name}}">{{$popular_holiday->tour_name}}</b>
                                                                    </h3>

                                                                    <div class="">
                                                                 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2">{{$popular_holiday->type}}</marquee></b>
                                                                        </h4>
                                                                </div>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                                                                         <strong><b class="text-white">{{ $popular_holiday->days }} Days, {{ $popular_holiday->days -1 }} Nights</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                                                                <span class="text-white"><strong>From ${{ number_format($popular_holiday->price),2 }}</b>  </strong>
                                                                                     </span>

                                                                                 </div>
                                                                        </div>

                                                                            <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

                                                                            <div class="row">
                                                                                     <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_holiday->days }} Days, {{ $popular_holiday->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_holiday->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span>
                                                                                     </div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_holiday->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
                                                                                     </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $popular_holiday->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>


                                                                 <div class="row">
                                                                            </div>
                                                        <!--<hr>-->
                                                        <div class="listing-shot-info rating">
                                                                <div class="booking-tourPadding">

                                                                <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                                                             <a href="/safaris/{{$popular_holiday->id}}" class="booking-btn text-center"><b>View More</b></a>
                                                                </div>

                                                                </div>
                                                        </div>
                                                                </div>

                                                </div>
                                        </div>
                                        @endif


                                      </div>




                         <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <a class="btn-transparent" href="/popularExperienceClient" target="_blank"  style="color:#b76b0b;float: right"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
                        </a>
                    </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>
</section>



 <section class="featured-properties-area section-padding-100-50" style="margin-top:3%"> 

    <div class="container" style=" padding-bottom:0px;">
   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>POPULAR DESTINATIONS</p>
                        </div>
                     
                          <div class="row mb-1">
                        <!-- Card Block -->
                @if ($popular_safari)
                    <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two">
<a href="/safaris">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url({{ URL::asset('/storage/uploads/'.$popular_safari->attachment) }}); height:250px;width:100%; background-size: cover;">
                                    <lif class="one-forth text-center">

                                        <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase">{{ $popular_safari->type }}</h6>
            </div>


                                        </lif>
                                </div>
                                 </a>
                         </div>
                 </div>
                     @endif
                     @if ($popular_trekking)
                        <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two booking-tourPadding">
 <a href="/trekking">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url({{ URL::asset('/storage/uploads/'.$popular_trekking->attachment) }}); height:250px;width:100%; background-size: cover;">
                                <lif class="one-forth text-center">

                                        <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase">{{ $popular_trekking->type }}</h6>
            </div>




                                        </lif>
                                </div>
</a>
</div>

                         </div>
                     @endif

                     @if($popular_holiday)
                    <div class="col-md-4 mb-4 mb-md-4">
                        <div class="search_area search_area_two booking-tourPadding">
                         <a href="/holiday">
                        <div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url({{ URL::asset('/storage/uploads/'.$popular_holiday->attachment) }}); height:250px;width:100%; background-size: cover;">
                                <lif class="one-forth text-center">

                            <div class="text-center">
                                    <h6 data-text= "" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase">{{ $popular_holiday->type }}</h6>
            </div>


                                        </lif>
                                </div>
                                </a>
                         </div>
                 </div>
             @endif
        
         </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



    <hr class="">



    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2  style="color:#b76b0b;">Quick Link</h2>
                        <!-- <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
    
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
     <div class="service-box-heading bg-color">
                            <p><strong>Quick Link</strong></p>
                     @foreach ($datasLink as $data)
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                 <div class="bg-colorx">
                                                    <ul>
                                             <li><a href="/QuickLink/{{$data->id}}"><b style="color:#b76b0b;">{{$data->quick_title}}</b></a><li>  </ul>
                             </div>
                     </div>
                         @endforeach
                </div>
            </div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonials-v1">
      <div class="service-box-heading bg-color">
    <span><b>Testimonials</b></span>
                                 <span><p>What Travellers Say Tour Reviews</p></span>
                                 <div id="myCarousel1" class="carousel slide">
                                     <!-- Carousel items -->
                                     <div class="carousel-inner">
                                         <div class="active item">
                                             <blockquote><i>{{$testimonies_one->comments}}</i></blockquote>
                                             <div class="carousel-info">
                                                 <img class="pull-left" src="{{ URL::asset('/storage/uploads/'.$testimonies_one->attachment) }}" width="50" alt="review image">
                                                 <div class="pull-left">
                                                     <span class="testimonials-name">{{$testimonies_one->full_name}}</span>
                                                     <span class="testimonials-post">
                                                                <div class="test-rating">
                                                                     <ul class="list-inline">
                                                                             <li class="list-inline-item">
                                                                                    @for ($i = 0; $i <$testimonies_one->rating; $i++)
                                                                                     <i class="text-primary fa fa-star text-warning"></i>
                                                                                    @endfor

                                                                                @for($i=0;$i<5-$testimonies_one->rating;$i++)
                                                                             <i class="fa fa-star-o text-warning"></i>
                                                                                    @endfor

                                                                             </li>
                                                                     </ul>
                                                             </div>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>


                                             @foreach($testimonies as $testimony)
                                            <div class="item">
                                             <blockquote><i>{{$testimony->comments}}.</i></blockquote>
                                             <div class="carousel-info">
                                                 <img class="pull-left" src="{{ URL::asset('/storage/uploads/'.$testimony->attachment) }}" width="50" alt="review image">
                                                 <div class="pull-left">
                                                     <span class="testimonials-name">{{$testimony->full_name}}</span>
                                                     <span class="testimonials-post">
                                                                <div class="test-rating">
                                                                     <ul class="list-inline">
                                                                             <li class="list-inline-item">
                                                                                    @for ($i = 0; $i <$testimony->rating; $i++)
                                                                                     <i class="text-primary fa fa-star text-warning"></i>
                                                                                    @endfor

                                                                                @for($i=0;$i<5-$testimony->rating;$i++)
                                                                             <i class="fa fa-star-o text-warning"></i>
                                                                                    @endfor

                                                                             </li>
                                                                     </ul>
                                                             </div>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>
                                            @endforeach
                                     </div>
                                     <!-- Carousel nav -->
                                     <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
                                     <a class="right-btn" href="#myCarousel1" data-slide="next"></a>
                                 </div>

</div>
</div>
             
            </div>
        </div>
    </section>




  <script type="text/javascript">
  const $window = $(window);
const $body = $("body");

class Slideshow {
  constructor(userOptions = {}) {
    const defaultOptions = {
      $el: $(".slideshow"),
      showArrows: false,
      showPagination: true,
      duration: 10000,
      autoplay: true
    };

    let options = Object.assign({}, defaultOptions, userOptions);

    this.$el = options.$el;
    this.maxSlide = this.$el.find($(".js-slider-home-slide")).length;
    this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
    this.showPagination = options.showPagination;
    this.currentSlide = 1;
    this.isAnimating = false;
    this.animationDuration = 1200;
    this.autoplaySpeed = options.duration;
    this.interval;
    this.$controls = this.$el.find(".js-slider-home-button");
    this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

    this.$el.on("click", ".js-slider-home-next", (event) => this.nextSlide());
    this.$el.on("click", ".js-slider-home-prev", (event) => this.prevSlide());
    this.$el.on("click", ".js-pagination-item", (event) => {
      if (!this.isAnimating) {
        this.preventClick();
        this.goToSlide(event.target.dataset.slide);
      }
    });

    this.init();
  }

  init() {
    this.goToSlide(1);
    if (this.autoplay) {
      this.startAutoplay();
    }

    if (this.showPagination) {
      let paginationNumber = this.maxSlide;
      let pagination = '<div class="pagination"><div class="container">';

      for (let i = 0; i < this.maxSlide; i++) {
        let item = `<span class="pagination__item js-pagination-item ${
          i === 0 ? "is-current" : ""
        }" data-slide=${i + 1}>${i + 1}</span>`;
        pagination = pagination + item;
      }

      pagination = pagination + "</div></div>";

      this.$el.append(pagination);
    }
  }

  preventClick() {
    this.isAnimating = true;
    this.$controls.prop("disabled", true);
    clearInterval(this.interval);

    setTimeout(() => {
      this.isAnimating = false;
      this.$controls.prop("disabled", false);
      if (this.autoplay) {
        this.startAutoplay();
      }
    }, this.animationDuration);
  }

  goToSlide(index) {
    this.currentSlide = parseInt(index);

    if (this.currentSlide > this.maxSlide) {
      this.currentSlide = 1;
    }

    if (this.currentSlide === 0) {
      this.currentSlide = this.maxSlide;
    }

    const newCurrent = this.$el.find(
      '.js-slider-home-slide[data-slide="' + this.currentSlide + '"]'
    );
    const newPrev =
      this.currentSlide === 1
        ? this.$el.find(".js-slider-home-slide").last()
        : newCurrent.prev(".js-slider-home-slide");
    const newNext =
      this.currentSlide === this.maxSlide
        ? this.$el.find(".js-slider-home-slide").first()
        : newCurrent.next(".js-slider-home-slide");

    this.$el
      .find(".js-slider-home-slide")
      .removeClass("is-prev is-next is-current");
    this.$el.find(".js-pagination-item").removeClass("is-current");

    if (this.maxSlide > 1) {
      newPrev.addClass("is-prev");
      newNext.addClass("is-next");
    }

    newCurrent.addClass("is-current");
    this.$el
      .find('.js-pagination-item[data-slide="' + this.currentSlide + '"]')
      .addClass("is-current");
  }

  nextSlide() {
    this.preventClick();
    this.goToSlide(this.currentSlide + 1);
  }

  prevSlide() {
    this.preventClick();
    this.goToSlide(this.currentSlide - 1);
  }

  startAutoplay() {
    this.interval = setInterval(() => {
      if (!this.isAnimating) {
        this.nextSlide();
      }
    }, this.autoplaySpeed);
  }

  destroy() {
    this.$el.off();
  }
}

(function () {
  let loaded = false;
  let maxLoad = 3000;

  function load() {
    const options = {
      showPagination: true
    };

    let slideShow = new Slideshow(options);
  }

  function addLoadClass() {
    $body.addClass("is-loaded");

    setTimeout(function () {
      $body.addClass("is-animated");
    }, 600);
  }

  $window.on("load", function () {
    if (!loaded) {
      loaded = true;
      load();
    }
  });

  setTimeout(function () {
    if (!loaded) {
      loaded = true;
      load();
    }
  }, maxLoad);

  addLoadClass();
})();

    </script>


     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
      
      const $window = $(window);
const $body = $('body');

class Slideshow {
  constructor (userOptions = {}) {
    const defaultOptions = {
      $el: $('.slideshow'),
      showArrows: false,
      showPagination: true,
      duration: 10000,
      autoplay: true
    }
    
    let options = Object.assign({}, defaultOptions, userOptions);
    
    this.$el = options.$el;
    this.maxSlide = this.$el.find($('.js-slider-home-slide')).length;
    this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
    this.showPagination = options.showPagination;
    this.currentSlide = 1;
    this.isAnimating = false;
    this.animationDuration = 1200;
    this.autoplaySpeed = options.duration;
    this.interval;
    this.$controls = this.$el.find('.js-slider-home-button');
    this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

    this.$el.on('click', '.js-slider-home-next', (event) => this.nextSlide());
    this.$el.on('click', '.js-slider-home-prev', (event) => this.prevSlide());
    this.$el.on('click', '.js-pagination-item', event => {
      if (!this.isAnimating) {
        this.preventClick();
  this.goToSlide(event.target.dataset.slide);
      }
    });

    this.init();
  }
  
  init() {
    this.goToSlide(1);
    if (this.autoplay) {
      this.startAutoplay();
    }
    
    if (this.showPagination) {
      let paginationNumber = this.maxSlide;
      let pagination = '<div class="pagination"><div class="container">';
      
      for (let i = 0; i < this.maxSlide; i++) {
        let item = `<span class="pagination__item js-pagination-item ${ i === 0 ? 'is-current' : ''}" data-slide=${i + 1}>${i + 1}</span>`;
        pagination  = pagination + item;
      }
      
      pagination = pagination + '</div></div>';
      
      this.$el.append(pagination);
    }
  }
  
  preventClick() {
    this.isAnimating = true;
    this.$controls.prop('disabled', true);
    clearInterval(this.interval);

    setTimeout(() => {
      this.isAnimating = false;
      this.$controls.prop('disabled', false);
      if (this.autoplay) {
        this.startAutoplay();
      }
    }, this.animationDuration);
  }

  goToSlide(index) {    
    this.currentSlide = parseInt(index);
    
    if (this.currentSlide > this.maxSlide) {
      this.currentSlide = 1;
    }
    
    if (this.currentSlide === 0) {
      this.currentSlide = this.maxSlide;
    }
    
    const newCurrent = this.$el.find('.js-slider-home-slide[data-slide="'+ this.currentSlide +'"]');
    const newPrev = this.currentSlide === 1 ? this.$el.find('.js-slider-home-slide').last() : newCurrent.prev('.js-slider-home-slide');
    const newNext = this.currentSlide === this.maxSlide ? this.$el.find('.js-slider-home-slide').first() : newCurrent.next('.js-slider-home-slide');
    
    this.$el.find('.js-slider-home-slide').removeClass('is-prev is-next is-current');
    this.$el.find('.js-pagination-item').removeClass('is-current');
    
    if (this.maxSlide > 1) {
      newPrev.addClass('is-prev');
      newNext.addClass('is-next');
    }
    
    newCurrent.addClass('is-current');
    this.$el.find('.js-pagination-item[data-slide="'+this.currentSlide+'"]').addClass('is-current');
  }
  
  nextSlide() {
    this.preventClick();
    this.goToSlide(this.currentSlide + 1);
  }
   
  prevSlide() {
    this.preventClick();
    this.goToSlide(this.currentSlide - 1);
  }

  startAutoplay() {
    this.interval = setInterval(() => {
      if (!this.isAnimating) {
        this.nextSlide();
      }
    }, this.autoplaySpeed);
  }

  destroy() {
    this.$el.off();
  }
}

(function() {
  let loaded = false;
  let maxLoad = 3000;  
  
  function load() {
    const options = {
      showPagination: true
    };

    let slideShow = new Slideshow(options);
  }
  
  function addLoadClass() {
    $body.addClass('is-loaded');

    setTimeout(function() {
      $body.addClass('is-animated');
    }, 600);
  }
  
  $window.on('load', function() {
    if(!loaded) {
      loaded = true;
      load();
    }
  });
  
  setTimeout(function() {
    if(!loaded) {
      loaded = true;
      load();
    }
  }, maxLoad);

  addLoadClass();
})();
  </script>

@endsection