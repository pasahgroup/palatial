<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2><?php echo e($programs->tour_name); ?></h2>
    </div>
 </section>

</section>

    <div class="container-fluid">
          <!-- Start of Image filled from slider -->
          
      <!-- End of Image filled from slider -->


      <section class="text-center bg-white">
     <!-- Content Header (Page header) -->
         <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('info')): ?>
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>
</div>
 </section>







 <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
   <div class="container-fluid" style="padding-bottom:0px;">

       <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php echo e($title ?? ''); ?> Tours</span></h2>


     <div class="px-xl-5 pb-3">
 <div class="col-md-12 col-sm-12 pb-1" style="background-color:#f0f0f0">


                               <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149;">

      <h5 class="text-center"><b style="color:#fff;"><?php echo e($safari->type); ?></b></h5>
           <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

 <div class="single_blog listing-shot">
               <div class="product-item bg-light mb-4">
                  <div class="listing-shot-img">
               <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#486841;color:#fde205"><strong>$<?php echo e(number_format($safari->price),2); ?></strong></div>

                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" alt="" style="height:250px;">
                       <div class="product-action">

                           <?php if($safari->category=="Private"): ?>
<a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  <?php echo e($safari->tour_name); ?></i></a>

<?php endif; ?>

<?php if($safari->category=="Group"): ?>
<a href="/safaris/<?php echo e($safari->id); ?>" class="btn btn-outline-dark btn-squarex"><i class="fa fa-search">  <?php echo e($safari->tour_name); ?></i></a>

<?php endif; ?>
                       </div>
                   </div>

                       <h5 class="text-center" style="font-size:20px;"><strong class="demo-3"><?php echo e($safari->tour_name); ?></strong></h5>

               </div>
                </div>

 <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                        <strong style="color:#fff">Tour Duration:<br> <b style="color:#fde205"><?php echo e($safari->offer_deadline); ?></b></strong>
                                                                                </div></b>
                                                                                <div class="float-right">
                                                                               <span class="text-danger" style="font-size:15px"><strong style="color:#fde205"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights </strong>
                                                                                </div>

          </div>

 <div>Physical Rating:          <strong class="float-right"><?php echo e($safari->physical_rating); ?></strong></div>
 <div>Tour Category:          <strong class="float-right"><?php echo e($safari->category); ?></strong></div>
 <div>Tour Code:          <strong class="float-right"><?php echo e($safari->tour_code); ?></strong></div>


 <hr>
                                                                       <div class="text-right">
                                                                                   <?php if($safari->category=="Private"): ?>
                          <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                          <?php endif; ?>

                             <?php if($safari->category=="Group"): ?>
                          <a href="/safaris/<?php echo e($safari->id); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                          <?php endif; ?>

                                                                       </div>
           </div>
 </div>


                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   </div>
 </div>

 </div>
   <div class="container">
       <?php echo $safaris->links(); ?>

 </div>
 </section>

<script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/programs/safaris-slider-packages.blade.php ENDPATH**/ ?>