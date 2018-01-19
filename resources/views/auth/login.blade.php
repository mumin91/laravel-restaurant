@extends('layouts.main')

@section('content')

<div class="container" style="padding-top: 90px; padding-bottom:90px">
  <h2>Log in Form</h2>
  <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}


    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email">Email:</label>
      <input id="email" type="email" class="form-control" name="email" placeholder="Enter E-Mail Address" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    </div>


    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
      </label>
      <label>
          <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
      </label>
    </div>



    <button type="submit" class="btn btn-primary">Login</button>
                                
    

    <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
  </form>
</div>

  

@endsection


