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
          <a class="navbar-brand" href="{{ url('/home') }}">TOEFL Level</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">LOGIN</a></li>
                <li><a href="{{ url('/register') }}">REGISTER</a></li>
            @else
                <li><a href="{{ url('/home') }}">LEARN</a></li>
                <li class="active"><a href="{{ url('/catalog') }}">CATALOG</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;"><span>Settings</span></a>
                    </li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
	 BLUE WRAP
	 *****************************************************************************************************************-->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Catalog.</h3>
			</div>
	    </div>
	</div> 

	<!-- *****************************************************************************************************************
     COURSE SECTION
     ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row centered">
            <h2>Courses</h2>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="he-wrap tpl6">
                  <a href="{{ url('/listening') }}"><img class="img-responsive" src="assets/img/portfolio_09.jpg" alt=""></a>
                </div><!-- he wrap -->
              <h4 class="ctitle"><a href="{{ url('/listening') }}">Listening Comprehension</a></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->      

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="he-wrap tpl6">
                <a href="{{ url('/reading') }}"><img href="{{ url('/structure') }}" class="img-responsive" src="assets/img/portfolio_09.jpg" alt=""></a>
                </div><!-- he wrap -->
                <h4 class="ctitle"><a href="{{ url('/structure') }}">Structure and Written Expression</a></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="he-wrap tpl6">
                  <a href="{{ url('/writing') }}"><img class="img-responsive" src="assets/img/portfolio_09.jpg" alt=""></a>
                </div><!-- he wrap -->
              <h4 class="ctitle"><a href="{{ url('/reading') }}">Reading Comprehension</a></h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="hline"></div>
            </div><! --/col-lg-3 -->

              
            
        </div><! --/row -->
     </div><! --/container -->
@endsection