@extends('admin.auth.layouts.auth_layout',['title'=>'Admin Reset Password'])
@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

      <form action="{{route('admin.postResetPassword',$reset_code)}}" method="post">
        @csrf
        <div class="input-group">
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
        <div class="input-group mt-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>
          @if($errors->has('password_confirmation'))
          <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
          @endif
        <div class="row mt-3">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
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
<!-- /.login-box -->
@endsection