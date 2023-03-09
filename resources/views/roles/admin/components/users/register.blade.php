@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Users</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
    	<div class="container-fluid">
    		<main class="form-signin">
                <form method="post" action="{{ route('users.register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
                    
                    <h1 class="h3 mb-3 fw-normal">Register</h1>
            
                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        <label for="floatingEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Username</label>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                
            </main>
    	</div>
    	
    </div>
    <!-- /.row (main row) -->
@endsection





