
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> -->

  @extends('admins.layouts.Apps.app')
  @section('contents')

<div class="container">
	<div class="col-md-12">
    	<div class="panel panel-default">
				<div class="panel-heading">
					Employee
				</div>
        <div class="panel-body">
					<table class="table table-condensed table-striped">
    <thead>
        <tr>
					<th></th>
          <th>Fist Name</th>
          <th>Last Name</th>
          <th>City</th>
          <th>State</th>
          <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
           <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td>Carlos</td>
            <td>Mathias</td>
            <td>Leme</td>
            <td>SP</td>
          	<td>new</td>
        </tr>

        <tr>
            <td colspan="12" class="hiddenRow">
							<div class="accordian-body collapse" id="demo1">
              <table class="table table-striped">
                      <thead>
                        <tr class="info">
													<th>Job</th>
													<th>Company</th>
													<th>Salary</th>
													<th>Date On</th>
													<th>Date off</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>

                        <tr data-toggle="collapse"  class="accordion-toggle" data-target="#demo10">
													<td> <a href="#">Enginner Software</a></td>
													<td>Google</td>
													<td>U$8.00000 </td>
													<td> 2016/09/27</td>
													<td> 2017/09/27</td>
													<td>
														<a href="#" class="btn btn-default btn-sm">
                 								 <i class="glyphicon glyphicon-cog"></i>
															</a>
													</td>
												</tr>

												 <tr>
            <td colspan="12" class="hiddenRow">
							<div class="accordian-body collapse" id="demo10">
              <table class="table table-striped">
                      <thead>
                        <tr>
													<td><a href="#"> XPTO 1</a></td>
													<td>XPTO 2</td>
													<td>Obs</td>
												</tr>
                        <tr>
													<th>item 1</th>
													<th>item 2</th>
													<th>item 3 </th>
													<th>item 4</th>
													<th>item 5</th>
													<th>Actions</th>
												</tr>
                      </thead>
                      <tbody>
                        <tr>
													<td>item 1</td>
													<td>item 2</td>
													<td>item 3</td>
													<td>item 4</td>
													<td>item 5</td>
													<td>
															<a href="#" class="btn btn-default btn-sm">
                  							<i class="glyphicon glyphicon-cog"></i>
															</a>
													</td>
												</tr>
                      </tbody>
               	</table>

              </div>
          </td>
        </tr>

                        <tr>
													<td>Scrum Master</td>
													<td>Google</td>
													<td>U$8.00000 </td>
													<td> 2016/09/27</td>
													<td> 2017/09/27</td>
													<td> <a href="#" class="btn btn-default btn-sm">
                 								 <i class="glyphicon glyphicon-cog"></i>
															</a>
													</td>
												</tr>


                        <tr>
													<td>Back-end</td>
													<td>Google</td>
													<td>U$8.00000 </td>
													<td> 2016/09/27</td>
													<td> 2017/09/27</td>
													<td> <a href="#" class="btn btn-default btn-sm">
                 								 <i class="glyphicon glyphicon-cog"></i>
															</a>
													</td>
												</tr>


                        <tr>
													<td>Front-end</td>
													<td>Google</td>
													<td>U$8.00000 </td>
													<td> 2016/09/27</td>
													<td> 2017/09/27</td>
													<td> <a href="#" class="btn btn-default btn-sm">
                 								 <i class="glyphicon glyphicon-cog"></i>
															</a>
													</td>
												</tr>


                      </tbody>
               	</table>

              </div>
          </td>
        </tr>



        <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
             <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
             <td>Silvio</td>
            <td>Santos</td>
            <td>São Paulo</td>
            <td>SP</td>
          <td> new</td>
        </tr>
        <tr>
            <td colspan="6" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
        </tr>
        <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
            <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td>John</td>
            <td>Doe</td>
            <td>Dracena</td>
            <td>SP</td>
          <td> New</td>
        </tr>
        <tr>
            <td colspan="6" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3 sadasdasdasdasdas</div></td>
        </tr>
    </tbody>
</table>
            </div>

          </div>

      </div>
	</div>
  @endsection
