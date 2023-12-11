<?php $__env->startSection('content'); ?>

  <section class="bg-gray" style="margin-top: 0px;">
        <div class="container">
        <form method="GET" action="<?php echo e(route('safaris.show','print')); ?>">                
                 <div class="col-md-10 col-sm-10">
                                     </div>
                                       <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-success float-right" name="print" value="print">Print Itinerary</button>
                     <a href="<?php echo e(route('email-send',11)); ?>" class="ml-4 text-sm text-gray-700 underline">Mailing</a>
                                     </div>

                                 </form>


<br>
<div class="col-md-8 col-sm-8">
     <p class="card-text">
     <?php echo e($programs->tour_name); ?> </p>
</div>

                <div class="col-md-12 col-sm-12">
                <p class="card-text">
                                            <?php echo e($programs->itinerary_summury); ?>

                                            </p>
                                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card card-primary booking-tourPadding">
                                                <div class="card-header  booking-tourPadding"  style="background-color:Gray;">
                                                <span><b> Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></b></span>

                                                </div>
                                                <div class="card-body">
                                                

                                                <div class="row masonry-item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                                       <div class="">

                                <div class="row">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                               <p class="booking-btn-gray"><?php echo e($data->itinerary_description); ?></p>   
                                               
                                                     
                               <div class="row"> 
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <p><b class="text-success">Distance:</b> <?php echo e($data->distance); ?> KM <b class="text-success">Transport:</b> <?php echo e($data->transport); ?></p>

                                          <p><b class="text-success">Accommodation:</b> <?php echo e($data->accommodation_name); ?> | <b class="text-success">Meal Plan:</b> <?php echo e($data->meal); ?></p>
                                      </div>           
                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                           
                                            <div class="hotel-pics-one">                                               <img src="<?php echo e(URL('http://localhost:8000/storage/destination/'.$data->photo)); ?>" alt="" style="height: 32vh !important;width:100%">                                                                              </div> 

                                                 </div>
                                                 </div>
                                                </div>
                                                </div>
                                                </div>

                                        
                                            </div>
                                            </div>
                                            <hr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/emails/email.blade.php ENDPATH**/ ?>