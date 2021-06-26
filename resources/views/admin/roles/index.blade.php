@extends('admin.layouts.main_layout',['title'=>'Admin :: Roles'])
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Roles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Roles</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Roles</h3>

                <div class="card-tools">
                    <div class="d-flex justify-content-end ">
                      <div  style="margin-top: -.3rem"><a class="btn btn-primary" href="#">Create Role</a></div>
                      <div>&nbsp;</div>
                      <div >
                       <div class="input-group" style="width: 350px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Role Name</th>
                      <th style="width: 40%;">Role Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($roles))
                      @foreach($roles as $role)
                    <tr>
                      <td>{{$role->id}}</td>
                      <td>{{$role->display_name}}</td>
                      <td style="width: 40%;">{{$role->description}}</td>
                      <td>{{$role->created_at->format('Y-m-d')}}</td>
                      <td><a href="javascript:void(0)"><i class="text-success fas fa-eye"></i></a>&nbsp;<a href="javascript:void(0)"><i class="text-primary fas fa-pen-square"></i></a>&nbsp;<a href="javascript:void(0)"><i class="text-danger fas fa-trash"></i></a></td>
                    </tr>
                      @endforeach
                    @else
                    <tr>
                      <td colspan="5">No Roles</td>
                    </tr>
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
@endsection