@extends('admin.auth.layouts.auth_layout',['title'=>'Admin Forgot Password'])
@section('body')
<div class="login-box">
  <div class="login-logo">
   <a href="javascript:void(0)"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="{{route('admin.postForgotPassword')}}" method="post">
        @csrf
        <div class="input-group">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
          @if($errors->has('email'))
          <span class="text-danger">{{$errors->first('email')}}</span>
          @endif
        <div class="row mt-3">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{route('admin.getLogin')}}">Login</a>
      </p>
 
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection