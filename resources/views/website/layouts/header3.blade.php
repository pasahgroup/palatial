




  <div class="container top-header-area" style="background:#transparent;padding:2px;">
         <div class="align-items-center py-2 px-xl-5 d-lg-flex" style="border:1px solid rgba(0,0,0,.9)">
              <div class="col-lg-2 col-md-4">
                <a href="" class="text-decoration-none">
                    <span class="h3 text-uppercase text-primary bg-dark px-2">PALATIAL</span>
                    <span class="h3 text-uppercase text-dark bg-primary px-2 ml-n1">Tour</span>
                </a>

            </div>

              <div class="col-lg-4 col-md-7">
                 <div class="email-address_no">
                    <a href="mailto:info@palatialtours.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><b style="color:#FDD43D;">  info@palatialtours.com</b></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <img src="../../../images/whatsapp.png" alt="" style="width:20px; height:20px;">
                               <b style="color:#FDD43D;">(+255)753 216 263</b>
                            </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 text-left">
                      <form  method="post"  action="{{ route('search-tour') }}" enctype="multipart/form-data">
                                  @csrf
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


            <div class="col-lg-2 col-md-4 text-right">
<!-- btn btn-primary btn-square mr-2 -->
                      <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-twitter"></i></a>
      <a href="#"  class="btn btn-outline btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
          <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-linkedin-in"></i></a>
           <a href="#"  class="btn btn-outline btn-primary"><i class="fab fa-instagram"></i></a>

            </div>
        </div>
    </div>
