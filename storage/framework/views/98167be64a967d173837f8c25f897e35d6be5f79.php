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

<section class="featured-properties-area section-padding-100-50" style="padding-top:14px;"> 
 <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h3 style="color:#b76b0b;">
         <b> <?php echo e($title ?? ''); ?></b>
      </h3>        
    </div>
    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php echo e($title ?? ''); ?> Tours</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:"><?php echo e($safari->sales_header); ?></b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="<?php echo e(route('safaris.show',$safari->id)); ?>"><i class="fa fa-search">  <?php echo e($safari->tour_name); ?></i></a>
                        </div>
                    </div>

                 
                     <div class="text-center" style="background-color:#4c7149;">
                        <a class="h6 text-decoration-none text-truncate" href="<?php echo e(route('safaris.show',$safari->id)); ?>" style="font-size:20px;"><strong> <?php echo e($safari->tour_name); ?></strong></a>                      
                    </div>


                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
  <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($safari->price),2); ?> </strong>
                                                                        </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right"><?php echo e($safari->physical_rating); ?></strong></div>
<div>Tour Category:          <strong class="float-right"><?php echo e($safari->category); ?></strong></div>
<div>Physical Rating:          <strong class="float-right"><?php echo e($safari->tour_code); ?></strong></div>


<hr>
                                                                        <div class="text-right">
                                                                                 

                                                                                                 <?php if($safari->category=="Private"): ?> 
                            <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                               <?php endif; ?> 

                                           <?php if($safari->category=="Group"): ?> 
                            <a href="<?php echo e(route('grouptour.show',$safari->id)); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                               <?php endif; ?>
                                                                        </div>
            </div>

</div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>  

    </div>
</div>
</section>
<script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/programs/safaris.blade.php ENDPATH**/ ?>