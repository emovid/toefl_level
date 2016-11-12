@extends('layouts.app')

@section('head.style')
<!-- Custom styles for treeview -->
    <link href="{{ URL::asset('assets/css/treeview.css') }}" rel="stylesheet">
@endsection

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
	 STORIES SECTION
	 ***************************************************************************************************************** -->
	  <div class="container mtb">
	 	<div class="row" style="min-height: 400px">
          
            <div class="col-lg-3 col-md-3 col-sm-3">
              <h3>Dashboard</h3>
				<ul id="tree3">
                <li><a href="#" class="card">Course</a>
                    <ul>
                      <li><a href="{{ url('/learn_reading') }}">Reading</a></li>
                      <li><a href="{{ url('/learn_writing') }}">Writing</a></li>
                      <li><a href="{{ url('/learn_listening') }}">Listening</a></li>
                      <li><a href="{{ url('/learn_speaking') }}">Speaking</a></li>
                    </ul>
                </li>

                </ul>
		 	</div><! --/col-lg-3 -->
	 	
		 	<div class="col-lg-9 col-md-9 col-sm-9">
		      @section('learn.content')
              <div class="well col-xs-12">
                <div class="row" style="margin:auto">

                        <h4>You haven't took any course yet</h4>

                  <div class="col-lg-10">
                        <p>Lets start with the easy one! </p>

                        <p><br/><a href="{{ url('/catalog') }}" class="btn btn-theme">Take Course</a></p>
                    </div>
                </div><! --/row -->
              </div>
              <! --/container -->
              @show
		 	</div><! --/col-lg-9 -->


		 	
	 	</div><! --/row -->
	 </div><! --/container -->
@endsection

@section('body.script')
<script>
$.fn.extend({
    treed: function (o) {
      
      var openedClass = 'glyphicon-minus-sign';
      var closedClass = 'glyphicon-plus-sign';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});
</script>
@endsection
