<!-- <link rel="stylesheet" href="../../../css/bootstrap431.css"> -->

<?php $__env->startSection('content'); ?>
<style>
.vl {
  border-left: 1px solid green;
  height: 20px;
}
</style>



<style type="text/css">

    .booking-btn {
  border: 0px solid #647545;
  padding: 10px 38px;
  color:#fff;
  display: block;
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
</style>

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
                        <h2>Special Offers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">
                                    Home

                                </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Special Offers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="ws-section-spacing bg-gray">
    <div class="container-fluid">
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
 <?php endif; ?>
</hr>

<section id="blog_group" class="blog_section">
<div class="container-fluid">
 <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 masonry ">
                    <div class="package-detail">
<div class="tab" id="myTabContent">
    <button class="tablink" onclick="openPage('tabP', this, 'orange')" id="defaultOpen" >Private Tour Offers</button>
    <button class="tablink" onclick="openPage('tabG', this, 'orange')">Group Tour Offers</button>

                    </div>
                    <div id="tabP" class="tabcontent">
                    <hr>

                           <?php if($offers_private): ?>

  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
    <div class="container-fluid" style="padding-bottom:0px;">

        <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php if($offers_private !='[]'): ?>
                    PRIVATE TOUR OFFERS:
                    <?php endif; ?> Special Offers</span></h3>


      <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#">
                                <?php $__currentLoopData = $offers_private; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_private): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149">

                                      <h5 class="text-center"><b style="color:#b76b0b;"><?php echo e($special_private->sales_header); ?></b></h5>
                                           <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

                               <div class="single_blog listing-shot">
                                               <div class="product-item bg-light mb-4">
                                                  <div class="listing-shot-img">
                                               <div class="listing-badge now-open"><strong><?php echo e(round($special_private->save/$special_private->price * 100),0); ?>% Off</strong></div>

                                                   <div class="product-img position-relative overflow-hidden">
                                                       <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$special_private->attachment)); ?>" alt="" style="height:250px;">
                                                       <div class="product-action">
                                                           <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  <?php echo e($special_private->tour_name); ?></i></a>
                                                       </div>
                                                   </div>

                                                       <h5 class="text-center" style="font-size:20px;"><strong><?php echo e($special_private->tour_name); ?></strong></h5>

                                               </div>
                                                </div>

                                 <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                                                        <strong style="color:#fff">Dead Line:<br> <b style="color:#fde205"><?php echo e($special_private->offer_deadline); ?></b></strong>
                                                                                                                </div></b>

                                <b class="float-right">
                                 <div class="">
                                                                                                               <span class="text-danger" style="font-size:17px"><strong style="color:#fde205">$<?php echo e(number_format($special_private->new_price),2); ?> </strong> pp
                                                                                                                    </span><s style=""><sup style="color:#fff">$ <?php echo e(number_format($special_private->price),2); ?> </sup></s><br>
                                                                                                                       <span style="font-size:12px;color:#fff">Save $<?php echo e(number_format($special_private->save),2); ?></span>

                                                                                                                </div></b>





                                              </div>

                               <div>Tour Duration:
                               <strong class="float-right"><?php echo e($special_private->days); ?> Days, <?php echo e($special_private->days -1); ?> Nights</strong>

                                                                                                                             </div>

                               <div>Physical Rating:          <strong class="float-right"><?php echo e($special_private->physical_rating); ?></strong></div>
                               <div>Tour Category:          <strong class="float-right"><?php echo e($special_private->category); ?></strong></div>
                               <div>Physical Rating:          <strong class="float-right"><?php echo e($special_private->tour_code); ?></strong></div>


                               <hr>
                                                                                                       <div class="text-right">
                                                                                                                   <a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Read more</b></a>
                                                                                                       </div>
                                           </div>

                               </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</div>
</section>

            <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center" style="background-color:#ec8224">
                <?php if($offers_private =='[]'): ?>
                    <h4>No any Private Offered at this moment</h4>
                <?php endif; ?>
                </div>
            </div>
        </div>
        </div>
<?php endif; ?>



<div id="tabG" class="tabcontent">


<?php if($offers_group): ?>

<section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
  <div class="container-fluid" style="padding-bottom:0px;">

       <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php if($offers_private !='[]'): ?>
                    GROUP TOUR OFFERS:
                    <?php endif; ?> Special Offers</span></h3>


      <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1">


                    <?php $__currentLoopData = $offers_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-3 col-md-3"  style="border:1px solid rgba(0,0,0,.9);background-color:#4c7149">

                          <h5 class="text-center"><b style="color:#b76b0b;"><?php echo e($special_group->sales_header); ?></b></h5>
                               <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#fff">

                   <div class="single_blog listing-shot">
                                   <div class="product-item bg-light mb-4">
                                      <div class="listing-shot-img">
                                   <div class="listing-badge now-open"><strong><?php echo e(round($special_group->save/$special_group->price * 100),0); ?>% Off</strong></div>

                                       <div class="product-img position-relative overflow-hidden">
                                           <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$special_group->attachment)); ?>" alt="" style="height:250px;">
                                           <div class="product-action">
                                               <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  <?php echo e($special_group->tour_name); ?></i></a>
                                           </div>
                                       </div>

                                           <h5 class="text-center" style="font-size:20px;"><strong><?php echo e($special_group->tour_name); ?></strong></h5>

                                   </div>
                                    </div>

                     <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                                            <strong style="color:#fff">Dead Line:<br> <b style="color:#fde205"><?php echo e($special_group->offer_deadline); ?></b></strong>
                                                                                                    </div></b>

                    <b class="float-right">
                     <div class="">
                                                                                                   <span class="text-danger" style="font-size:17px"><strong style="color:#fde205">$<?php echo e(number_format($special_group->new_price),2); ?> </strong> pp
                                                                                                        </span><s style=""><sup style="color:#fff">$ <?php echo e(number_format($special_group->price),2); ?> </sup></s><br>
                                                                                                           <span style="font-size:12px;color:#fff">Save $<?php echo e(number_format($special_group->save),2); ?></span>

                                                                                                    </div></b>





                                  </div>

                   <div>Tour Duration:
                   <strong class="float-right"><?php echo e($special_group->days); ?> Days, <?php echo e($special_group->days -1); ?> Nights</strong>

                                                                                                                 </div>

                   <div>Physical Rating:          <strong class="float-right"><?php echo e($special_group->physical_rating); ?></strong></div>
                   <div>Tour Category:          <strong class="float-right"><?php echo e($special_group->category); ?></strong></div>
                   <div>Physical Rating:          <strong class="float-right"><?php echo e($special_group->tour_code); ?></strong></div>


                   <hr>
                                                                                           <div class="text-right">
                                                                                                       <a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Read more</b></a>
                                                                                           </div>
                               </div>

                   </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

    </div>
</div>
</section>



          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center" style="background-color:#ec8224">
                <?php if($offers_group =='[]'): ?>
                    <h4>No any Group Offered at this moment</h4>
                <?php endif; ?>
                </div>
            </div>
        </div>
            <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
   </div>

</section>
 <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
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

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/offers/offers.blade.php ENDPATH**/ ?>