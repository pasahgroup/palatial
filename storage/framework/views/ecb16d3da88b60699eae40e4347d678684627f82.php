  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#9bbda2;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tours Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tours Page</li>
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
          <h3 class="card-title">Tours</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="card">

                    <div class="card-body">
                      <h4 class="card-title"><?php echo e($programs->tour_name); ?></h4>
                      <p class="card-text">
                        <?php echo e($programs->itinerary_summury); ?>

                      </p>
                   </div>
                 
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0"> Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></h5>
                        </div>
                        <div class="card-body">
                          <p class="card-text"><?php echo e($data->itinerary_description); ?></p>
                      
                        <p class=""><span class=""> Destination: </span><b><?php echo e($data->destination_name); ?> </b></p>

                              <p class=""><span class=""> Distance: </span><b><?php echo e($data->distance); ?> </b>Km</p>
                                <p class=""><span class=""> Transport: </span><b><?php echo e($data->transport); ?> </b></p>
                                  <p class=""><span class=""> Destination: </span><b><?php echo e($data->destination_name); ?> </b></p>
                                  <span class=""> Accommodation: </span><b><?php echo e($data->accommodation_name); ?> </b></p>
                               <span class=""> Meal Plan: </span><b><?php echo e($data->meal); ?> </b></p>

                          <a href="<?php echo e(route('itineraries.edit',$data->id)); ?>" class="btn btn-primary float-right">Edit</a>
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </div>
              </div>
        </div>

  </div>
  
    </section>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/itinerary/index.blade.php ENDPATH**/ ?>