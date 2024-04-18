@extends('website.layouts.apps_new')
@section('content')


    <section id="home-section" class="hero">
          <div class="home-slider owl-carousel">
          <div class="slider-item js-fullheight">

            <div class="container-fluid p-0">
                   <img class="one-third order-md-last img-fluid" src="../images/logo.png" alt="">
              <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <img class="one-third order-md-last img-fluid" src="../images/logo.png" alt="">
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                  
                        <div class="horizontal">
                            <h4 class="mb-4 mt-3">Shoes Collection 2019</h4>
                            <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                            
                            <p><a href="#" class="btn-custom">Discover Now</a></p>
                          </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item js-fullheight">        
            <div class="container-fluid p-0">

  @foreach ($sliders as $slides)
                   <img class="one-third order-md-last img-fluid" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" alt="">
              <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
             
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                     
                        <div class="horizontal">
                                 <h4 class="mb-4 mt-3">{{ $slides->tour_name }}</h4>
                            <p class="mb-4 demo-1x">{{ $slides->description }}</p>
                            
                            <p><a href="{{ route('safaris-slider',$slides->tour_id) }}" class="btn-custom">Read More</a></p>
                          </div>
                    </div>
                  </div>
                </div>
  @endforeach
            </div>
          </div>




        <div class="slider-item js-fullheight">        
            <div class="container-fluid p-0">

  @foreach ($quickLinkSliders as $quickSliderf)
                   <img class="one-third order-md-last img-fluid" src="{{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}" alt="">
              <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
             
                  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                     
                        <div class="horizontal">
                                 <h4 class="mb-4 mt-3">{{ $quickSliderf->quick_description }}</h4>
                            <p class="mb-4 demo-1">{{ $quickSliderf->description }}</p>
                            
                            <p><a href="{{ $quickSliderf->quick_description }}" class="btn-custom">Read More</a></p>
                          </div>
                    </div>
                  </div>
                </div>
  @endforeach
            </div>
          </div>

        </div>
    </section>


<section id="popular_experience" class="blog_section">
    <div class="container">


    <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section text-center">
          <div class="col-md-12 text-center">
<h2 class="" style="color:#b76b0b;">
Tour Packages
</h2>
                    </div>

            </div>
            </div>
        </div>
        <hr>

          <!-- BEGIN CONTENT -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="">
             <div data-aos="fade-up">
                
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                     <strong data-text= "" style="font-size: 20px;color:#496f50;font-weight: 700; text-transform:lowercase;text-align: center;">Wildlife Safaris</strong>

  <div id="myCarousel4p" class="carousel_no slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $popular_safari->days  }} Days: ${{number_format($popular_safari->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="color">{{ $popular_safari->tour_name }}</p>
                          </h3>
   <a class="package-list-button btn-outline-body" href="{{ route('safaris-slider-packages',$popular_safari->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



           @foreach ($popular_safarif as $safaris)                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                            <span class="off-box">{{ $safaris->days  }} Days: ${{number_format($safaris->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $safaris->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$safaris->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>


  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                  <strong data-text= "" style="font-size: 20px;color:#496f50;font-weight: 700; text-transform:lowercase">Hiking And Trekking</strong>

  <div id="myCarousel2p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                        <span class="off-box">{{ $popular_trekking->days  }} Days: ${{number_format($popular_trekking->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="color">{{ $popular_trekking->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_trekking->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



            @foreach ($popular_trekkingf as $trekking)
                        <div class="item">
                         <div class="package-list-wrap ">


                                        <img src="{{URL::asset('/storage/uploads/'.$trekking->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                             <span class="off-box">{{ $trekking->days  }} Days: ${{number_format($trekking->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="color">{{ $trekking->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$trekking->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>



    <a data-slide="prev" href="#myCarousel2p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel2p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
    <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                         <strong data-text= "" style="font-size: 20px;color:#496f50;font-weight: 700; text-transform:lowercase">Beach Holiday</strong>

  <div id="myCarousel3p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $popular_holiday->days  }} Days: ${{number_format($popular_holiday->price),2 }}</span>
        <div class="package-list-content">
            <h3 class="package-list-title">
      <p class="color">{{ $popular_holiday->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_holiday->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



             @foreach ($popular_holidayf as $holidays)
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$holidays->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $holidays->days  }} Days: ${{number_format($holidays->price),2 }}</span>
        <div class="package-list-content">
          <h3 class="package-list-title">
      <p class="color">{{ $holidays->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$holidays->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel3p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel3p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

 <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                     <strong data-text= "" style="font-size: 20px;color:#496f50;font-weight: 700; text-transform:lowercase">Historical Sites</strong>

  <div id="myCarousel4p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_historical->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $popular_historical->days  }} Days: ${{number_format($popular_historical->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="color">{{ $popular_historical->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_historical->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



             @foreach ($popular_historicalf as $historicalf)
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$historicalf->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                            <span class="off-box">{{ $historicalf->days  }} Days: ${{number_format($historicalf->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $historicalf->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$historicalf->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
</div>
</div>
</div>
    </div>

</section>

  <hr class="">


<section id="blog" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section text-center">
          <div class="col-md-12 text-center">


<h2 class="" style="color:#b76b0b;">
Special Offers
</h2>
                    </div>

            </div>
            </div>
        </div>
        <br>


             <div data-aos="fade-up">
            {{-- my module --}}
              @foreach ($offers_private as $special_private)

   <div class="col-lg-4 col-md-4">
     <h4><b style="background:">{{$special_private->sales_header}}</b></h4>
                        <div class="single_blog listing-shot">

                                <div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong>{{round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$special_private->attachment) }}" class="img-responsive" alt="{{  $special_private->tour_name }}" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                 <h3 class="text-center demo-3"> <b style="color:" title="{{$special_private->tour_name}}">{{$special_private->tour_name}}</b>
                                    </h3>
                                 <hr>
                            <div class="blog-text">
                            <div class="row">

                                     <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                             <strong>Dead Line: <b class="text-danger">{{ $special_private->offer_deadline }}</b></strong>
                                         </div>

                                        <div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
                                        <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
                                           </span><style=""><sup>$ {{ number_format($special_private->price),2 }} </sup></s><br>
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
   <div class="col-lg-4 col-md-4">
     <h4><b style="background:">{{$special_group->sales_header}}</b></h4>
                        <div class="single_blog listing-shot">

                                <div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong>{{ round($special_group->save/$special_group->price * 100),0 }}% Off</strong></div>
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$special_group->attachment) }}" class="img-responsive" alt="{{  $special_group->tour_name }}" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                       <h3 class="text-center demo-3"> <b style="color:" title="{{$special_group->tour_name}}">{{$special_group->tour_name}}</b>
                                       </h3>
                                 <hr>
                            <div class="blog-text">
                            <div class="row">

                                     <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
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
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
            <a class="btn-transparent" href="/offers" target="_blank" style="color:#296820; font-size:15px"><i class="fas fa-gift"></i> Explore More Offers
            </a>
          </div>
        </div>

</div>
 </section>


  <hr class="text-green">
    <br><br>
    <!-- Experience v1 -->
   <section class="ftco-section ftco-deal bg-secondary">
        <div class="container">

            <div class="row">
  <div class="col-md-12">
                    <div class="heading-section heading-section-white">
                        <h3 class="subheading">Partnering with SafariBookings.com</h3>
                <h2 class="mb-3"><a href="https://www.safaribookings.com/" target="_blank"><b>www.safaribookings.com</b></a></h2>
              </div>
            </div>
            </div>
        </div>
    </section>


<hr class="text-green">
<br><br><br><br>


<section id="blog" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section text-center">
          <div class="col-md-12 text-center">



<h2 class="" style="color:#b76b0b;">
Popular Experiences
</h2>


                    </div>

            </div>
            </div>
        </div>
        <br>
                <div class="small-package-list">
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
                                 <h4 class="text-center"> <b style="color:#b76b0b;"><marquee scrollamount="2">{{$popular_safari->type}}</marquee></b>
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


                                 <div class="row">
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
                                 <h4 class="text-center"> <b style="color:#b76b0b;"><marquee scrollamount="2">{{$popular_trekking->type}}</marquee></b>
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
                                 <h4 class="text-center"> <b style="color:#b76b0b;"><marquee scrollamount="2">{{$popular_holiday->type}}</marquee></b>
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


             <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12 text-right">
            <a class="btn-transparent" href="/popularExperienceClient" target="_blank" style="color:#296820; font-size:15px"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
            </a>
          </div>
             </div>
          </div>
 </section>

<!-- END WHY CHOOSE US -->
<!-- START COUNTER -->
  <hr class="">

  <section>
<div class="destinantion-block destinantion-v1 border-bottom border-color-8">
    <div class="container">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-4">
           <div class="col-md-12 text-center">

<h2 class="" style="color:#b76b0b;">
Popular Destinations
</h2>


<br>
        </div>
        </div>

        <div class="mb-1">
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
<br>
</section>

  <br>
 <section>
   <div class="container">
  
              <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
     <div class="service-box-heading" style="background-color: #496f50;">             
                             <h3 class="" style="color:#37fd00;">Quick Link</h3>
           @foreach ($datasLink as $data)
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="" style="background-color: #458652;color:#fff;">
                          <ul>
                       <li><a href="/QuickLink/{{$data->id}}"><b>{{$data->quick_title}}</b></a><li>  </ul>
               </div>
           </div>
             @endforeach
        </div>
      </div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonials-v1">
      <div class="service-box-heading" style="background-color: #496f50;">
     <h3 class="" style="color:#37fd00;">Testimonials</h3>
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













    <section class="ftco-section bg-light">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">New Shoes Arrival</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>          
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.png" alt="Colorlib Template">
                            <span class="status">50% Off</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.png" alt="Colorlib Template">
                            <span class="status">50% Off</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="#">Nike Free RN 2019 iD</a></h3>
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
        <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(images/choose-1.jpg);">

                        <div class="text text-center text-white px-2">
                                <span class="subheading">Men's Shoes</span>
                            <h2>Men's Collection</h2>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-8">
                    <div class="row no-gutters choose-wrap divider-two align-items-stretch">
                        <div class="col-md-12">
                            <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(images/choose-2.jpg);">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="text text-white px-5">
                                        <span class="subheading">Women's Shoes</span>
                                        <h2>Women's Collection</h2>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                                        <div class="text text-center px-5">
                                            <span class="subheading">Summer Sale</span>
                                            <h2>Extra 50% Off</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(images/choose-3.jpg);">
                                        <div class="text text-center text-white px-5">
                                            <span class="subheading">Shoes</span>
                                            <h2>Best Sellers</h2>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
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

 




    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="services-flow">
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="text">
                            <h3>Free Shipping</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-heart-box"></span>
                        </div>
                        <div class="text">
                            <h3>Valuable Gifts</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="text">
                            <h3>All Day Support</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="text">
                            <h3>All Day Support</h3>
                            <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-lg-7">
            <div class="heading-section ftco-animate mb-5">
                <h2 class="mb-4">Our satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              </div>
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Follow Us On Instagram</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-2 ftco-animate">
                        <a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                        </a>
                    </div>
        </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
            <div class="mouse">
                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                        </a>
                    </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Minishop</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                  <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                    <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                    <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                    <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                    <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">FAQs</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 @endsection