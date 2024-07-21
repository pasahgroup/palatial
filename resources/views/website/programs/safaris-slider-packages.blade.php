@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2>{{$programs->tour_name}}</h2>
    </div>
 </section>

</section>
    <section class="ws-section-spacing bg-gray">
    <div class="container-fluid">
          <!-- Start of Image filled from slider -->
             <div class="package-list-wrap ">
                
                 <img src="{{URL::asset('/storage/uploads/'.$programs->attachment) }}" class="" alt="det-img" style="min-height: 35vh !important;max-height:50vh !important;background-size:100% 100%;width: 100%;">
                 
                <div class="package-list-content">
                    <p class="package-list-duration"> <span
                            class="">{{$programs->title}}
                            </span>
                                
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"></a>
                    </h3>
                    <a role="button" class="btn btn-primary text-center" href="{{ route('safaris.show',$programs->id) }}">Acquire</a>                    
                </div>
                </div>              
                <div  class="col-lg-12 col-md-12 col-sm-12">
                 <p>
                  {{$programs->description}}
                 </p>
                </div>
            
      <!-- End of Image filled from slider -->
      <section class="text-center bg-white">
 
     <!-- Content Header (Page header) -->
         @if($message = Session::get('success'))
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> {{$message}}
  </div>
  @endif

 @if($message = Session::get('info'))
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> {{$message}}
  </div>
  @endif   

 @if($message = Session::get('error'))
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> {{$message}}
  </div>
  @endif     
</div>
   
 </section>





  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">

    <div class="container" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            @foreach ($safaris as $safari)

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:">{{$safari->sales_header}}</b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$safari->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $safari->tour_name }}</i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $safari->tour_name }}</a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;">{{ $safari->days }} Days, {{ $safari->days -1 }} Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($safari->price),2 }} </strong>
                                                                                     </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right">{{$safari->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$safari->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$safari->tour_code }}</strong></div>


<hr>
                                                                        <div class="text-right">
                                                                                 

                                                                                                 @if($safari->category=="Private") 
                            <a href="{{ route('safaris.show',$safari->id) }}" class="booking-btn text-center"><b>View More</b></a>
                               @endif 

                                           @if($safari->category=="Group") 
                            <a href="{{ route('grouptour.show',$safari->id) }}" class="booking-btn text-center"><b>View More</b></a>
                               @endif
                                                                        </div>
            </div>

</div>


                                @endforeach





        </div>  

    </div>
</div>
</section>

@endsection