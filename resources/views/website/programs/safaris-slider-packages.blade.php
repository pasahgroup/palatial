@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2>{{$programs->tour_name}}</h2>
    </div>
 </section>

</section>

    <div class="container-fluid">
          <!-- Start of Image filled from slider -->
          {{--
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
--}}
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
   <div class="container-fluid" style="padding-bottom:0px;">

       <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>


     <div class="px-xl-5 pb-3">
 <div class="col-md-12 col-sm-12 pb-1" style="background-color:#f0f0f0">


                               @foreach ($safaris as $safari)

 <div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149;">

      <h5 class="text-center"><b style="color:#fff;">{{$safari->type}}</b></h5>
           <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

 <div class="single_blog listing-shot">
               <div class="product-item bg-light mb-4">
                  <div class="listing-shot-img">
               <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#486841;color:#fde205"><strong>${{ number_format($safari->price),2 }}</strong></div>

                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$safari->attachment) }}" alt="" style="height:250px;">
                       <div class="product-action">

                           @if($safari->category=="Private")
<a href="{{ route('safaris.show',$safari->id) }}" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  {{ $safari->tour_name }}</i></a>

@endif

@if($safari->category=="Group")
<a href="/safaris/{{$safari->id}}" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  {{ $safari->tour_name }}</i></a>

@endif
                       </div>
                   </div>

                       <h5 class="text-center" style="font-size:20px;"><strong class="demo-3">{{ $safari->tour_name }}</strong></h5>

               </div>
                </div>

 <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                        <strong style="color:#fff">Tour Duration:<br> <b style="color:#fde205">{{ $safari->offer_deadline }}</b></strong>
                                                                                </div></b>
                                                                                <div class="float-right">
                                                                               <span class="text-danger" style="font-size:15px"><strong style="color:#fde205">{{ $safari->days }} Days, {{ $safari->days -1 }} Nights </strong>
                                                                                </div>

          </div>

 <div>Physical Rating:          <strong class="float-right">{{$safari->physical_rating }}</strong></div>
 <div>Tour Category:          <strong class="float-right">{{$safari->category }}</strong></div>
 <div>Tour Code:          <strong class="float-right">{{$safari->tour_code }}</strong></div>


 <hr>
                                                                       <div class="text-right">
                                                                                   @if($safari->category=="Private")
                          <a href="{{ route('safaris.show',$safari->id) }}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                          @endif

                             @if($safari->category=="Group")
                          <a href="/safaris/{{$safari->id}}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                          @endif

                                                                       </div>
           </div>
 </div>


                               @endforeach


   </div>
 </div>

 </div>
   <div class="container">
       {!! $safaris->links() !!}
 </div>
 </section>

<script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
@endsection
