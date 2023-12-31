<?php $__env->startSection('content'); ?>

  <section class="bg-gray ">
        <div class="container">
            <div class="package-list-wrap ">
                <img src="<?php echo e(URL::asset('/storage/uploads/'.$programs->attachment)); ?>" class="img-fluid" alt="det-img" style="height:400px !important">
                <div class="package-list-content">
                    <p class="package-list-duration"><?php echo e($programs->days); ?> Days, <?php echo e($programs->days -1); ?>  Night(s)
                                </p>
                    <h3 class="package-list-title">
                        <a href="#"><?php echo e($programs->tour_name); ?></a>
                    </h3>
                </div>
           <?php if($discounts !=[]): ?>
           <span class="off-box">            
                 <div class="col-md-12 col-sm-12 col-xs-12">
                                           <span class="text-danger" style="font-size:18px"><strong>$<?php echo e($discounts->new_price); ?> </strong> pp
                                           </span><s style=""><sup>$ <?php echo e($programs->price); ?> </sup></s><br>
                                            <span style="font-size:12px;">Save $<?php echo e($discounts->save); ?></span>
                </div>
              </span>
              <?php else: ?>
               <span class="off-box">Total Costs: $<?php echo e(number_format($programs->total_cost)); ?></span>
              <?php endif; ?>
             </div>

            <div class="row ">
                
                <div class="col-lg-9 col-md-9 col-sm-12 masonry ">
                    <div class="package-detail">
                              <div class="tab" id="myTabContent">
                                    <button class="tablink" onclick="openPage('tabH', this, 'orange')">Highlight</button>
                                    <button class="tablink" onclick="openPage('tabI', this, 'orange')" id="defaultOpen" >Itinerary</button>
                                    <button class="tablink" onclick="openPage('tabA', this, 'orange')">Accommodations</button>
                                    <button class="tablink" onclick="openPage('tabC', this, 'orange')" >Tour Cost</button>
                                    <button class="tablink" onclick="openPage('tabE', this, 'orange')">Extra Information</button>
                            </div>
                        <div id="tabH" class="tabcontent">
                            <p>
                                <b>Tour Short Desc:</b> <?php echo e($programs->tour_highlight); ?></p>
                                    <hr>
                                <p>Maps Come Here</p>
                            </div>
                            
                            <div id="tabI" class="tabcontent">

                                            <p class="card-text">Summary:
                                                <?php echo e($programs->itinerary_summury); ?>

                                            </p>
                                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card card-primary card-outline">
                                                <div class="card-header">
                                                <h5 class="m-0"> Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></h5>
                                                </div>
                                                <div class="card-body">

                                                

                                                <div class="row masonry-item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                                       <div class="">

                                <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss">

                               <p><?php echo e($data->itinerary_description); ?></p>  
                                                              <hr>                                  
                                                               <div class="row">                                    
                                                                 <div class="col-md-6 col-lg-6 col-sm-12">                                                               <div class="rating">                                                                            <h4>Destination</h4>                                                                        </div>                                                                        <a class="map-viw" href="#"><i class="fa fa-map-marker"></i> <?php echo e($data->destination_name); ?></a>                                                                 </div>                                                                    
                               <div class="col-md-6 col-lg-6 col-sm-12">                                                                   <div class="rating">                                                                          <h4>Accommodation</h4>                                                                        </div>                                                                        <a class="map-viw" href="#"><i class="fa fa-home"></i> <?php echo e($data->accommodation_name); ?></a>                                              </div>
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                           <div class="hotel-pics-one">                              <img src="<?php echo e(URL::asset('/storage/uploads/'.$data->attachment)); ?>" class="img-fluid" alt="det-img" style="height:200px !important">                                                                        </div>                                                  </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                
                                            </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

<div id="tabA" class="tabcontent">
 <p>Photo Comes Here</p>
                            <p><b>Accomodation Name: </b>
                              <?php echo e($data->accommodation_name); ?></p>
                            <p><b>Description: <?php echo e($data->accommodation_descriptions); ?></b></p>
                            <p><b>Category: <?php echo e($data->category); ?></b></p>
</div>

<div id="tabC" class="tabcontent">

        <div class="card">
        <div class="card-body">
            <div class="card-body">
    <table class="table table-bordered data-table"> 
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:white"><b>Tour Cost Summary Table</b></th>
        </tr>
        
        <tr>
        <th><b>#<b></th>       
          <th><b>Start Date</b></th>
           <th><b>End Date</b></th>
           <th><b>Price(USD)</b></th>
          <th><b>SRS(USD)</b></th>
           <th><b>Available Seats</b></th>           
                 </tr>

                    <?php $__currentLoopData = $basic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datab=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($value->id); ?></td>
                    <td> <?php echo e($value->start_date); ?></td>
                     <td><?php echo e($value->end_date); ?></td>
                   <td><?php echo e($value->price); ?> <?php echo e($value->currency); ?></td>
                    <td><?php echo e($value->srs); ?> USD</td>
                    <td><?php echo e($value->seats); ?></td>
                  </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>

      
                            </div>
                        </div>
                     </div>
                    </div>
                        <div id="tabE" class="tabcontent">
                             <p>Photo Comes Here</p>
                            <p><b>Accomodation Name: </b>
                              <?php echo e($data->accommodation_name); ?></p>
                            <p><b>Description: <?php echo e($data->accommodation_descriptions); ?></b></p>
                            <p><b>Category: <?php echo e($data->category); ?></b></p>
                        </div>

                    </div>
                    </div>

                    
                    <div class="col-md-3 col-lg-3 masonry">
                        <div class="card">
                        <div class="card-body">
                            <div >

                                 <h4>TOUR SUMMARY</h4>
                                 <hr>
                                    <div>Tour Name: <b><?php echo e($programs->tour_name); ?></b></div>
                                     <div>Tour Type: <b><?php echo e($programs->type); ?></b></div>
                            <div>Tour Category: <b><?php echo e($programs->category); ?></b></div>
                            <div>Tour Style: <b><?php echo e($programs->style); ?></b></div>
                            <div>Tour Duration: <b><?php echo e($programs->days); ?> Days</b></div>
                            <div>Group Size: <b><?php echo e($value->seats); ?></b></div>
                            <div>Starts: <b><?php echo e($value->start_date); ?></b></div>
                            <div>Ends: <b><?php echo e($value->end_date); ?></b></div>
                            <div>Duration: <b><?php echo e($programs->days); ?> Days</b></div>
                            <div>Countries: <b>Tanzania</b> </div>
                            <hr>
                            <div>Destinations:
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destnation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($destnation->destination_name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <hr>
                      
                        <div class="col-lg-12 text-center">
                              <?php if($programs->payee_status !='Paid'): ?>
                              <a href="#" role="button" class="btn btn-success text-center" data-toggle="modal" data-target="#payNow">Pay Now</a>
                            <?php else: ?>
                            <p style="font-style: color:red"><span class="text-primary">Invoice  Alread Paid</span></p>
                              <?php endif; ?>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-lg-12 text-center">
                            <a href="#" role="button" class="btn btn-secondary text-center" data-toggle="modal" data-target="#payNow">Print Invoice</a>
                            </div>
                            </div>                     
                    </div>


                </div>
                </div>

                </div>
            </div>

        </div>
    </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="payNow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e($programs->tour_name); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      <form  method="post" id="post_form" action="/groupPay/<?php echo e($tourInvoice->id); ?>">
    <?php echo csrf_field(); ?>
    <div class="row">      
     <div class="col-md-6">
        <div class="form-group">
            <label for="">Amount:</label>
          <input type="number" class="form-control" placeholder="0.00" name="amount" value="">
        </div>
     </div>

     <div class="col-md-6">
        <div class="form-group">
      <label for="">Payment Date:</label>
      <div class="form-group date input-datepicker">
          <input type="date" class="form-control" name="payee_date"
              data-date-format="yyyy-mm-dd" placeholder="payment date" value="<?php echo date("Y-m-d");?>">
                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
      </div>

     </div>
     </div>

        </div>
        </div>


<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Pay</button>
</div>
</form>
</div>
</div>
</div>


<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";
  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$('#myTab a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/payments/groupPaySummary.blade.php ENDPATH**/ ?>