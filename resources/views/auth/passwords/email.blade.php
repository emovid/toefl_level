@extends('layouts.app')

<!-- Main Content -->
@section('content')

<!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row login">
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="col-lg-4 col-sm-4 col-md-4 col-lg-offset-4">
          <h4>RESET PASSWORD</h4>
          <form class="form-horizontal login" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="text" class="form-control input-lg{{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" name="email" value="{{ $email or old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-theme btn-lg btn-block">SEND PASSWORD RESET LINK</button>
            </div>
          </form>
        </div>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->

@endsection
