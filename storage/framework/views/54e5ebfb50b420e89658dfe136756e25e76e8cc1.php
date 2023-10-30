<?php $__env->startSection('content'); ?>

<!-- <style>
.bg-bannerw{
  background-image: url("../img/ava2.jpg");
   height:80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
 -->

<style>
.bg-bannerw{
     <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
     <?php endif; ?>
     
   height: 75%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

 <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2><?php echo e($tour_category); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($tour_category); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
            <?php if(isset($PostcategoryImage->body)): ?>
          <?php echo e($PostcategoryImage->body); ?>.
         <?php endif; ?>
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>

<section id="blog_private" class="blog_section">
    <div class="container-fluid">       
               

<div class="row" data-aos="fade-up">  
  <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <div class="col-lg-4 col-md-4">
                        <div class="single_blog listing-shot">                         
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="<?php echo e(URL::asset('/storage/uploads/'.$program->attachment)); ?>" class="img-responsive" alt="<?php echo e($program->tour_name); ?>" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="btn booking-btn-gray">
                                 <h3 class="text-center"> <b style="color:"><?php echo e($program->tour_name); ?></b>
                                    </h3>
                                </div>
                               
                            <div class="blog-text">       
                            <div class="row">                                                            
                                     <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
                                             <strong>Valid: <b class="text-white"><?php echo e($program->end_date); ?></b></strong> 
                                    </div>                                            
                                       
                                        <div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
                                        <span class="text-white"><strong>From $<?php echo e($program->price); ?></b>  </strong>
                                           </span>

                                         </div> 
                                    </div> 
                                                                                                                               
                                      <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                      
                                      <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                             Tour Duration:
                                            </div>
                      
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($program->days); ?> Days, <?php echo e($program->days -1); ?> Nights</strong>
                                                </div>
                                             </div>

                                               <div class="row">
                                               <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                               <span> Physical Rating: </span>  
                                             </div>
                                           
                                                          
                                               <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                   <strong><?php echo e($program->physical_rating); ?></strong>
                                                </div>
                                               </div>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                               <span> Tour Category: </span>  
                                           </div>
                            
                                           
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($program->category); ?>-Join</strong>
                                                </div>  
                                            </div>  
                                                  <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                               <span> Tour Code: </span>  
                                           </div>
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($program->tour_code); ?></strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               
                                                                   
                                 <div class="row">                                      
                                      </div>
                                       <hr>
                            <div class="listing-shot-info rating">
                                <div class="row  booking-tourPadding booking-btn">
                                   
                                    <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                       <a href="<?php echo e(route('grouptour.show',$program->id)); ?>" class="btn booking-btn-green">Book Now</a>
                                    </div>                                     
                                </div>
                            </div>                          
                                </div>
                          
                        </div>
                    </div>              
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>

          </div>
 </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/grouptour/grouptour.blade.php ENDPATH**/ ?>