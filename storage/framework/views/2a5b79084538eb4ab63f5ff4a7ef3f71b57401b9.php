
  
  <?php $__env->startSection('contents'); ?>
  <style type="text/css">    
    .red {
    color: red;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists of Bank</h3>

          <div class="card-tools">
            <a href="/add-bank" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Bank
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Bank Name</th>  
                    <th>Swift code</th>     
                     <th>Country</th>  
                    <th>Account Name</th>  
                    <th>Account No</th> 
                     
                     <th>Intermediary bank name</th>  
                    <th>Swift code</th>  
                    <th>Account no</th> 
                     
                      <th>Status</th>         
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($bank->id); ?></td>
                     <td><?php echo e($bank->bank_name); ?></td> 
                     <td><?php echo e($bank->swift_code); ?></td>    
                     <td><?php echo e($bank->country); ?></td> 
                     <td><?php echo e($bank->account_name); ?></td> 
                       <td><?php echo e($bank->account_no); ?></td>  

                         <td><?php echo e($bank->intermediary_bank_name); ?></td> 
                     <td><?php echo e($bank->intermediary_swift_code); ?></td> 
                       <td><?php echo e($bank->intermediary_account_no); ?></td> 

                        <td><?php echo e($bank->status); ?></td>           
                    <td><a href="/edit-bank/<?php echo e($bank->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroy-bank/<?php echo e($bank->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($bank->percent_name); ?>','bank')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Bank Name</th>  
                    <th>Swift code</th>     
                     <th>Country</th>  
                    <th>Account Name</th>  
                        <th>Account No</th>

                           <th>Intermediary bank name</th>  
                    <th>Swift code</th>  
                    <th>Account no</th>    
                         <th>Status</th>     
                    <th>Action</th>    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/bank/bank.blade.php ENDPATH**/ ?>