<?php $__env->startSection('content'); ?>

  <section class="bg-gray ">
        <div class="container">   
                  
                 <a href="#"></a>
               <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search_area search_area_two booking-tour">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="center-title ">
                                    <h2 class="title">View Your Trip Details</h2>
                                </div>
                            </div>
                        </div>
                        <!--Search Form-->
                  
                           <form  method="post" id="post_form" action="<?php echo e(route('viewTrip')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <label for="">Enter Your Pin No:</label>
                                    <div class="form-group">                                                                 
                                    <input type="number" name="pin" placeholder="pin no" min="2">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <label for=""></label>
                                    <div class="form-group">     
                                     <div class="col-lg-12 mt-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div> 
                                </div>                            
                      

                                </div>       
                              
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
     
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/payments/bookingTrip.blade.php ENDPATH**/ ?>