
  @extends('admins.layouts.Apps.app')
  @section('contents')

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
              <form  method="post" id="post_form" action="{{ route('bank.update',$bank->id) }}">
                @csrf
             <input type="hidden" name="_method" value="PUT">
                <div class="card-body">                       
                      <div class="row"> 
                   <div class="col-md-4">  
                  <label>Bank Name</label>
                    <input class="form-control" type="text" name="bank_name"  value="{{$bank->bank_name}}">
                        </div>
                      <div class="col-md-4"> 
                    <label>Swift Code</label>
                    <input class="form-control" type="text" name="swift_code"  value="{{$bank->swift_code}}">  
                       </div>
                      <div class="col-md-4"> 
                    <label>Bank</label>
                    <input class="form-control" type="text" name="country"  value="{{$bank->country}}"> 
</div>
</div>
    <div class="row"> 

<div class="col-md-4">
                      <label>Account Name</label>
                    <input class="form-control" type="text" name="account_name"  value="{{$bank->account_name}}">
 </div>
                      <div class="col-md-4"> 
                       <label>Account Number</label>
                    <input class="form-control" type="text" name="account_no"  value="{{$bank->account_no}}">  

           </div>
         </div>
<br>
  <label>INTERMEDIARY BANK DETAILS</label>
                     <div class="row"> 
                   <div class="col-md-4">                   
                    <label>Intermediary bank name</label>
                    <input class="form-control" type="text" name="intermediary_bank_name" value="{{$bank->intermediary_bank_name}}">
                  </div>
                      <div class="col-md-4"> 
                    <label>Intermediary swift code</label>
                    <input class="form-control" type="text" name="intermediary_swift_code"  value="{{$bank->intermediary_swift_code}}">  
                   </div>
   
                      <div class="col-md-4">
                      <label>Intermediary account number</label>
                    <input class="form-control" type="text" name="intermediary_account_no"  value="{{$bank->intermediary_account_no}}">    
</div>
</div>
          <br>


                        <label>Status</label>
                     <select name="status" id="status" class="form-control">

                                  <option selected>{{$bank->status}}</option>
                                  <option>Active</option>
                                  <option>Inactive</option>
                                </select>                    
             </div>               
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/bank"  role="button" class="btn btn-success float-left">View Bank List</a>
              <button type="submit" class="btn btn-primary float-right">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

@endsection
