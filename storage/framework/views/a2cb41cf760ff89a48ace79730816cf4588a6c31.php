<?php $__env->startSection('content'); ?>

  <section class="bg-gray ">
        <div class="container">
            <div class="package-list-wrap ">
                <img src="<?php echo e(URL::asset('/storage/tailorMade/'.$programs->attachment)); ?>" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 75vh;background-size: cover;width: 100%;">
                <div class="package-list-content">
                    <p class="package-list-duration"><?php echo e($programs->days); ?> Days, <?php echo e($programs->days -1); ?>  Night(s) 
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"><?php echo e($programs->first_name); ?> <?php echo e($programs->last_name); ?></a>
                    </h3>
                </div>
            <span class="off-box">Price $<?php echo e(number_format($programs->calculated_cost)); ?></span>
            </div>

            <div class="row ">
                
                <div class="col-lg-9 col-md-9 col-sm-12 masonry ">
                    <div class="package-detail">
                              <div class="tab" id="myTabContent">
                                    <button class="tablink" onclick="openPage('tabH', this, 'orange')">Highlight</button>
                                    <button class="tablink" onclick="openPage('tabI', this, 'orange')" id="defaultOpen" >Itinerary</button>                                    
                            </div>
                      <div id="tabH" class="tabcontent">
                            <p>
                                <?php echo e($programs->tour_highlight); ?></p>
                                    <hr>
                                <p>Maps Come Here</p>
                            </div>
                            
                           <div id="tabI" class="tabcontent">
                                            <p class="card-text">
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
                                <div class="col-lg-6">
                                <div class="hotel-diss">
                               <p><?php echo e($data->itinerary_description); ?> desc</p>   
                               <hr>                  
                                                     
                               <div class="row"> 
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <p><b class="text-success">Distance:</b> <?php echo e($data->distance); ?> KM <b class="text-success">Transport:</b> <?php echo e($data->transport); ?></p>

                                          <p><b class="text-success">Accommodation:</b> <?php echo e($data->accommodation_name); ?> | <b class="text-success">Meal Plan:</b> <?php echo e($data->meal); ?></p>
                                      </div>           
                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                           
                                            <div class="hotel-pics-one">                                               <img src="<?php echo e(URL::asset('/storage/uploads/'.$data->attachment)); ?>" alt="" style=" height:200px !important">                                                                        </div>                                                
                                                      </div>
                                                        </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                
                                            </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     
                    </div>
                    </div>

                    
                    <div class="col-md-3 col-lg-3 masonry">
                        <div class="card">
                        <div class="card-body">
                            <div >
                                <h4 class="text-secondary"> Tour Summary</h4>
                            </div>
                            <div>Name: <b><?php echo e($programs->full_name); ?></b></div>
                            <div>Tour Type: <b><?php echo e($programs->tour_type); ?></b></div>
                            <div>Physical Rating: <b><?php echo e($programs->physical_rating); ?></b></div>
                            <div>Tour Cost: <b><?php echo e($programs->currency); ?> <?php echo e(number_format($programs->calculated_cost)); ?></b></div>
                            <hr>
                            <div>Start Date: <b><?php echo e($programs->arrival_date); ?> </b> </div>
                            <div>End Date:<b><?php echo e($programs->end_date); ?></b> </div>
                            <div>Duration: <b><?php echo e($programs->days); ?> Days</b></div>
                            <div>Countries: <b>Tanzania</b> </div>
                            <div>Designed From: <b><?php echo e($programs->type); ?></b> </div>
                            <hr>
                            <div>Destinations:
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destnation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-success" style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($destnation->destination_name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <hr>
                      
                   <hr>
                     <div class="row">
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
                            <a href="#" role="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#payNow">Print Invoice</a>
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

<form  method="post" id="post_form" action="<?php echo e(route('tailorPay',$programs->program_id)); ?>">
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
   <!--  <input name="_method" type="hidden" value="PATCH">
     -->
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


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/tailorMade/tailorMadeSummary.blade.php ENDPATH**/ ?>