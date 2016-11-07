@extends('layouts.app')

@section('navbar')
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">TOEFL Level</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">LOGIN</a></li>
                <li><a href="{{ url('/register') }}">REGISTER</a></li>
            @else
                <li class="active"><a href="{{ url('/home') }}">LEARN</a></li>
                <li><a href="{{ url('/catalog') }}">CATALOG</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
@overwrite

@section('content')
<!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3>Show your work with this beautiful theme</h3>
                    <h1>Eyecatching Bootstrap 3 Theme.</h1>
                    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                    <h5>More Lorem Ipsum added here too.</h5>               
                </div>
                <div class="col-lg-8 col-lg-offset-2 himg">
                    <img src="assets/img/browser.png" class="img-responsive">
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /headerwrap -->
@endsection
