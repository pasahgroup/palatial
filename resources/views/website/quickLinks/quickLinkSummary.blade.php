@extends('website.layouts.apps')
@section('content')

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
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <section class="bg-gray ">
        <div class="container-fluid">
            @isset($quickLinks->attachment)
            <div class="package-list-wrap">            
                         <img src="{{URL::asset('/storage/uploads/'.$quickLinks->attachment?? '') }}" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%; opacity:1">

             
                <div class="package-list-content">
                  <span>Home/Quick-Link </span>
                                     <h3 class="package-list-title">
                        <a href="#"><b style="color: white;">{{ $quickLinks->quick_title }}</b></a>
                    </h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color:#1da625; background-color:#fff; font-style:italic;">
          {{$quickLinks->quick_description ?? ''}}.
       
        </p>         
    </div>
                      </div>
                         @endisset

           </div>

        </div>
    </div>
    </section>

<hr>



  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;"> 

    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;">Tour Packages</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
    



    <div class="container-fluid" style=" padding-bottom:0px;">

   <div class="south-search-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                               
  
  <div class="col-12 col-sm-6 col-xl-3" style="padding-left:20px;padding-right:20px;">
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


 @if($popular_safarif->count()>0)  
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

        @else

                      <div class="single-featured-properties-slide">

             <div class="item">
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

    

  @endif



                            </div>
                        </div>
                    </div>



  
  <div class="col-12 col-sm-6 col-xl-3" style="padding-left:20px;padding-right:20px;">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                             <h6>Beach Holiday</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                 



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



                             @if($popular_holidayf->count()>0)                           

                                  @foreach ($popular_holidayf as $safaris)   
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
                                @else

                         <div class="single-featured-properties-slide">

             <div class="item">
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

    

  @endif
                              
                            </div>
                        </div>
                    </div>





       <div class="col-12 col-sm-4 col-xl-3" style="padding-right:20px;">
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





                                  @if($popular_trekkingf->count()>0) 
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

                                          @else

                
   <div class="single-featured-properties-slide">
    <div class="item">
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

    

  @endif
                            </div>
                        </div>
                    </div>

                           <div class="col-12 col-sm-4 col-xl-3" style="padding-right:20px;">
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







                                @if($popular_historicalf->count()>0) 
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

                  @else

                
  <div class="single-featured-properties-slide">
    <div class="item">
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
    

  @endif

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>


       </div>     
    </div>
</div>
</section>

 
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
    <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
@endsection

