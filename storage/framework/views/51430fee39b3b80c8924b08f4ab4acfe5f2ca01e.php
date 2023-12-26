
  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Bank</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Bank</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="<?php echo e(route('bank.update',$bank->id)); ?>">
                <?php echo csrf_field(); ?>
             <input type="hidden" name="_method" value="PUT">
                <div class="card-body">                       
                  <label>Bank Name</label>
                    <input class="form-control" type="text" name="bank_name"  value="<?php echo e($bank->bank_name); ?>">
                    <label>Swift Code</label>
                    <input class="form-control" type="text" name="swift_code"  value="<?php echo e($bank->swift_code); ?>">  
                   
                    <label>Bank</label>
                    <input class="form-control" type="text" name="country"  value="<?php echo e($bank->country); ?>"> 

                      <label>Account Name</label>
                    <input class="form-control" type="text" name="account_name"  value="<?php echo e($bank->account_name); ?>">

                       <label>Account Number</label>
                    <input class="form-control" type="text" name="account_no"  value="<?php echo e($bank->account_no); ?>">  
                    
             </div>               
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/bank"  role="button" class="btn btn-success float-left">View Bank List</a>
              <button type="submit" class="btn btn-primary float-right">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/bank/editBank.blade.php ENDPATH**/ ?>