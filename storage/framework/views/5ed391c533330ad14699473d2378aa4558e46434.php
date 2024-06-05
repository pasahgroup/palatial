  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Quick Link Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Quick Link</li>
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
                <h3 class="card-title">
                  Add Quick Link
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
             
                <form  method="post" id="post_form" action="<?php echo e(route('QuickLink-Update',$quickLinks->id)); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                    <div class="row">

                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">                    
                        <label>Page Type</lable>
                        <select name="page_type" class="form-control">
                        <option><?php echo e($quickLinks->page_type); ?></option>
                          <?php $__currentLoopData = $pageTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($type->category); ?>"><?php echo e($type->category); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                        
                        </div>
                     </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">                    
                        <label>PageTitle</lable>
                        <input type="text" class="form-control" name="quick_title" value="<?php echo e($quickLinks->quick_title); ?>">                  
                      </div>
                     </div>


                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">                    
                        <label>Quick-link Url</lable>
                        <input type="text" class="form-control" name="url" value="<?php echo e($quickLinks->url); ?>">                  
                     </div>
                   </div>
                   
                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">                    
                        <label>Quick-link Slider</lable>
                        <select name="slider" class="form-control">
                        <option value="<?php echo e($quickLinks->slider); ?>"><?php echo e($quickLinks->slider); ?></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                         </select>                  
                     </div>
                   </div>
                    </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <label class="control-label" for="quick_description">Description
                       </label>
                       <textarea name="quick_description" class="form-control" maxlength="990"><?php echo e($quickLinks->quick_description); ?></textarea>

                  </div>  
              
                <hr>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label" for="first-name">Image</label>
                    <input name="attachment[]" type="file" id="main_img" multiple>
             </div>

                </div>

                <div class="form-group row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                 <a href="<?php echo e(route('quickLink.index')); ?>" class="btn btn-success float-left">Quick-Link List</a>
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
                  </div>
                </div>

            </form>
          <!-- /.col-->
        </div>
    </section>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/quickLinks/editQuickLink.blade.php ENDPATH**/ ?>