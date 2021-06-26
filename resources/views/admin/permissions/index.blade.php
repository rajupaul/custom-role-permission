@extends('admin.layouts.main_layout',['title'=>'Admin :: Permissions'])
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permissions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Permissions</a></li>
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
                <h3 class="card-title">All Permissions</h3>

                <div class="card-tools">


                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Permission Name</th>
                      <th style="width: 40%;">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($permissions))
                      @foreach($permissions as $permission)
                    <tr>
                      <td>{{$permission->id}}</td>
                      <td>{{$permission->display_name}}</td>
                      <td style="width: 40%;">{{$permission->description}}</td>
                    </tr>
                      @endforeach
                    @else
                    <tr>
                      <td colspan="3">No Permissions</td>
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