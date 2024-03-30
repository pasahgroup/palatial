<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->

<style>

.bg-bannerw{  
  <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

  /* height: 65vh;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;*/

    background-size:100% 100%;
     background-repeat: no-repeat;
                         background-size: cover;
                       background-position: center; 
                         position: relative;
}
</style>


<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>

<style>
.vl {
  border-left: 1px solid white;
  height: 20px;
}
</style>

 <hr>



 <section id="blog_private" class="">
    <div class="container">  
               

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
                                 <div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
  <h3 class="text-center"> <b style="color:" class=" demo-1"><?php echo e($safari->tour_name); ?></b></h3>
</div>


                                      </div>

                                      
                                 <h3 class="text-center"> <b style="color:" class=" demo-1"><?php echo e($safari->tour_name); ?></b>
                                    </h3>
   
                              
                               
                            <div class="blog-text">       
                            <div class="row">                                       
                                        <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);font-size:18px;">
                                             <strong><b class="text-white"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</b></strong> 
                                         </div> 
                                         
                                        <div class="col-md-6 col-sm-12 col-xs-6 booking-btn" style="font-size:18px;">
                                        <span class="text-white"><strong>From $<?php echo e(number_format($safari->price),2); ?></b>  </strong>
                                           </span>

                                         </div> 
                                    </div> 
                                    
                                      <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                      
                                      <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                             Tour Duration:
                                            </div>
                      
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:17px;">
                                                   <strong><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</strong>
                                                </div>
                                             </div>

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
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                               <span> Tour Code: </span>  
                                           </div>
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:17px;">
                                                   <strong><?php echo e($safari->tour_code); ?></strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               
                                  <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-tourPaddingx">
                                    <div class="">
                                        <a href="/safaris/<?php echo e($safari->id); ?>" class="booking-btn text-center"><b>View More</b></a>
                                    </div>  
                                      </div>  
                                      </div>                         
                                </div>
                          
                        </div>
                    </div>              
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>         
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/programs/safaris.blade.php ENDPATH**/ ?>