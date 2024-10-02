<?php $__env->startSection('content'); ?>

  <!-- <link rel="stylesheet" href="../assets/css/min/bootstrap.min.css" media="all"> -->

  <!-- <link rel="stylesheet" href="../assets/css/jqueryui.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/vendor/animate-css/animate.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/iconfont/iconstyle.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/font-awesome/css/font-awesome.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/css/main.css" media="all" id="maincss"> -->
<body>
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
                    <input type="text" value="<?php echo e($cust->adults); ?>" readonly>

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
                     <input type="text" value="<?php echo e($cust->teens); ?>" readonly>
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
                     <input type="text" value="<?php echo e($cust->children); ?>" readonly>
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
                <td class="price"> <?php echo e(number_format($cust->total_cost,2)); ?>  <?php echo e($cust->currency); ?>:: </td>
              </tr>
            </table>


          </div>
        </div>

   <form  method="post"  action="<?php echo e(route('payConfirm',$cust->id)); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
               
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <label class="fieldlabels">First Name: *</label> <input type="text" name="first_name" value="<?php echo e($cust->first_name); ?>" />
                        </div>
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Last Name: *</label> <input type="text" name="last_name" value="<?php echo e($cust->last_name); ?>" /> 
                        </div>
                        
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Amount:*</label> <input type="text" name="amount" value="<?php echo e($cust->total_cost,2); ?>"/> 
                        </div>

                         <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Currency:*</label> 
                            <select name="currency" class="form-control">
                              <option value="<?php echo e($cust->currency); ?>" selected><?php echo e($cust->currency); ?></option>
                        <option value="KES">KES</option>
                          <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                              <option value="GBP">GBP</option>
                                <option value="UGX">UGX</option>

                                 <option value="TZS">TZS</option>
                                  <option value="ZMW">ZMW</option>
                                   <option value="RWF">RWF</option>
                         
                         </select>
                        </div>

                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Reference: *</label> <input type="text" name="reference" value="<?php echo e($cust->id); ?>" /> 
                        </div>
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Type: *</label> <input type="text" name="type" value="MERCHANT" /> 
                        </div>
               
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">                       
                             <label class="fieldlabels">Email: *</label> <input type="text" name="email" value="<?php echo e($cust->email); ?>" /> 
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Phone: *</label> <input type="text" name="desc" value="<?php echo e($cust->phone); ?>" /> 
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Description: *</label> <input type="text" name="desc" value="<?php echo e($programs->tour_name); ?>" /> 
                        </div>


        <div class="clearfix">
           <button class="btn btn-primary pull-right hvr-sweep-to-right" id="cash_narrat" name="cash_narrat" data-toggle="modal" data-target="#narratModal">Advance Payment</button>
         <button href="/payConfirm/" class="btn btn-success pull-right hvr-sweep-to-right" type="submit">Full Payment</button>
         
        </div>
      </form>
 <button class="btn btn-primary pull-right hvr-sweep-to-right" id="cash_narrat" name="cash_narrat" data-toggle="modal" data-target="#narratModal">Advance Payment2</button>
      </div>
    </div>
  </section>

<button>
  <input type="text" id="cash_narrat2" placeholder="Enter here" class="form-control narate" pattern="[a-zA-Z0-9-_.]{1,20}" name="cash_narrat2" data-toggle="modal2" data-target="#narratModal2" />
</button>

<!-- Modal -->
  <div class="modal fade" id="narratModal" tabindex="-1" role="dialog" aria-labelledby="narratModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal_head" id="narratModalLabel">Narration</h4>
        <button type="button" class="close cash-dismiss" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <label class="modal_note">Input</label>
        <input class="myInput form-control form-control-sm" />
      </div>
      <div class="modal-footer narr_footer">
        <button type="button" class="btn btn-primary cashmodal_btn" id="narrat_ok" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
</body>

<script type="text/javascript">
  $('#narratModal').on('hide.bs.modal', function() {
  let val = $('.myInput').val();
  $('#cash_narrat2').val(val);
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/payments/privatePaySummary.blade.php ENDPATH**/ ?>