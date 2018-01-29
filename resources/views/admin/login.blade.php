@extends('admin.master')
@section('title', 'Admin Login')

@section('content')
<div class="container" style="padding-top: 90px; padding-bottom:90px">
            <form role="form" method="POST" action="{{ url('/admin_login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail Address</label>

                <div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>

                <div>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-success">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/admin_password/reset') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
       
</div>
@endsection