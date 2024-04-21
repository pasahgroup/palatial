
@extends('website.layouts.apps')
@section('content')






    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search Tour By</p>
                        </div>
                        <!-- Search Form -->
                         <form  method="post"  action="{{ route('tailorMade.store') }}">
                             @csrf
                            <div class="row">
  <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#">Create Tailor Made</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                          <a href="/tailorClientForm" role="button" class="btn btn-primary">Existing Tailor Made</a>
                                    </div>
                                </div>
<br>
                               <!--  <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div> -->

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                     <input type="hidden" class="form-control" name="price" value="">

                                   <input type="hidden" class="form-control" name="currency" value="">                                
                                        <input type="text" name="first_name" class="form-control" placeholder="first name" min="2">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">                              
                                        <input type="text" name="last_name" class="form-control" placeholder="last name" min="2">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" min="2">
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








  <section class="bg-gray">
        <div class="container">   
                  
                 <a href="#"></a>
               <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search_area search_area_two booking-tour contact-form">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="center-title ">
                                    <h2 class="title">Create Tailor Made</h2>
                                                </div>
                            </div>
                             <div class="col-lg-4">
                        <a href="/tailorClientForm" role="button" class="btn btn-primary">Existing Tailor Made</a>
                             </div>
                        </div>
                        <!--Search Form-->
                        
                           <form  method="post"  action="{{ route('tailorMade.store') }}">
                             @csrf
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">First name:</label>
                                    <div class="form-group">    
                                     <input type="hidden" class="form-control" name="price" value="">

                                   <input type="hidden" class="form-control" name="currency" value="">                                
                                        <input type="text" name="first_name" class="form-control" placeholder="first name" min="2">
                                    </div>
                                </div>

                                 <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Last name:</label>
                                    <div class="form-group">   
                                                                 
                                    <input type="text" class="form-control" name="last_name" placeholder="last name" min="2">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Nationality:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" min="2">
                                    </div>
                                </div>
                                  <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Email:</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                 <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Phone:</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" placeholder="phone">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                   <label for="">Arrival Date:</label>
                                    <div class="form-group  input-datepicker">
                                        <input type="text" class="form-control " id="datepicker-3" name="arrival_date"
                                            data-date-format="dd-m-yyyy" placeholder="Arrival Date" value="">
                                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                         
                         <div class="col-lg-12 col-md-12 col-sm-12">
                                  <div class="col-lg-2 col-md-6 col-sm-12">
                                   <label for="">Adults(>16yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="adults" min="0">
                                    </div>

                                </div>
                                <div class="col-lg-3  col-md-6 col-sm-12 pl-0">
                                  <label for="">Teens(13-14yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="teens" min="0">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="children" min="0">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6 col-sm-12 pl-0">
                                   <label for="">Days:</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" placeholder="0" name="days" min="0">
                                    </div>
                                </div>
                            </div>


        <div class="col-lg-6 col-md-12 col-sm-12">
          <label for="">Tour Type:</label>
                                    <div class="form-group icon_down">
                                        <select class="selectpicker search-fields form-control" name="tour_type">
                                              <option value="0">--Select tour type--</option>
                                            <option value="Safaris">Wildlife Safaris</option>
                                            <option value="Trekking">Mt.Trekking & Hiking</option>
                                              <option value="Holidays">Beach Holidays</option>
                                            <option value="Historical_sites">Historical Sites</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Accomodation:</label>
                                    <div class="form-group icon_down">                                     
                                        <select class="selectpicker search-fields form-control" name="accomodation">
                                           <option value="0">--Select Accomodation--</option>
              <option value="Basic">Basic</option>
              <option value="Comfort">Comfort</option>
                <option value="Deluxe">Deluxe</option>
              <option value="Mix">Mix</option>
              <option value="Not sure">Not sure</option>
                                        </select>
                                    </div>
                                </div>
                              <!--   <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn-tour"> Search</button>
                                </div> -->
<!-- New form Starts Here -->
<div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="">Destination:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="destination" placeholder="Destination" min="0">
                                    </div>
                                </div>
                                   <div class="col-lg-4 col-md-6 col-sm-12 pl-0">
                                  <label for="">Min Budget(Budget Range):</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control"placeholder="0.00" name="min_budget" min="0">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                   <label for="">Max Budget:</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control"placeholder="0.00" name="max_budget" min="0">
                                    </div>
                                </div>
     

            <div class="col-md-12">
               <label for="">  Additional Information we should know?</label>
                <div class="form-group">                 

         <textarea rows="3" name="additional_information" placeholder="Type your additional information here..." style="width:  100%" ></textarea>
        </div>
     </div>


      
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <p > How did you hear about us?:</p>
       <div class="col-lg-4 col-md-4 col-sm-6">
                                   
                                    <div class="form-group"><label for="">Facebook</label>
                                       <input id="facebook" type="checkbox"  name="hear[]" value="Facebook">
                                    </div>
                                </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                                 
                                    <div class="form-group">  <label for="">Instagram</label>
                                     <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6">                                 
                                    <div class="form-group">  <label for="">Tweeter
                                     <input id="Tweeter" type="checkbox"  name="hear[]" value="Tweeter"></label>
                                    </div>
                                </div>

        
                                   <div class="col-lg-4 col-md-4 col-sm-6">                                 
                                    <div class="form-group">  <label for="">Google
                                     <input id="google" type="checkbox"   name="hear[]" value="Google"></label>
                                    </div>
                                </div>

                              <div class="col-lg-4 col-md-4 col-sm-6">                                   
                                    <div class="form-group"><label for="mouth">Word of Mouth
                                     <input id="mouth" type="checkbox" name="hear[]" value="Word of Mouth"></label>
                               </div>
                       </div> <!-- end of row -->
                 </div>
                         
                             <div class="col-md-12">
               <label for="">  Other Information?</label>
                <div class="form-group">                 

         <textarea rows="3" name="hear_about_us" placeholder="Other..." style="width:  100%" ></textarea>
        </div>
     </div>

                                   <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn south-btn float-right">Submit</button>
                                </div>        
                              
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
         
    </section>
@endsection

