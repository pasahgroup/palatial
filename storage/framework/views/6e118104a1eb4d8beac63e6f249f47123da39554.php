<?php $__env->startSection('content'); ?>

<style type="text/css">
   .wrapper {
  padding: 0px;
   background-color: rgba(0,0,0,0.00001);
  max-width: 100%;
  margin: 1px auto;
}

.demo-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
.demo-4 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
</style>

<style>
.vl {
  border-left: 1px solid green;
  height: 30px;
}
</style>
<style>
.green {
  font-stye;color:white;
}
</style>
 <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  
  <style>
.bg-bannerw{
   <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

    /*position: relative;*/
    background-repeat: no-repeat;
     background-size:100% 100%;
      max-height:75vh;
     min-height: 75vh;
    
}
</style>

 <?php if(isset($PostcategoryImage->attachment)): ?>
  <div class="container">
 <section class="package-list-wrap">
                            <img src="<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>" class="" alt="det-img" style="min-height: 35vh !important;max-height:50vh !important;background-size:100% 100%;width: 100%;">
                        
                            <div class="package-list-content">
                                <p class="package-list-duration"   <div class="banner-box">
                        <h3 style="font-style;color:white">Experience the beauty of Tanzania</h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Addons</li>
                            </ul>
                        </nav>
                    </div>
                    </div>
              
  </section>

</div>





    <div class="container">  
 <section class="ws-section-spacing booking-btn">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color: white;">
          <?php echo e($PostcategoryImage->body ?? ''); ?>.
        </p>         
    </div>
    </div> 
</section>
   </div>
    <?php endif; ?>
<hr>

    <section class="">
        <div class="container">            
              <div class="row small-package-list">
                 <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single_package booking-btn">
                    
                        <div class="media">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style=" background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$addon->attachment)); ?>); background-repeat: no-repeat;
                            background-size:100% 95%;height: 32vh !important;">  
                           
                        </div>
                        <!--<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">-->
                        <!--<div class="vl"></div>-->
                        <!-- </div>-->

                         <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="media-body">                               
                                <h3 class="booking-btn booking-tourPadding"><a href="#">Addon: <?php echo e($addon->addon_name); ?></a></h3>
                                   <div class="wrapper">
    <p class="demo-1" style="font-style;color:green"> <i><?php echo e($addon->addon_highlight); ?></i></p><a href="#" data-toggle="modal" data-target="#view_<?php echo e($addon->id); ?>" data-id="myModal1"><b class="text-danger">Read More<i class="fas fa-angle-double-right"></i></b></a>
   
  </div>
                                <div class="duration booking-btn-gray">                                   
                                      <ul>
                                        <li>
                                             <p class="green"> <i class="far fa-clock"></i> Duration</p>
                                            <h5><?php echo e($addon->days); ?> Days</h5>
                                        </li>
                                        <li>
                                             <p class="green"> <i class="fas fa-tags"></i> From</p>
                                            <h5>$<?php echo e($addon->price); ?></h5>
                                        </li>
                                         <li>
                                             <p class="green"> <i class="fas fa-tags"></i> Tour type</p>
                                            <h5><?php echo e($addon->type); ?></h5>
                                        </li>
                                         <li>
                                             <p class="green"> <i class="fas fa-tags">
                                            </i>Style</p>
                                            <h5><?php echo e($addon->style); ?></h5>
                                        </li>
                                    </ul>
                                </div>
                                  <a href="<?php echo e(route('addons.show',$addon->id)); ?>" class="btn btn-success">View Details</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
                
                <!-- Wildlife Modal -->

                       <div class="modal fade" id="view_<?php echo e($addon->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title"><?php echo e($addon->addon_name); ?></h4> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

        <div class="modal-body">
                    <div class="img-wapper">
                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$addon->attachment)); ?>" alt="No Image" style="widht:100% !important; height:200px; !important">
                              </div>
                              <hr>
          <p class="text-primary"><?php echo e($addon->addon_highlight); ?>.
                                    </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
            </div>            
        </div>
    </div>
    </section>
<?php $__env->stopSection(); ?>
     

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/buyaddons/showaddon.blade.php ENDPATH**/ ?>