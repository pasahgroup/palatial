@extends('website.layouts.apps')
@section('content')



    <link href="../custom/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../custom/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../custom/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../custom/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../custom/css/style.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="style.css">



<style>
.bgimg{
     max-height: 92vh !important;
    min-height: 20vh !important;
    /*width: 100%;*/
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
<style type="text/css">
    .color
    {
        color:#fff;
    },
     .colort
    {
        color:#2d7d10;
    },
   
    

</style>
<style type="text/css">
      .yellow
    {
        color:yellow;
    }
</style>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
    @isset($sliders)      

@foreach ($sliders as $slides)
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{URL::asset('/storage/uploads/'.$slides->attachment)}}'>">
                <img class="img-fluid bgimg" src="{{URL::asset('/storage/uploads/'.$slides->attachment)}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                 <h3 class="yellow">{{ $slides->tour_name }}</h3>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3 color">{{ $slides->description }}.</p>
                                <a href="{{ route('safaris-slider',$slides->tour_id) }}" class="btn btn-primary py-1 px-5 animated slideInLeft text-white">Read More >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach


@foreach ($quickLinkSliders as $quickSliderf)
            <div class="owl-carousel-item position-relative" data-dot="<img src={{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}>">
                <img class="img-fluid bgimg" src="{{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                 <h4 class="yellow">{{ $quickSliderf->quick_title }}</h4>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3 color">{{ $quickSliderf->quick_description }}.</p>
                                <a href="/QuickLink/{{$quickSliderf->id}}" class="btn btn-primary py-1 px-5 animated slideInLeft yellow">Read More >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach

<br>
       
 @endisset
        </div>
        <div class="container">
        <div class="">
            <b><marquee scrollamount="2" style="color:#b76b0b; font-size:15px">Palatial Tour and Adventure Welcomed you to Experience the beauty of Tanzania</marquee></b>
                </div>
    </div>
    </div>


 @isset($welcome_message)
<div class="container">
	 @foreach($welcome_message as $message)
									 <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
										 <img src="{{URL::asset('/storage/uploads/'.$message->attachment)}}" class="img-fluid" alt="Palatial Image" style="height:200px;width:100%;">
										</div>
										<div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
											<h2><a href="#">{{$message->quick_title}}</a></h2>
											<h4><a href="#">Welcome to <b>Palatial Tours</b></a></h4>
											<hr>
											<h6 class="text-white">{{$message->quick_description}}.</h6>
									</div>
						
								@endforeach
		
	 @endisset
	 </div>
 <!-- Experience v1 -->

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

         <section>
     <div class="container">
    
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
     <div class="service-box-heading" style="background-color: #496f50;">                           
                             <h3 class="" style="color:yellow;">Partnering with SafariBookings.com</h3>
             
                     <div class="col-lg-7col-md-12 col-sm-12 col-xs-12">
                                 <div class="" style="background-color: #458652;color:#fff;">
                                                    <ul>
                                             <li><a href="https://www.safaribookings.com/"><b>www.safaribookings.com</b></a><li>  </ul>
                             </div>
                     </div>
                      
                </div>
            </div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonials-v1">
      <div class="service-box-heading" style="background-color: #496f50;">
     <h3 class="" style="color:yellow;">Partnering with SafariBookings.com</h3>
                                 <span><a href="https://www.safaribookings.com/"><b>www.safaribookings.com</b></a></span>
                                 <div id="myCarousel1" class="carousel slide">
                                     <!-- Carousel items -->
                                  
                                 </div>

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

		{{-- Modal for booking form --}}
<!-- Modal -->
<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

	 <form  method="post" id="post_form" action="{{ route('Testimonies.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
								@csrf

		<div class="row">
			 <div class="col-md-6">
				<div class="form-group">
					 <input type="hidden" name="user_id" value="{{ Auth::id() }}">
						<label for="">Full name:</label>
					<input type="text" class="form-control" placeholder="full name" min="1" name="full_name">
				</div>
		 </div>

		 <div class="col-md-6">
				<div class="form-group">
						<label for="">Rate us(1-5):</label>
					<select name="rank" id="" class="form-control">
																			<option value="">Select Category</option>
																			<option value="1">1</option>
																				<option value="2">2</option>
																			 <option value="3">3</option>
																				 <option value="4">4</option>
																					 <option value="5">5</option>
																		</select>

		 </div>
		 </div>

		 <div class="col-md-12">
								<div class="form-group">
										<label for=""> Comments</label>

				 <textarea class="form-control" id="" cols="2" rows="2" name="comments" placeholder="comments..."></textarea>
				</div>
		 </div>
			<div class="col-md-12">
								<div class="form-group">
										<label for=""> Upload your Photo</label>
										<input name="attachment[]" type="file"  multiple>
														<input type="hidden" class="form-control" name="status"  min="0" max="1" value="0" placeholder="0">
														<input type="hidden" class="form-control" name="client" value="Client">
				</div>
		 </div>
		</div>
		 </div>

<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
{{-- end of booking form madal --}}



  <!-- JavaScript Libraries -->
<!--     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->

    
    <script src="../custom/lib/wow/wow.min.js"></script>
    <!-- <script src="../custom/lib/easing/easing.min.js"></script> -->
    <!-- <script src="../custom/lib/waypoints/waypoints.min.js"></script> -->
    <script src="../custom/lib/counterup/counterup.min.js"></script>
    <script src="../custom/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../custom/lib/tempusdominus/js/moment.min.js"></script>
    <!-- <script src="../custom/lib/tempusdominus/js/moment-timezone.min.js"></script> -->
    <script src="../custom/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../custom/js/main.js"></script>
 @endsection