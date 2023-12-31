<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2><?php echo e($sliders->tour_name); ?></h2>
    </div>
 </section>


    <section class="ws-section-spacing bg-gray">
    <div class="container">
          <!-- Start of Image filled from slider -->
             <div class="package-list-wrap ">
                 <img src="<?php echo e(URL::asset('/storage/uploads/'.$sliders->attachment)); ?>" class="" alt="det-img" style="min-height: 35vh !important;max-height:75vh !important;background-size:100% 100%;width: 100%;">
                 
                <div class="package-list-content">
                    <p class="package-list-duration"> <span
                            class=""><?php echo e($sliders->title); ?>

                            </span>
                                
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"></a>
                    </h3>
                    <a role="button" class="btn btn-primary text-center" href="<?php echo e(route('safaris.show',$sliders->tour_id)); ?>">Acquire</a>                    
                </div>
                </div> 
                
                                 <hr>
 <section class="ws-section-spacing booking-btn">
    <div class="container">   
    <div class=""> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color: white;">
          <?php echo e($sliders->description ?? ''); ?>.
        </p>         
    </div>
    </div>
    </div>
</section>
</br>
      <!-- End of Image filled from slider -->
     
      
        <div class="masonry-item">
            <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                 
                  <div class="col-md-12 text-center">
         <h3 style="background-color:gray;" class="text-white  booking-btn booking-tourPadding">More <?php echo e($title); ?></b></h3>
                    </div>
            </div>
        </div>
            <!-- item -->
            <div class="row" data-aos="fade-up"> 
            <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-lg-4 col-md-4">
                        <div class="single_blog listing-shot">                         
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($safari->tour_name); ?>" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="">
                                 <h3 class="text-center"> <b style="color:"><?php echo e($safari->tour_name); ?></b>
                                    </h3>
                                </div>
                               
                            <div class="blog-text">       
                            <div class="row">                                                          
                                    <div class="col-md-6 col-sm-12 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);font-size:18px;">
                                             <strong><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</strong>
                                        </div>                                           
                                        <div class="col-md-6 col-sm-12 col-xs-6 booking-btn" style="font-size:18px;">
                                        <span class="text-white"><strong>From $<?php echo e(number_format($safari->price),2); ?></b>  </strong>
                                           </span>

                                         </div> 
                                    </div> 
                                    
                                      <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                      
                                    
                                               <div class="row">                                            
                                              <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                                   <strong>Physical Rating:</strong>
                                                </div>                                          

                                               <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:17px;">
                                                   <strong><?php echo e($safari->physical_rating); ?></strong>
                                                </div>
                                               </div>
                                                <div class="row">
                                                                                             
                                              <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                                   <strong>Tour Category:</strong>
                                                </div>  
                            
                                           
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:17px;">
                                                   <strong><?php echo e($safari->category); ?></strong>
                                                </div>  
                                            </div>  
                                                  <div class="row">
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                                   <strong>Tour Code:</strong>
                                                </div> 
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:17px;">
                                                   <strong><?php echo e($safari->tour_code); ?></strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               
                                  <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn booking-tourPadding">
                                    <div class="">
                                        <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn-green text-center"><b>View More</b></a>
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
</section>
<!-- End-Package-Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/programs/safaris-slider.blade.php ENDPATH**/ ?>