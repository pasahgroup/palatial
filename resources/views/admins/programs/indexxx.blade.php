
  @extends('admins.layouts.Apps.app')
  @section('contents')
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
            <h1>Programs Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Programs Page</li>
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
          <h3 class="card-title">Programs</h3>

          <div class="card-tools">
            <a href="{{ route('programs.create') }}" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Program
            </a>
          </div>
        </div>



        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Days</th>
                     <th>Cost</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Style</th>
                    <th>Main</th>
                    <th>Tour Code</th>
                    <th>Photo</th>
                   <th>Popular Experience</th>
                     <th>Tour Circuit</th>
                    <th>Overview</th>
                    <th>Highlight</th>
                    <th>SEO</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($datas as $data)


                      <!-- Default box -->
                      <div class="card">
                          <div class="col-md-12">
                                <div class="panel-body">
                                  <table class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                  <th></th>
                                    <th>ID</th>
                                  <th>Program</th>
                                  <th>Days</th>
                                  <th>Costs</th>
                                  <th>Price</th>
                                  <th>Tour Code</th>
                                  <th>Popular Experience</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                   <td><button class="btn btn-default btn-xs"><span class="las la-plus"></span></button></td>
                                      <td>{{ $data->id }}</td>

                                    <th><a href="{{ route('inclusive.show',$data->id) }}">{{ $data->tour_name }}</a></th>
                                          <td><a href="{{ route('programs.show',$data->id) }}">{{ $data->days }}</a></td>
                                    <td>{{ number_format($data->cost,2) }}<span class="badge"> {{ $data->currency}}</span></td>
                                    <td>{{ number_format($data->price,2) }}<span class="badge"> {{ $data->currency }}</span></td>
                                    <td>{{ $data->tour_code }}</td>
                                      <td>{{ $data->popular_experience }}</td>
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




                                              </tbody>
                                        </table>

                                      </div>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                                    </div>


                              </div>




                  <tr>
                    <td>{{ $data->id }}</td>
                    <td><a href="{{ route('inclusive.show',$data->id) }}">{{ $data->tour_name }}</a></td>
                    <td><a href="{{ route('programs.show',$data->id) }}">{{ $data->days }}</a></td>

                    <td>{{ $data->cost }}<span class="badge"> {{ $data->currency}}</span></td>
                    <td>{{ $data->price }}<span class="badge"> {{ $data->currency }}</span></td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->style }}</td>
                     <td>{{ $data->main }}</td>
                     <td>{{ $data->tour_code }}</td>
                      <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/uploads/'.$data->attachment) }}" width="60" height="40"></div></td>
                    <td>{{ $data->popular_experience }}</td>
                    <td>{{ $data->tour_circuit }}</td>
                    <td>{{ $data->overview }}</td>
                    <td>{{ $data->tour_highlight }}</td>
                    <td>{{ $data->seo }}</td>
                    <td><a role="button" href="{{ route('editProgram',$data->id) }}"><i class="fa fa-edit"></i></a>
                      <a role="button" href="/destroyf/{{$data->id}} " onclick="return confirm('Are you sure? You want to delete {{ $data->tour_name}}','Inclusive')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                   <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Days</th>
                     <th>Cost</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Style</th>
                    <th>Main</th>
                     <th>Tour Code</th>
                     <th>Photo</th>
                    <th>Popular Experience</th>
                    <th>Tour Circuit</th>
                    <th>Overview</th>
                    <th>Highlight</th>
                    <th>SEO</th>
                    <th>Action</th>
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
@endsection
