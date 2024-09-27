@extends('website.layouts.apps')
@section('content')

    <head>
      <?php include(app_path().'/pesapal/pesapal-iframe.php');?>
      
       
    </head>
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                                                       
                                  

                                      <form action="pesapal-iframe.php" method="post">
  <table>
    <tr>
      <td>Amount:</td>
      <td><input type="text" name="amount" value="1002" />
      (in Tshs)
      </td>
    </tr>
    <tr>
      <td>Type:</td>
      <td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
      (leave as default - MERCHANT)
      </td>
    </tr>
    <tr>
      <td>Description:</td>
      <td><input type="text" name="description" value="Order Description" /></td>
    </tr>
    <tr>
      <td>Reference:</td>
      <td><input type="text" name="reference" value="001" />
      (the Order ID )
      </td>
    </tr>
    <tr>
      <td>Shopper's First Name:</td>
      <td><input type="text" name="first_name" value="John" /></td>
    </tr>
    <tr>
      <td>Shopper's Last Name:</td>
      <td><input type="text" name="last_name" value="Doe" /></td>
    </tr>
    <tr>
      <td>Shopper's Email Address:</td>
      <td><input type="text" name="email" value="buruwawa@gmail.com" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Make Payment" /></td>
    </tr>
  </table>
</form>
        </div>
@endsection
