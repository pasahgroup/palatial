@extends('website.layouts.apps')
@section('content')

  <section class="bg-gray ">
        <div class="container">   
                  
                 <a href="#"></a>
               <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search_area search_area_two booking-tour">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="center-title ">
                                    <h2 class="title">View Your Trip Details</h2>
                                                       </div>
                            </div>
                        </div>
                        <!--Search Form-->
                  
                           <form  method="post" id="post_form" action="{{ route('viewTrip') }}">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="">Enter Your Pin No:</label>
                                    <div class="form-group">                                                                 
                                    <input type="number" name="pin" placeholder="pin no" min="2">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for=""></label>
                                    <div class="form-group">     
                                     <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn-tour">Submit</button>
                                </div> 
                                </div>                             
                      

                                </div>       
                              
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
@endsection

