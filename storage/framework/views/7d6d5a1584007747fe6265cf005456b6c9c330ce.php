

<?php $__env->startSection('contents'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<style>
@charset  "UTF-8";
@import  url("https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.pcs:after {
  content: " pcs";
}

.cur:before {
  content: "$";
}

.per:after {
  content: "%";
}

* {
  box-sizing: border-box;
}

body {
  padding: 0.2em 2em;
}

table {
  width: 100%;
}
table th {
  text-align: left;
  border-bottom: 1px solid #ccc;
}
table th, table td {
  padding: 0.4em;
}

table.fold-table > tbody > tr.view td, table.fold-table > tbody > tr.view th {
  cursor: pointer;
}
table.fold-table > tbody > tr.view td:first-child,
table.fold-table > tbody > tr.view th:first-child {
  position: relative;
  padding-left: 20px;
}
table.fold-table > tbody > tr.view td:first-child:before,
table.fold-table > tbody > tr.view th:first-child:before {
  position: absolute;
  top: 50%;
  left: 5px;
  width: 9px;
  height: 16px;
  margin-top: -8px;
  font: 16px fontawesome;
  color: #999;
  content: "";
  transition: all 0.3s ease;
}
table.fold-table > tbody > tr.view:nth-child(4n-1) {
  background: #eee;
}
table.fold-table > tbody > tr.view:hover {
  background: #000;
}
table.fold-table > tbody > tr.view.open {
  background: tomato;
  color: white;
}
table.fold-table > tbody > tr.view.open td:first-child:before, table.fold-table > tbody > tr.view.open th:first-child:before {
  transform: rotate(-180deg);
  color: #333;
}
table.fold-table > tbody > tr.fold {
  display: none;
}
table.fold-table > tbody > tr.fold.open {
  display: table-row;
}

.fold-content {
  padding: 0.5em;
}
.fold-content h3 {
  margin-top: 0;
}
.fold-content > table {
  border: 2px solid #ccc;
}
.fold-content > table > tbody tr:nth-child(even) {
  background: #eee;
}
</style>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Main content -->
    <section class=" container-fluid content">
<table class="fold-table">
  <thead>
    <tr>
      <th>Company</th><th>Amount</th><th>Value</th><th>Premiums</th><th>Strategy A</th><th>Strategy B</th><th>Strategy C</th>
    </tr>
  </thead>
  <tbody>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6535178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table>
            <thead>
              <tr>
                <th>Company name</th><th>Customer no</th><th>Customer name</th><th>Insurance no</th><th>Strategy</th><th>Start</th><th>Current</th><th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sony</td>
                <td>13245</td>
                <td>John Doe</td>
                <td>064578</td>
                <td>A, 100%</td>
                <td class="cur">20000</td>
                <td class="cur">33000</td>
                <td class="cur">13000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>13288</td>
                <td>Claire Bennet</td>
                <td>064877</td>
                <td>B, 100%</td>
                <td class="cur">28000</td>
                <td class="cur">48000</td>
                <td class="cur">20000</td>
              </tr>
              <tr>
                <td>Sony</td>
                <td>12341</td>
                <td>Barry White</td>
                <td>064123</td>
                <td>A, 100%</td>
                <td class="cur">10000</td>
                <td class="cur">22000</td>
                <td class="cur">12000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</section>
</div>
<script>
$(function(){
  $(".fold-table tr.view").on("click", function(){
    $(this).toggleClass("open").next(".fold").toggleClass("open");
  });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/programs/index.blade.php ENDPATH**/ ?>