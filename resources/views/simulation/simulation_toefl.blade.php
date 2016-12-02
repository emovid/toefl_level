@extends('layouts.start')

@section('side.content')
<h3>TOEFL Simulation</h3>
  <div class="menu_section">
    <ul class="nav side-menu">
      <li class="active"><a><i class="fa fa-bug"></i> Toefl Simulation</a>
      </li>
      <li><a><i class="fa fa-sitemap"></i> Forum Discussion <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>
@endsection

@section('content')
<!-- page content -->
<div role="main">

  <div class="row">

      <div class="dashboard_graph col-md-8 col-sm-8 col-xs-8">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>TOEFL Simulation</h3>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-horizontal form-label-left" action="{{ url('/simulation_listening') }}">
        <h6>Introduction</h6>
        <h4>In this exercise, you will have three sections that you have to answer. They are Listening Comprehension, Structure and Writing Expression, and Reading Comprehension. You have to finish all of that section within 90 minutes. Good luck!</h4> 
          
              <div class="ln_solid"></div>
              <div class="form-group" style="float: right">
                
                  <button type="submit" class="btn btn-success">Next</button>
                
              </div>
          </form>
        </div>

        <div class="clearfix"></div>
      </div>


    <div class="col-md-4 col-sm-4 col-xs-4">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2><span class="fa fa-warning" style="color: orange;"></span> Tips</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <h4>Please listen to the video carefully</h4>
          <p>You will learn about most important thing when speaking English</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection