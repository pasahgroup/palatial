@extends('website.layouts.apps')
@section('content')



  <!-- <link rel="stylesheet" href="../assets/css/min/bootstrap.min.css" media="all"> -->

  <!-- <link rel="stylesheet" href="../assets/css/jqueryui.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/vendor/animate-css/animate.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/iconfont/iconstyle.css" media="all"> -->
  <!-- <link rel="stylesheet" href="../assets/font/font-awesome/css/font-awesome.css" media="all"> -->
  <link rel="stylesheet" href="../assets/css/main.css" media="all" id="maincss">
<body>

 <!--  <div class="pre-loader">
    <div class="loading-img"></div>
  </div> -->

 
  <section class="checkout-page">
    <div class="container">


     <div class="border-box">
        <div class="box-title">
          <h5>Please make Payment to arrange your favourite tour</h5>
        </div>
        <em>Summary invoice for your favourite tour costs</em>
        <br>
        <br>
        <div class="table-responsive-wrap">
          <table class="table table-responsive cart-checkout-table">
            <thead>
              <tr>
                <th>Item</th>
                <th>&nbsp;</th>
                 <th>Price Percent(%)</th>
                <th>Actual Price</th>
                <th class="text-center">No of Persons</th>
                <th class="price">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="http://placehold.it/60x60" alt="" class="item-img">
                </td>
                <td>Lorem ipsum dolor sit amet, consectetur.</td>
                <td>100%</td>
                <td>{{ number_format($cust->adults_cost,2)}} {{ $cust->currency}}</td>
                <td class="text-center">
                  {{ $cust->adults }}
                </td>
                <td class="price">USD 544</td>
              </tr>
              <tr>
                <td>
                  <img src="http://placehold.it/60x60" alt="" class="item-img">
                </td>
                <td>Lorem ipsum dolor sit amet, consectetur.</td>
                <td>40%</td>
                <td>{{ number_format($cust->teens_cost,2)}} {{ $cust->currency}}</td>
                <td class="text-center">
                  {{ $cust->teens }}
                </td>
                <td class="price">USD 544</td>
              </tr>
               <tr>
                <td>
                  <img src="http://placehold.it/60x60" alt="" class="item-img">
                </td>
                <td>Lorem ipsum dolor sit amet, consectetur.</td>
                <td>75%</td>
                <td>{{ number_format($cust->children_cost,2)}} {{ $cust->currency}}</td>
                <td class="text-center">
                  {{ $cust->children }}
                </td>
                <td class="price">USD 544</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-responsive cart-checkout-table">
            <tr>
              <td class="price">
                Sub Total
              </td>
              <td class="price">
                USD 2022
              </td>
            </tr>
            <tr>
              <td class="price">
                Discount
              </td>
              <td class="price">
                USD 75
              </td>
            </tr>
            <tr class="total">
              <td class="price">Grand Total</td>
              <td class="price">USD 5235</td>
            </tr>
          </table>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="border-box">
        <div class="box-title">
          <h4>Invoice Details</h4>
        </div>
        <br>
        <div class="row">
          <form>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Country <span class="required">*</span>
                </label>
                <select class="form-control">
                  <option value="">Choose Country</option>
                </select>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name<span class="required">*</span>
                    </label>
                    <input type="text" class="form-control" placeholder="First Name" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Last Name<span class="required">*</span>
                    </label>
                    <input type="text" class="form-control" placeholder="Last Name" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Address<span class="required">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Address" />
              </div>
              <div class="form-group">
                <label>Email<span class="required">*</span>
                </label>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <label>Phone<span class="required">*</span>
                </label>
                <input type="text" class="form-control" placeholder="+00 00 000 000" />
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">Create an account?
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Addtional Message</label>
                <textarea class="form-control">Message</textarea>
              </div>

              <div class="form-group">
                <button class="btn btn-primary hvr-sweep-to-right">Proceed Checkout</button>
              </div>
            </div>
            <div class="col-sm-6">

              <div class="border-box">
                <div class="btn-group card-option" data-toggle="buttons">
                  <label class="btn active" data-toggle="tooltip" data-placement="bottom" title="Master Card">
                    <input type="radio" name="options" id="option1" checked>
                    <img src="../assets/img/card-master.png" alt="">
                  </label>
                  <label class="btn" data-toggle="tooltip" data-placement="bottom" title="Visa">
                    <input type="radio" name="options" id="option2">
                    <img src="../assets/img/card-visa.png" alt="">
                  </label>
                  <label class="btn" data-toggle="tooltip" data-placement="bottom" title="Paypal">
                    <input type="radio" name="options" id="option3">
                    <img src="../assets/img/card-paypal.png" alt="">
                  </label>
                </div>
                <hr>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Cardholder Name <span class="required"></span>
                      </label>
                      <input type="text" class="form-control" placeholder="User Name" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Expiry Date <span class="required"></span>
                      </label>
                      <div class="row">
                        <div class="col-sm-6">
                          <select class="form-control">
                            <option value="">07</option>
                          </select>
                        </div>
                        <div class="col-sm-6">
                          <select class="form-control">
                            <option value="">12</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>


                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Credit Card Number<span class="required">*</span>
                      </label>
                      <input type="text" class="form-control" placeholder="948 / 747 / 332 /282" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>CVV Code<span class="required">*</span>
                      </label>
                      <input type="text" class="form-control" placeholder="505" />
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </form>

        </div>
      </div>



    </div>
  </section>

</body>

@endsection