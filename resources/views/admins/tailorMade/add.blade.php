
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" style="background-color:#9bbda2;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="mb-2">
          <div class="col-sm-6">
            <h3>Add Route Itinerary and Attachment</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Route attachment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <section class="content-header">
      <div class="container">
        <div class="card-header">
        <div class="col-md-10">
        <h3 class="card-title">Customer name: <b>{{$routes->first_name}} {{$routes->last_name}}</b></h3>
      </div>
        <div class="col-sm-2">
          <a href="/tailorMade" class="btn btn-secondary float-right"><<</a>
        </div>
      </div>
     <form  method="post" action="{{ route('storeTailorMade',$routes->id)}}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
 @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="card-body">

                                 <div class="col-12" id="accordion">
                                      <div class="card">
                                          <a class="d-block w-100" data-toggle="collapse" href="">
                                              <div class="card-header">
                                                  <h4 class="card-title w-100">
                                                   Customer name: <b>{{$routes->first_name}} {{$routes->last_name}}</b>
                                                  </h4>
                                              </div>
                                          </a>
                                          <div id="#" class="#">
                                              <div class="color-palette-set">
                                                  <div class="disabled color-palette">
                                                {{-- Days  data  starts here --}}

                      <div class="row" style="padding:10px">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Tour Name</label>
                         <div class="col-sm-8 col-md-8">
                           <select class="form-control" name="tour_name">

                                 @foreach($tailorTours as $tailorTour)
                                 <option value="{{$tailorTour->id}}">{{$tailorTour->tour_name}}</option>
                               @endforeach
                           </select>
                         </div>
                           </div>
                       </div>

                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       <div class="form-group row">
                         <label for="mealplan" class="col-sm-4 col-md-4 col-form-label">physical rating</label>
                         <div class="col-sm-8 col-md-8">
                           <select class="form-control" name="physical_rating">
                   <option value="0">--physical rating--</option>
                   <option>Easy</option>
                   <option>Average</option>
                   <option>Demanding</option>
                   <option>Challenging</option>
                 </select>
                         </div>
                         </div>
                       </div>
                     </div>




                      <div class="row" style="padding:10px">
                              <div class="col-lg-12 col-md-12">
                                  <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-md-2 col-form-label">Itinerary Summary</label>
                                    <div class="col-sm-10 col-md-10">
                                        <textarea  class="form-control" name="itinerary_summury" max="160"></textarea>
                                    </div>
                                      </div>
                                  </div>
                                 </div>

  <div class="row" style="padding:10px">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Unit cost</label>
                                        <div class="col-sm-6 col-md-6">
                                          <input name="price" type="number" min="0" value="0.00">
                                        </div>
                                          </div>
                                      </div>


                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Currency</label>
                                  <div class="col-sm-6 col-md-8">
                                    <select class="form-control" name="currency">
                                      <option value="0">--Select Currency--</option>
                                      <option value="USD">USD</option>
                                      <option value="Tsh">Tsh</option>
                                  </select>
                                  </div>
                                    </div>
                                </div>


               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Photo</label>
                                  <div class="col-sm-8 col-md-8">
                                    <input name="attachment[]" type="file" id="main_img" multiple>
                                  </div>
                                    </div>
                                </div>
                         </div>

                                  </div>
                                    </div>
                                  {{-- Days data ends here --}}
                                              </div>
                                          </div>
                                      </div>
                                  </div>



                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                    <input type="hidden" name="tour_addon" value="{{$tour_addon}}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="days" value="{{ $routes->days }}">
                    <input type="hidden" name="customer_id" value="{{ $routes->id }}">
                        </div>

                        @for($i = 1; $i <= $routes->days; $i++)
                        {{-- Days Itinerary --}}
                       <div class="col-12" id="accordion">
                            <div class="card">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapse{{ $i }}">
                                    <div class="card-header bg-primary">
                                        <h4 class="card-title w-100">
                                           Day {{ $i }}
                                        </h4>
                                    </div>
                                </a>
                                <div id="collapse{{ $i }}" class="collapse @if($i==1)show @endif" data-parent="#accordion">
                                    <div class="color-palette-set">
                                        <div class="bg-primary disabled color-palette">
                                    <div class="card-body">
                                      {{-- Days  data  starts here --}}

            <div class="row" style="padding:10px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Days {{ $i }} Title </label>
                      <div class="col-sm-10">
                        <input type="hidden" name="day[]" value="{{ $i }}">
                        <input type="text" name="itinerary_title[]" class="form-control" placeholder="Day {{ $i }} title">
                      </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-md-2 col-form-label">Day {{ $i }} Description</label>
                          <div class="col-sm-10 col-md-10">
                            <textarea name="itinerary_description[]" class="form-control" cols="30" rows="2"></textarea>
                          </div>
                            </div>
                        </div>

       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Destination</label>
                              <div class="col-sm-8 col-md-8">
                                <select name="destination_id[]" id="" class="form-control"  required="">
                                    <option value="">--Select Destination--</option>
                                    @foreach ($destinations as $destination)
                                    <option value="{{ $destination->id }}">{{ $destination->destination_name }}</option>
                                    @endforeach

                                </select>
                              </div>
                                </div>
                            </div>


   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Distance(KM)</label>
                        <div class="col-sm-6 col-md-8">
                         <input type="text" name="distance[]" class="form-control">
                        </div>
                          </div>
                      </div>


 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Trans.</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="transport[]" id="" class="form-control"  required="">

                             <option value="">--Transport--</option>
                            <option>Safari Land cruiser</option>
                             <option>Mini-Bus/Min-Van</option>
                               <option>Min-Van</option>
                                <option>Overland Truck</option>
                          </select>
                        </div>
                          </div>
                      </div>

                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Accommodation</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="accommodation_id[]" id="" class="form-control"  required="">
                              <option value="">--Select Accommodation--</option>
                              @foreach ($accommodations as $accommodation)
                            <option value="{{$accommodation->id }}">{{ $accommodation->accommodation_name }}</option>
                              @endforeach
                          </select>
                        </div>
                          </div>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="mealplan" class="col-sm-4 col-md-4 col-form-label">Meal Plan</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="meal[]" id="" class="form-control"  required="">
                              <option value="">--Meal Plan--</option>
                             <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                            <option>Breakfast,Lunch</option>
                            <option>Breakfast,Lunch,Dinner</option>
                          </select>
                        </div>
                        </div>
                      </div>

                        </div>
                        </div>
                          </div>
                        {{-- Days data ends here --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
  <button type="submit" class="btn btn-primary float-right" name="tailor_made" value="tailor_made">Save</button>
                         </div>
     </form>
         </div>
    </section>
  </div>

@endsection
