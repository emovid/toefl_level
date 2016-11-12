@extends('layouts.app')

@section('content')

<!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row login">
        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-offset-4">
          <h4>RESET PASSWORD</h4>
          <form class="form-horizontal login" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}" placeholder="Token">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="text" class="form-control input-lg{{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" name="email" value="{{ $email or old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              <input type="password" class="form-control input-lg{{ $errors->has('password') ? ' has-error' : '' }}" id="password" type="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
               <input type="password" class="form-control input-lg{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" id="password-confirm" type="password" name="password" placeholder="Password Confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif 
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-theme btn-lg btn-block">RESET</button>
            </div>
          </form>
        </div>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->

@endsection
