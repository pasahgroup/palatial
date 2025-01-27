  
  <?php $__env->startSection('contents'); ?>

  <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>


  <style type="text/css">
    .red{
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
            <h1>Slider Page</h1>
          </div>
          <div class="col-sm-6">
             <?php if(Auth::user()->role =='Admin'): ?>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?php echo e(route('themes.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Slider
            </a></li>
            </ol>
            <?php endif; ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        
      <div class="card">
       
        <div class="card-body">
            <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Section</th>
                    <th>Attachment</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                        <td><?php echo e($slide->id); ?></td>
                        <td><?php echo e($slide->title); ?></td>
                        <td><?php echo e($slide->description); ?></td>
                        <td><?php echo e($slide->section); ?></td>
                           <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/uploads/'.$slide->attachment)); ?>"  style="width:100px; height:90px;"></div></td>

                        <td><?php echo e($slide->status); ?></td>
                        <td><a href="<?php echo e(route('themes.edit',$slide->id)); ?>"><i class="fa fa-edit"></i></a>  <a href="/themes-destroy/<?php echo e($slide->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($slide->tour_name); ?>','Inclusive')"><i class="fa fa-trash red"></i></a></td>
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

  <script type="text/javascript">
       $(document).ready(function(){
      // Department Change
      $('#classg').change(function(){
         // ward

  

         var v = $(this).val();
              //  alert(v);
           // Empty the dropdown
          $('#session').find('option').not(':first').remove();
             document.getElementById("classgf").value =v;
         // $('#village').find('option').not(':first').remove();
         // $('#project_name').find('option').not(':first').remove();
         // $('#project_activities').find('option').not(':first').remove();


//alert(v);
         // AJAX request
         $.ajax({
           url: 'getA/'+v,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
                //alet(len);

             if(response['dataA'] != null){
               len = response['dataA'].length;
             }
           //  alet(len);

                       if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['dataA'][i].session;
                 var name = response['dataA'][i].session;
                 var option = "<option value='"+id+"'>"+name+"</option>";
                 $("#session").append(option);
               }
             }
             //DAta are here

           }
        });
      });
    });
     </script>


 






     <script type="text/javascript">
  function setMetanameFunction(id) {
   // alert('passed');
    var elementM = document.getElementById("metaname_model").value;
     //alert(elementM);
 $('#metaname_id').val(elementM);
         document.getElementById("data_display").style.display = "none";
  }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/themes/slider.blade.php ENDPATH**/ ?>