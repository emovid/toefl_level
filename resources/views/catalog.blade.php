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
	 STORIES SECTION
	 ***************************************************************************************************************** -->
	  <div class="container mtb">
	 	<div class="row centered">
		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
                <a href="{{ url('/reading') }}"><img href="{{ url('/reading') }}" class="img-responsive" src="assets/img/course.jpg" alt=""></a>
				</div><!-- he wrap -->
				<h4 class="ctitle"><a href="{{ url('/reading') }}">READING</a></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
                  <a href="{{ url('/writing') }}"><img class="img-responsive" src="assets/img/course.jpg" alt=""></a>
				</div><!-- he wrap -->
              <h4 class="ctitle"><a href="{{ url('/reading') }}">WRITING</a></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
                  <a href="{{ url('/listening') }}"><img class="img-responsive" src="assets/img/course.jpg" alt=""></a>
				</div><!-- he wrap -->
              <h4 class="ctitle"><a href="{{ url('/listening') }}">LISTENING</a></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
                  <a href="{{ url('/speaking') }}"><img class="img-responsive" src="assets/img/course.jpg" alt=""></a>
				</div><!-- he wrap -->
              <h4 class="ctitle"><a href="{{ url('/speaking') }}">SPEAKING</a></h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->		 	
		 	
	 	</div><! --/row -->
	 </div><! --/container -->
@endsection