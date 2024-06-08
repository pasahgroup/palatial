
  
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
              <form  method="post" id="post_form" action="<?php echo e(route('bank.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="card-body"> 
                      <div class="row"> 
                   <div class="col-md-4">                   
                    <label>Bank Name</label>
                    <input class="form-control" type="text" name="bank_name" placeholder="bank name">
                  </div>
                      <div class="col-md-4"> 
                    <label>Swift Code</label>
                    <input class="form-control" type="text" name="swift_code" placeholder="swift code">  
                   </div>
   
                      <div class="col-md-4">
                      <label>Account Name</label>
                    <input class="form-control" type="text" name="account_name" placeholder="account name">
</div>
</div>

    <div class="row"> 

<div class="col-md-4">
                       <label>Account Number</label>
                    <input class="form-control" type="text" name="account_no" placeholder="account number">                 
             </div>

                                 <div class="col-md-4"> 
                    <label>Country</label>
                    <input class="form-control" type="text" name="country" placeholder="country"> 
</div>
           </div>
<br>
  <label>INTERMEDIARY BANK DETAILS</label>
                     <div class="row"> 
                   <div class="col-md-4">                   
                    <label>Bank name</label>
                    <input class="form-control" type="text" name="intermediary_bank_name" placeholder="bank name">
                  </div>
                      <div class="col-md-4"> 
                    <label>Swift code</label>
                    <input class="form-control" type="text" name="intermediary_swift_code" placeholder="swift code">  
                   </div>
   
                      <div class="col-md-4">
                      <label>Account number</label>
                    <input class="form-control" type="text" name="intermediary_account_no" placeholder="account number">    
</div>
</div>
          <br>          
                       <label>Status</label>
                     <select name="status" id="status" class="form-control">
                                  <option>Select Status</option>
                                  <option>Active</option>
                                  <option>Inactive</option>
                                </select>

             </div>

      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/bank"  role="button" class="btn btn-success float-left">View Bank List</a>
              <button type="submit" class="btn btn-primary float-right" value ="bank" name="bank">Save</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/bank/addBank.blade.php ENDPATH**/ ?>