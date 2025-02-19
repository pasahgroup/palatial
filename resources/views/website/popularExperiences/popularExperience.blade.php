@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
<style>
.bg-bannerw{

  @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
   @endisset

   height: 80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>


      @isset($PostcategoryImage->attachment)
   <section class="same-section-spacing bg-bannerw">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>{{$title??'Popular Experience'}}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title?? 'Popular Experience'}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
      @endisset


<section class="ws-section-spacing bg-gray">
    <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          {{$PostcategoryImage->body ?? ''}}.
        </b>
        </p>

    </div>
       </div>
    </div>
</section>
</hr>



<section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
  <div class="container-fluid" style="padding-bottom:0px;">
      <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>


    <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#f0f0f0">


                              @foreach ($popularExperiences as $safaris)
<div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149;">

     <h5 class="text-center"><b style="color:#fff;">{{$safaris->type}}</b></h5>
          <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

<div class="single_blog listing-shot">
              <div class="product-item bg-light mb-4">
                 <div class="listing-shot-img">
              <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#486841;color:#fde205"><strong>From: ${{ number_format($safaris->price),2 }}</strong></div>

                  <div class="product-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$safaris->attachment) }}" alt="" style="height:250px;">
                      <div class="product-action">

                          @if($safaris->category=="Private")
    <a href="{{ route('safaris.show',$safaris->id) }}" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  {{ $safaris->tour_name }}</i></a>

    @endif

    @if($safaris->category=="Group")
    <a href="/safaris/{{$safaris->id}}" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  {{ $safaris->tour_name }}</i></a>

    @endif


                      </div>
                  </div>

                      <div class="text-center" style="font-size:18px;">
                        <h5 class="Main-Text">
                          <strong class="demo-3">
                        {{ $safaris->tour_name }}
                      </strong>
                    </h3>
                        <div class="Extra-Text">
                              <h5 class="text-center" style="font-size:18px;"><strong>{{ $safaris->tour_name }}</strong></h3>
                        </div>
                        </div>
              </div>
               </div>

<b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                       <strong style="color:#fff">Tour Duration:<br> <b style="color:#fde205">{{ $safaris->offer_deadline }}</b></strong>
                                                                               </div></b>
                                                                               <div class="float-right">
                                                                              <span class="text-danger" style="font-size:15px"><strong style="color:#fde205">{{ $safaris->days }} Days, {{ $safaris->days -1 }} Nights </strong>
                                                                               </div>

         </div>

<div>Physical Rating:          <strong class="float-right">{{$safaris->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$safaris->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$safaris->tour_code }}</strong></div>


<hr>
                                                                      <div class="text-right">
                                                                                  @if($safaris->category=="Private")
                         <a href="{{ route('safaris.show',$safaris->id) }}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                         @endif

                            @if($safaris->category=="Group")
                         <a href="/safaris/{{$safaris->id}}" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                         @endif

                                                                      </div>
          </div>

</div>


                              @endforeach


  </div>
</div>

</div>
  <div class="container">
  {!! $popularExperiences->links() !!}
</div>
</section>
@endsection
