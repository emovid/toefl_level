@extends('layouts.app')

@section('content')
 <!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row login">
        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-offset-4">
          <h4>LOGIN AND LEARN TOEFL</h4>
          <form class="form-horizontal login" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <input type="text" class="form-control input-lg{{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              <input type="password" class="form-control input-lg{{ $errors->has('password') ? ' has-error' : '' }}" id="password" type="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-theme btn-lg btn-block">LOGIN</button>
              <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
          </form>
          <p>Log in with <a href="#">Google</a>, <a href="#">Facebook</a>, or <a href="#">Twitter</a></p>
        </div>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->

@endsection
