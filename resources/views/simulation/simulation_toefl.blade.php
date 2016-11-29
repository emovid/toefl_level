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
            <h3>Writing <small>Test Simulation</small></h3>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-horizontal form-label-left">
        <h6>Choose the answer of the question below</h6>
        <h3>1. _____ the demands of aerospace, medicine, and agriculture, aengineers, are creating exotic new metallic substances.</h3> 
          <div class="form-group" style="font-size: 1.2em;">
            <div class="radio">
              <label>
                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Meet
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Being met are
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> To meet
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> They are meeting
              </label>
            </div>
          </div>
              <div class="ln_solid"></div>
              <div class="form-group" style="float: right">
                
                  <button type="submit" class="btn btn-success">Confirm</button>
                
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