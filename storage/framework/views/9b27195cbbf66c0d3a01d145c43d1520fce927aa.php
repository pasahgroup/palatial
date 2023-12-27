<?php $__env->startSection('content'); ?>



  <!-- <link rel="stylesheet" href="../assets/css/min/bootstrap.min.css" media="all"> -->

  <!-- <link rel="stylesheet" href="../assets/css/jqueryui.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/vendor/animate-css/animate.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/iconfont/iconstyle.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/font-awesome/css/font-awesome.css" media="all"> -->
  <link rel="stylesheet" href="../assets/css/main.css" media="all" id="maincss">
<body>

 <!--  <div class="pre-loader">
    <div class="loading-img"></div>
  </div> -->


  <section class="cart-page">
    <div class="container">
      <div class="border-box">
        <div class="box-title">
          <h5><strong><?php echo e($programs->tour_name); ?></strong></h5>
        </div>
        <p><?php echo e($cust->first_name); ?> <?php echo e($cust->last_name); ?></p>
        <em>Summary invoice for your favourite tour costs</em>
          <em><b>(Please make Payment to arrange your favourite tour)</b></em>
        <div class="table-responsive-wrap">
          <table class="table table-responsive cart-checkout-table">
            <thead>
              <tr>
                <th>People</th>
                  <th>Percent Price Rate(%)</th>
                     <th>Actual Price(<?php echo e($cust->currency); ?>)</th>
                <th>No of Persons</th>
                <th class="price">Total(<?php echo e($cust->currency); ?>)</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>
                 Adults
                </td>
                <td>
    <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Adults"): ?>
      <?php echo e($percent->percent); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </td>
                  <td>
                     <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Adults"): ?>
      <?php echo e(number_format(($percent->percent/100)*($cust->unit_price),2)); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                    <input type="text" value="<?php echo e($cust->adults); ?>">

                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price"><?php echo e(number_format($cust->adults_cost,2)); ?></td>
              </tr>

              <tr>
                <td>
                 Teens
                </td>
                <td>   <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Teens"): ?>
      <?php echo e($percent->percent); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                  <td>
                                    <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Teens"): ?>
      <?php echo e(number_format(($percent->percent/100)*($cust->unit_price),2)); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                     <input type="text" value="<?php echo e($cust->teens); ?>">
                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price"><?php echo e(number_format($cust->teens_cost,2)); ?></td>
              </tr>

                 <tr>
                <td>
                 Children
                </td>
                <td>   <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Children"): ?>
      <?php echo e($percent->percent); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                  <td>

                                            <?php $__currentLoopData = $peoplePercents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($percent->percent_name==="Children"): ?>
      <?php echo e(number_format(($percent->percent/100)*($cust->unit_price),2)); ?>

    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </td>
                <td>
                  <div class="counter-number">
                    <div class="sub icon-minus"></div>
                     <input type="text" value="<?php echo e($cust->children); ?>">
                    <div class="add icon-plus"></div>
                  </div>
                </td>
                <td class="price"><?php echo e(number_format($cust->children_cost,2)); ?></td>
              </tr>

            </tbody>
          </table>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-6">
          <!--   <div class="form-group col-md-8 col-sm-10">
              <label>Have a Promotional Code</label>
              <div class="input-group">
                <div class="input-group-addon icon-tag">
                </div>
                <input type="text" class="form-control" placeholder="Code">
                <div class="input-group-btn">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              <br>
              <button class="btn btn-primary hvr-sweep-to-right">Update Cart</button>
            </div> -->
          </div>
          <div class="col-sm-6">
            <table class="table table-responsive cart-checkout-table">
              <tr>
                <td>
                  Sub Total
                </td>
                <td class="price">
                 <?php echo e(number_format($cust->total_price,2)); ?>  <?php echo e($cust->currency); ?>

                </td>
              </tr>
               <tr>
                <td>
                  Addon total
                </td>
                <td class="price">
                 <?php echo e(number_format($cust->total_addon_price,2)); ?>  <?php echo e($cust->currency); ?>

                </td>
              </tr>

              <tr>
                <td>
                  Discount
                </td>
                <td class="price">
                <?php echo e(number_format($cust->total_discount,2)); ?>  <?php echo e($cust->currency); ?>

                </td>
              </tr>
              <tr class="total">
                <td class="price">Grand Total</td>
                <td class="price"> <?php echo e(number_format($cust->total_cost,2)); ?>  <?php echo e($cust->currency); ?></td>
              </tr>
            </table>


          </div>

        </div>

        <div class="clearfix">
          <a href="/pay/24" class="btn btn-primary pull-right hvr-sweep-to-right">Proceed Checkout</a>
        </div>
        <br>
      </div>

    </div>
  </section>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/payments/privatePaySummary.blade.php ENDPATH**/ ?>