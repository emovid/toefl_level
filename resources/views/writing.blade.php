@extends('layouts.app')

@section('content')
<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Learn.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	
	<!-- *****************************************************************************************************************
	 Course Title
	 ***************************************************************************************************************** -->

	 <div class="container mtb well">
	 	<div class="row">
	 		<div class="col-lg-2">
	 			<img class="img-responsive" src="{{ URL::asset('assets/img/notepad.png') }}" alt="">
	 		</div>
	 		
	 		<div class="col-lg-10">
		 		<h4>Writing</h4>
		 		<p>Lets start with the easy one! </p>
		 		
 				<p><br/><a href="#" class="btn btn-theme">Start</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div>
	 <! --/container -->


	<!-- *****************************************************************************************************************
	 Syllabus 
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-12">
		 		<h4>Course Outcomes</h4>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	 		</div>

		 	<ul class="nav nav-tabs">
			 	<li class="active">
			 		<a>Syllabus</a>
			 	</li>
			 	<li></li>
			 </ul>

			<div id="acordeon">
	            
	            <div class="panel-group" id="accordion">
	              <div class="panel panel-default">
	                <div class="panel-heading">
	                  <h4 class="panel-title">
	                    <a data-toggle="collapse" href="#collapseOne">
	                      Default Collapsible Item 1
	                    </a>
	                  </h4>
	                </div>
	                <div id="collapseOne" class="panel-collapse collapse list-group">
	                  <!-- List group -->
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>  
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
	                </div>
	              </div>
	              <div class="panel panel-default">
	                <div class="panel-heading">
	                  <h4 class="panel-title">
	                    <a data-toggle="collapse" href="#collapseTwo">
	                      Default Collapsible Item 2
	                    </a>
	                  </h4>
	                </div>
	                <div id="collapseTwo" class="panel-collapse collapse list-group">
	                  <!-- List group -->
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>  
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
	                </div>
	              </div>
	              <div class="panel panel-default">
	                <div class="panel-heading">
	                  <h4 class="panel-title">
	                    <a data-toggle="collapse" href="#collapseThree">
	                      Default Collapsible Item 3
	                    </a>
	                  </h4>
	                </div>
	                <div id="collapseThree" class="panel-collapse collapse list-group">
	                  <!-- List group -->
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>  
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
	                </div>
	              </div>
	              <div class="panel panel-default">
	                <div class="panel-heading">
	                  <h4 class="panel-title">
	                    <a data-toggle="collapse" href="#collapseFour">
	                      Default Collapsible Item 4
	                    </a>
	                  </h4>
	                </div>
	                <div id="collapseFour" class="panel-collapse collapse list-group">
	                  <!-- List group -->
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>  
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
						<a href="#" class="list-group-item">Sub Content <span class="badge">></span>
						</a>
	                </div>
	              </div>
	            </div>
	            
	        </div><!--  end acordeon -->

	 	</div><! --/row -->
	 </div><! --/container -->
@endsection