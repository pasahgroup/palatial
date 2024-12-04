  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Popular Experience Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Popular ExperiencePage</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  New Popular Experience
                </h3>
              </div>
              <div class="container-fluid x_content">
              
           <form  method="post" id="post_form" action="<?php echo e(route('sales.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                    <div class="row">
                   
                      <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="tour_name" class="col-form-label">Tour name</label>
                        
                            <select name="tour_id" id="" class="form-control">
                              <option value="">Select Tour</option>
                            <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tour->id); ?>"><?php echo e($tour->tour_name); ?> : <b><?php echo e($tour->type); ?></b></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                            </select>
                          </div>
                        </div>
           <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            </div>
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="srs" class="col-form-label">Description</label>
                         
                           <div class="form-group row">
                                 <textarea name="descriptions" id="" cols="40" rows="2" placeholder="Decribe this popular experience..."></textarea>

                          </div>
                         </div>
                        </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            </div>
                   
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                 <label for="" class="col-form-label">..........</label>       

                <div class="form-group row">                 
                <button type="submit" class="btn btn-primary float-right">Save</button>
           
             </div>
            </div>
            </div>

            </form>
        </div>
    </section>



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Popular Experience</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tour Name</th>
                    <th>Descriptions</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="/editPopularExperience/<?php echo e($data->id); ?>"> <?php echo e($data->tour_name); ?></a></td>
                    <td><?php echo e($data->descriptions); ?></td>  
                      <td><a href="/editPopularExperience/<?php echo e($data->id); ?>"><i class="fa fa-edit"></i></a> <a href="#"><i class="fa fa-trash"></i></a></td>                 
                   
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/sales/popular-experience/popular-experience.blade.php ENDPATH**/ ?>