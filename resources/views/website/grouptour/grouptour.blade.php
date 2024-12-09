@extends('website.layouts.apps')
@section('content')

<style>
.bg-bannerw{
     @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
     @endisset

   height: 75%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>



<section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
  <div class="container-fluid" style="padding-bottom:0px;">

      <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>


    <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#f0f0f0">


                              @foreach ($safaris as $safari)

<div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149;">
       <h5 class="text-center"><b style="color:#fff;">
       @if($safari->group_tour_category=="GS")
<span style="color:#fff;">Scheduled Group Tour</span>
@elseif($safari->group_tour_category=="SO")
<span style="color:#fff;">Special Ocassion Tour</span>
@else
<span style="color:#fff;">Utalii Nyumbani Tour</span>
@endif
     </b></h5>
          <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

<div class="single_blog listing-shot">
              <div class="product-item bg-light mb-4">
                 <div class="listing-shot-img">
              <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#486841;color:#fde205"><strong>${{ number_format($safari->price),2 }}</strong></div>

                  <div class="product-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$safari->attachment) }}" alt="" style="height:250px;">
                      <div class="product-action">
                          <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $safari->tour_name }}</i></a>
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
                            {{--
                         <a href="/safaris/{{$safari->id}}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                         --}}
                          <a href="{{route('grouptour.show',$safari->id)}}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
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




{{--

  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
    <div class="container-fluid" style="padding-bottom:0px;">

        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>


      <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">


                                            @foreach ($safaris as $program)


 <div class="col-lg-3 col-md-3">
       <h5><b style="background:">
                    @if($program->group_tour_category=="GS")
<span>Scheduled Group Tour</span>
@elseif($program->group_tour_category=="SO")
<span>Special Ocassion Tour</span>
@else
<span>Utalii Nyumbani Tour</span>
@endif

    </b>
       </h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">


                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$program->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $program->tour_name }}</i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $program->tour_name }}</a>
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;">{{ $program->days }} Days, {{ $program->days -1 }} Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($program->price),2 }} </strong>
                                                                                     </span>


                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right">{{$program->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$program->category }}</strong></div>
<div>Tour Code:         <strong class="float-right">{{$program->tour_code }}</strong></div>


<hr>
                                                                        <div class="text-right">
                                                                             <a href="{{route('grouptour.show',$program->id)}}" class="booking-btn text-center"><b>Book Now</b></a>

                                                                        </div>
            </div>

</div>


                                @endforeach





        </div>

    </div>
</div>
</section>
--}}

    <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
@endsection
