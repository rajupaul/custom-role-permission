@extends('admin.auth.layouts.auth_layout',['title'=>'Admin Login'])
@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('admin.postLogin')}}" method="post">
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
        <div class="input-group mt-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>
           @if($errors->has('password'))
          <span class="text-danger">{{$errors->first('password')}}</span>
          @endif
        <div class="row mt-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{route('admin.getForgotPassword')}}">I forgot my password</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection