<?php $__env->startSection('content'); ?>

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
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <section class="bg-gray ">
        <div class="container-fluid">
            <?php if(isset($quickLinks->attachment)): ?>
            <div class="package-list-wrap">            
                         <img src="<?php echo e(URL::asset('/storage/uploads/'.$quickLinks->attachment?? '')); ?>" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%; opacity:1">

             
                <div class="package-list-content">
                  <span>Home/Quick-Link </span>
                                     <h3 class="package-list-title">
                        <a href="#"><b style="color: white;"><?php echo e($quickLinks->quick_title); ?></b></a>
                    </h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color:#1da625; background-color:#fff; font-style:italic;">
          <?php echo e($quickLinks->quick_description ?? ''); ?>.
       
        </p>         
    </div>
                      </div>
                         <?php endif; ?>

           </div>

        </div>
    </div>
    </section>

<hr>



  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;"> 

    <div class="container" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;">My Booking Trip</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
    



    <div class="container" style=" padding-bottom:0px;">

   <div class="south-search-area">
        <div class="containe">
            <div class="row">
                <div class="col-12">
                               
  
  <div class="col-12 col-sm-6 col-xl-3" style="padding-left:20px;padding-right:20px;">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                           
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                 



           <div class="single-featured-properties-slide">

             <div class="item active">
         <div class="package-list-wrap ">
                                     
                                        </div>
      </div>
                         

                      




                            </div>
                        </div>
                    </div>




                     

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
</div>


       </div>     
    </div>
</div>
</section>

 
     <script src="../assetff/js/category.js"></script>
    <script src="../assetff/lib/easing/easing.min.js"></script>
    <script src="../assetff/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../assetff/mail/jqBootstrapValidation.min.js"></script>
    <script src="../assetff/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../assetff/js/main.js"></script>
       <script src="../assetff/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../assetff/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../assetff/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../assetff/js/plugins.js"></script>
    <script src="../assetff/j../assetff/s/classy-nav.min.js"></script>
    <script src="../assetff/js/jquery-ui.min.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/payments/bookingTrip.blade.php ENDPATH**/ ?>