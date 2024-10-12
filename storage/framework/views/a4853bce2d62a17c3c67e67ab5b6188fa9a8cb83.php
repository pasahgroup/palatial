
    <header class="header-area">
   
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeaderx" style="background:#fdfdfd;">
           <!-- <div class="main-header-area" id="stickyHeader" style="background:#2e4432;"> -->
            <div class="classy-nav-container breakpoint-off">

       <div class="container">
        <div class="row align-items-center py-3 px-xl-5 d-none d-lg-flex" style="margin-top:-4px;margin-bottom:-6px;">
            <div class="col-lg-2">
                <a href="" class="text-decoration-none">
                    <span class="h3 text-uppercase text-primary bg-dark px-2">Palatial</span>
                    <span class="h3 text-uppercase text-dark bg-primary px-2 ml-n1">Tour</span>
                </a>            

            </div>

              <div class="col-lg-4 col-6 text-left">
                 <div class="email-address">
                    <a href="mailto:info@palatialtours.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><span style="color:#072004;">  info@palatialtours.com</span></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <img src="../../../images/whatsapp.png" alt="" style="width:20px; height:20px;">
                               <span style="color:#072004;">(+255)753 216 263</span>
                            </a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-left">
                      <form  method="post"  action="<?php echo e(route('search-tour')); ?>" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="search any keyword" required="">
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-lg-3 col-6 text-right">
<!-- btn btn-primary btn-square mr-2 -->
                      <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-twitter"></i></a>
      <a href="#"  class="btn btn-outline btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
          <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-linkedin-in"></i></a>
           <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-instagram"></i></a>

            </div>
        </div>
    </div>

        </div>
    </header>

<?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/layouts/header.blade.php ENDPATH**/ ?>