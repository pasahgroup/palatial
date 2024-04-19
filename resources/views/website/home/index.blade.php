@extends('website.layouts.apps')
@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">

        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
           
           @foreach ($sliders as $slides)
            <div class="single-hero-slide bg-img" style="background-image: url(../assetf/img/bg-img/hero1.jpg);">
                <div class="container h-100" style="height:10% !important;">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important;">{{ $slides->tour_name }} </h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1">{{ $slides->description }}</p>


                                                                    <p><a href="{{ route('safaris-slider',$slides->tour_id) }}" data-animation="animated fadeInUp">
                                                                        <b>Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    @endforeach


      @foreach ($quickLinkSliders as $quickSliderf)
             <div class="single-hero-slide bg-img" style="background-image: url({{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}});">
                  <div class="container h-100" style="height:10% !important;">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h3 data-animation="fadeInUp" data-delay="100ms" style="color:#fff !important">{{ $quickSliderf->quick_title }}</h3>
                            </div>
                        </div>


    <div class="wrapper">
                                                                     <p class="demo-1">{{ $quickSliderf->quick_description }}</p>


                                                                    <p><a href="/QuickLink/{{$quickSliderf->id}}" data-animation="animated fadeInUp">
                                                                        <b>Read More <i class="fa fa-angle-double-right"></i></b></a></p>
                                                                    </div>

                    </div>
                </div>
            </div>
    @endforeach




            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../assetf/img/bg-img/hero3.jpg);">*/
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search Tour By</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>All Cities</option>
                                            <option>Riga</option>
                                            <option>Melbourne</option>
                                            <option>Vienna</option>
                                            <option>Vancouver</option>
                                            <option>Toronto</option>
                                            <option>Calgary</option>
                                            <option>Adelaide</option>
                                            <option>Perth</option>
                                            <option>Auckland</option>
                                            <option>Helsinki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>All Catagories</option>
                                            <option>Apartment</option>
                                            <option>Bar</option>
                                            <option>Farm</option>
                                            <option>House</option>
                                            <option>Store</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>All Offers</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="listings">
                                            <option>All Listings</option>
                                            <option>Listings 1</option>
                                            <option>Listings 2</option>
                                            <option>Listings 3</option>
                                            <option>Listings 4</option>
                                            <option>Listings 5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mil - 1300 mil</div>
                                    </div>
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>All Types</option>
                                                    <option>Apartment <span>(30)</span></option>
                                                    <option>Land <span>(69)</span></option>
                                                    <option>Villas <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>All Catagories</option>
                                                    <option>Apartment</option>
                                                    <option>Bar</option>
                                                    <option>Farm</option>
                                                    <option>House</option>
                                                    <option>Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
















 <section class="featured-properties-area section-padding-100-50">
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

    <div class="container-fluid">
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
                                         <span class="off-box">{{ $popular_safari->days  }} Days: ${{number_format($popular_safari->price),2 }}</span>
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
                                            <span class="off-box">{{ $safaris->days  }} Days: ${{number_format($safaris->price),2 }}</span>
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
                                                                                 <span class="off-box">{{ $popular_holiday->days  }} Days: ${{number_format($popular_holiday->price),2 }}</span>
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
                                                                                 <span class="off-box">{{ $holidays->days  }} Days: ${{number_format($holidays->price),2 }}</span>
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
                                                                                <span class="off-box">{{ $popular_trekking->days  }} Days: ${{number_format($popular_trekking->price),2 }}</span>
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
                                            <span class="off-box">{{ $trekking->days  }} Days: ${{number_format($trekking->price),2 }}</span>
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
                                                                                 <span class="off-box">{{ $popular_historical->days  }} Days: ${{number_format($popular_historical->price),2 }}</span>
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
                                                                                        <span class="off-box">{{ $historicalf->days  }} Days: ${{number_format($historicalf->price),2 }}</span>
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
</section>





<section class="featured-properties-area section-padding-100-50">
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

    <div class="container">
           <div class="row">


    @foreach ($offers_private as $special_private)
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:">{{$special_private->sales_header}}</b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                                                            <div class="listing-badge now-open"><strong>{{ round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
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
</div>
</section>




















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






   <section class="featured-properties-area section-padding-100-50">
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



                <hr>
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


                         <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <a class="btn-transparent" href="/popularExperienceClient" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
                        </a>
                    </div>
                         </div>
                    </div>
 </section>






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
     <div class="service-box-heading" style="background-color: #496f50;">
                            <p><b>Quick Link</b></p>
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







<!-- START COUNTER -->
    <hr class="">

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2  style="color:#b76b0b";>Popular Destinations</h2>
                    </div>
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
    </section>


@endsection