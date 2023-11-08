  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Addon Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Addon Page</li>
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
          <h3 class="card-title">Addon</h3>

          <div class="card-tools">
            <a href="<?php echo e(route('add-ons.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Addon
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Addon</th>
                    <th>Days</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Style</th>
                    <th>Overview</th>
                    <th>Highlight</th>
                    <th>SEO</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="<?php echo e(route('add-ons.show',$data->id)); ?>"><?php echo e($data->addon_name); ?></a></td>
                    <td><?php echo e($data->days); ?></td>
                    <td><?php echo e($data->price); ?><span class="badge"> <?php echo e($data->currency); ?></span></td>
                    <td><?php echo e($data->category); ?></td>
                    <td><?php echo e($data->type); ?></td>
                    <td><?php echo e($data->style); ?></td>
                    <td><?php echo e($data->overview); ?></td>
                    <td><?php echo e($data->addon_highlight); ?></td>
                    <td><?php echo e($data->seo); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Addon</th>
                    <th>Days</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Style</th>
                    <th>Overview</th>
                    <th>Highlight</th>
                    <th>SEO</th>
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

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/addons/addon.blade.php ENDPATH**/ ?>