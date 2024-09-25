<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
<style>
.bg-bannerw{
  
  <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

   height: 80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
      <?php if(isset($PostcategoryImage->attachment)): ?>
   <section class="same-section-spacing bg-bannerw">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2><?php echo e($title??'Popular Experience'); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($title?? 'Popular Experience'); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php endif; ?>


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          <?php echo e($PostcategoryImage->body ?? ''); ?>.
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>


  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">

    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php echo e($title ?? ''); ?> Tours</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            <?php $__currentLoopData = $popularExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:"><?php echo e($safari->sales_header); ?></b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  <?php echo e($safari->tour_name); ?></i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris"><?php echo e($safari->tour_name); ?></a>                      
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
                            <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn text-center"><b>View More</b></a>
                               <?php endif; ?> 

                                           <?php if($safari->category=="Group"): ?> 
                            <a href="/safaris/<?php echo e($safari->id); ?>" class="booking-btn text-center"><b>Explore More</b></a>
                               <?php endif; ?>
                                                                        </div>
            </div>

</div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>  

    </div>
</div>
</section>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/popularExperiences/popularExperience.blade.php ENDPATH**/ ?>