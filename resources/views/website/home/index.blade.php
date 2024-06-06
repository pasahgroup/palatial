@extends('website.layouts.apps')
@section('content')
<style type="text/css">
    .top{
        margin-top:7%;
    }
</style>
<style type="text/css">
    
    .booking-btn {
  border: 0px solid #647545;
  padding: 10px 38px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;  
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
</style>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-9">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                  {{$sliderCount}}
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                          @for ($x =0; $x <=$slidersCount; $x++)
                        <li data-target="#header-carousel" data-slide-to="$x"></li>
                          @endfor 
                    </ol>

                    <div class="carousel-inner">

                            <div class="carousel-item position-relative active" style="height: 82vh;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slider_first->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
     
 <h5 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slider_first->title }}</h5>
                                    <div class="wrapper">
                                                                     <p class="demo-1" style="color:white">{{ $slider_first->description }}</p>


                                                                  <p><a href="/QuickLink/{{$slider_first->id}}" data-animation="animated fadeInUp">
                                                                        <b style="color:yellow">Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>
                                </div>
                            </div>
                        </div>

  @foreach ($sliders as $slides)
                        <div class="carousel-item position-relative" style="height: 82vh;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                <!--     <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> -->
                                   <!--  <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('safaris-slider',$slides->tour_id) }}">Read more</a>
 -->
                                 <h5 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $slides->tour_name }}</h5>
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
                        <div class="carousel-item position-relative" style="height: 82vh;">
                            <img class="position-absolute w-100 h-100" src="{{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                             
                                              <h5 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $quickSliderf->quick_title}}</h5>

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
                </div>
            </div>
            <div class="col-lg-3">
<hr>
                <div class="product-offer mb-30" style="height: 215px;">
                     @if ($popular_safari)
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment) }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white mb-3">{{$popular_safari->tour_name}}</h6>
                        <h3 class="text-white mb-3"><strong>[{{$popular_safari->type}}]</strong></h3>
                            <a href="/safaris/{{$popular_safari->id}}" class="btn btn-primary">View more</a>
                    </div>
                    @endif
                </div>
                   <div class="product-offer mb-30" style="height: 190px;">
                     @if ($popular_trekking)
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment) }}" alt="">
                    <div class="offer-text">
                          <h6 class="text-white mb-3">{{$popular_trekking->tour_name}}</h6>
                        <h3 class="text-white mb-3"><strong>[{{$popular_trekking->type}}]</strong></h3>
                            <a href="/safaris/{{$popular_trekking->id}}" class="btn btn-primary">View more</a>
                    </div>
                    @endif
                </div>

                   <div class="product-offer mb-30" style="height: 190px;">
                     @if ($popular_holiday)
                    <img class="img-fluid" src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment) }}" alt="">
                    <div class="offer-text">
                         <h6 class="text-white mb-3">{{$popular_holiday->tour_name}}</h6>
                        <h3 class="text-white mb-3"><strong>[{{$popular_holiday->type}}]</strong></h3>
                            <a href="/safaris/{{$popular_holiday->id}}" class="btn btn-primary">View more</a>
                    </div>
                    @endif
                </div>
  <a class="btn-transparent" href="/popularExperienceClient" target="_blank"  style="color:#b76b0b;float: right"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
                        </a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



<section class="featured-properties-area section-padding-100-50 top">  

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









 <section class="featured-properties-area section-padding-100-50 top">  

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

 <div class="col-lg-6 col-md-12">
    
       <h5><b style="background:">{{$special_private->sales_header}}</b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong>{{ round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                                                                    
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$popular_safari->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $special_private->tour_name }}</i></a>
                        </div>
                    </div>

                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $special_private->tour_name }}</a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5 header-btn" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong>Dead Line: <b class="text-danger">{{ $special_private->offer_deadline }}</b></strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
                                                                                     </span><s style=""><sup>$ {{ number_format($special_private->price),2 }} </sup></s><br>
                                                                                        <span style="font-size:12px;">Save ${{ number_format($special_private->save),2 }}</span>

                                                                                 </div></b>





               </div>

<div>Tour Duration:         
                                                                  <strong class="float-right">{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</strong>
                                                                                              
                                                                                              </div>

<div>Physical Rating:          <strong class="float-right">{{$special_private->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$special_private->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$special_private->tour_code }}</strong></div>


<hr>
                                                                        <div class="text-right">
                                                                                    <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}" class="booking-btn text-center"><b>Read more</b></a>
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
                                                                        <img src="{{URL::asset('/storage/uploads/'.$special_group->attachment) }}" class="img-responsive" alt="{{  $special_group->tour_name }}" style="width:100%;">
                                                                        </div>
                                                                </div>
                                                                             <h3 class="text-center demo-3"> <b style="color:" title="{{$special_group->tour_name}}">{{$special_group->tour_name}}</b>
                                                                             </h3>
                                                                 <hr>
                                                        <div class="blog-text">
                                                        <div class="row">

                                                                         <div class="col-md-7 col-sm-7 col-xs-7 header-btn" style="border-right:1px solid rgba(71,85,95,.11);height:0px;">
                                                                                         <strong>Dead Line: <b class="text-danger">{{ $special_group->offer_deadline }}</b></strong>
                                                                                 </div>

                                                                                <div class="col-md-5 col-sm-5 col-xs-5 header-btn">
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





 

  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;"> 

    <div class="container" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;">Partnering</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
    <div class="heading-section heading-section-white">
                        <h3 class="subheading" style="color:">Partnering with SafariBookings.com</h3>
                <h2 class="mb-3"><a href="https://www.safaribookings.com/" target="_blank"><b>https://www.safaribookings.com</b></a></h2>
              </div>
         

        </div>         


    </div>
</div>
</section>




    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3 top">
          <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;">Popular Destinations</span></h2>

        <div class="row px-xl-5">
             @if ($popular_safari)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$popular_safari->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $popular_safari->type }}</i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $popular_safari->type }}</a>                      
                    </div>
                </div>
            </div>
@endif

             @if ($popular_trekking)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$popular_trekking->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/trekking"><i class="fa fa-search">  {{ $popular_trekking->type }}</i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/trekking">{{ $popular_trekking->type }}</a>                      
                    </div>
                </div>
            </div>
@endif
            
           @if ($popular_holiday)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$popular_holiday->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/holiday"><i class="fa fa-search">  {{ $popular_holiday->type }}</i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/holiday">{{ $popular_holiday->type }}</a>                      
                    </div>
                </div>
            </div>
@endif
           @if ($popular_historical)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$popular_historical->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/historical-sites"><i class="fa fa-search">  {{ $popular_historical->type }}</i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="/historical-sites">{{ $popular_historical->type }}</a>                      
                    </div>
                </div>
            </div>
@endif

        </div>
    </div>
    <!-- Products End -->


   <div class="container-fluid pt-5 pb-3">
          <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;">Quick Link</span></h2>

            <div class="px-xl-5 pb-3">     
<div class="col-md-8 col-sm-12 pb-1" style="background-color:#4c7149">
<div class="row">    

      @foreach ($datasLink as $data)
            <div class="col-md-3 col-sm-3 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 30px; height: 2px;">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">

                                             <a href="/QuickLink/{{$data->id}}"><b style="color:#b76b0b;">{{$data->quick_title}}</b></a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
         
</div>
        </div>

            <div class="col-md-4 col-sm-12 pb-1">
     <div class="row" style="background-color:#4c7149"> 

<div class="testimonials-v1">
      <div class="service-box-heading bg-color">
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


    </div>
    </div>


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
   
     <script src="../assetff/js/category.js"></script>
    <script src="../assetff/lib/easing/easing.min.js"></script>
    <script src="../assetff/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../assetff/mail/jqBootstrapValidation.min.js"></script>
    <script src="../assetff/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../assetff/js/main.js"></script>
       <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../assetff/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../assetff/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../assetff/js/plugins.js"></script>
    <script src="../assetff/j../assetff/s/classy-nav.min.js"></script>
    <script src="../assetff/js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <!-- <script src="../assetff/js/active.js"></script> -->
@endsection