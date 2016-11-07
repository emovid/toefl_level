@extends('layouts.app')

@section('content')
<!-- *****************************************************************************************************************
	 BLUE WRAP
	 *****************************************************************************************************************-->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>About.</h3>
			</div>
	    </div>
	</div> 

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<img class="img-responsive" src="assets/img/agency.jpg" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
		 		<h3>OUR MISSION</h3>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		 		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		 		<p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
	 		</div>
	 	</div>

	 <div class="hline mt"></div>
	 </div>


	<!-- *****************************************************************************************************************
	 TEEAM MEMBERS
	 ***************************************************************************************************************** -->

	 <div class="container mb">
	 	<div class="row centered">
		 	<h3 class="mb">MEET OUR TEAM</h3>
		 	<div class="col-lg-3 col-md-3 col-sm-3 col-md-offset-3">
				<div class="he-wrap tpl6">
				<img src="assets/img/team02.jpg" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4>Misbach Imadudin</h4>
				<h5 class="ctitle">CHIEF INFORMATION OFFICER</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
				<img src="assets/img/team04.jpg" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4>Abdullah Zaky</h4>
				<h5 class="ctitle">CHIEF TECHNOLOGY OFFICER</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<div class="hline"></div>
		 	</div>
	 	</div>
	 </div>
@endsection