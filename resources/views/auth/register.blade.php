@extends('layouts.app')

@section('content')
   <!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row login">
        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-offset-4">
          <h4>SIGN UP AND UPGRADE YOUR TOEFL SCORE</h4>
          <form class="form-horizontal register" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group">
              <input type="text" class="form-control input-lg{{ $errors->has('name') ? ' has-error' : '' }}" id="name" placeholder="Full Name" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              <input type="text" class="form-control input-lg{{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
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
              <button type="submit" class="btn btn-theme btn-lg btn-block">SINGUP</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger col-md-5"><i class="fa fa fa-google-plus"></i>&nbspGOOGLE</button>
                <button type="button" class="btn btn-primary col-md-5 col-md-offset-2"><i class="fa fa-facebook-square"></i>&nbspFACEBOOK</button>
            </div>
          </form>
          
        </div>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->

@endsection
