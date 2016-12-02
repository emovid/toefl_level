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

      <div class="dashboard_graph col-md-12 col-sm-12 col-xs-12">

        <div class="row ">
          <div class="col-md-6">
            <h3>Listening Comprehension</h3>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-horizontal form-label-left">
        <h4>In this part you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible answers and decide which one would be the best answer to the question you have heard.</h4>

        <audio controls autoplay>
          <source src="{{ URL::asset('assets/sound/Track.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>

        <ol>
          <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios1_1" name="optionsRadios1"> Mark is fond of rare meat
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios1_2" name="optionsRadios1"> Mark is angry at the chef
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option3" id="optionsRadios1_3" name="optionsRadios1"> Mark dislike rare meat
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios1_4" name="optionsRadios1"> Mark doesn't want his meat coocked medium rare
              </label>
            </div>
          
            
            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios2_1" name="optionsRadios2"> The man doesn't like skim milk
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios2_2" name="optionsRadios2"> The milk has turned bad
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios2_3" name="optionsRadios2"> The man's check-cashing card has expired
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios2_4" name="optionsRadios2"> The milk may turn sour if they don't drink it within the next five days
              </label>
            </div>
            

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios3_1" name="optionsRadios3"> He has other plans
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios3_2" name="optionsRadios3"> He has a bad personality
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios3_3" name="optionsRadios3"> He thinkwit will be frightening
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios3_4" name="optionsRadios3"> He doesn't have enough time
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios4_1" name="optionsRadios4"> It has been in her family a long time
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios4_2" name="optionsRadios4"> It is a family diagrace
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios4_3" name="optionsRadios4"> Her mother doesn't like it
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios4_4" name="optionsRadios4"> Her boyfriend gave it to her
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios5_1" name="optionsRadios5"> It was cleaned
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios5_2" name="optionsRadios5"> There was a large sale
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios5_3" name="optionsRadios5"> The employees had to work very late
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios5_4" name="optionsRadios5"> There was a robbery
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios6_1" name="optionsRadios6"> She has gpod taste in clothes
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios6_2" name="optionsRadios6"> Her choice is not suitable for the occasion
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios6_3" name="optionsRadios6"> The skirt is pretty, but not the blouse
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios6_4" name="optionsRadios6"> It is too elegant 
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios7_1" name="optionsRadios7"> Jack didn't visit them
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios7_2" name="optionsRadios7"> Jack will not visit them because it's not on his way
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios7_3" name="optionsRadios7"> They hope Jack will visit them
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios7_4" name="optionsRadios7"> They are sure that Jack will visit them if he doesn't run out of time
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios8_1" name="optionsRadios8"> She'll count the votes on the proposal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios8_2" name="optionsRadios8"> She'll support the man's proposal
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios8_3" name="optionsRadios8">  She'll make the proposal herself
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios8_4" name="optionsRadios8"> She'll back out of the proposal
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios9_1" name="optionsRadios9"> At the jewelery store
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios9_2" name="optionsRadios9"> From the purchaser
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios9_3" name="optionsRadios9"> From a machine
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios9_4" name="optionsRadios9"> Down the hall
              </label>
            </div>

            <li><h4>Choose the best answer.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios10_1" name="optionsRadios10"> It will rain later
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios10_2" name="optionsRadios10"> It's probably not going to rain
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios10_3" name="optionsRadios10"> It's raining now but will probably stop
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios10_4" name="optionsRadios10"> The rain has already stopped 
              </label>
            </div>
        </ol>
        
          
          </div>
              <div class="ln_solid"></div>
              <div class="form-group" style="float: right">
                
                  <button type="submit" class="btn btn-success">Confirm</button>
                
              </div>
          </form>
        </div>

        <div class="clearfix"></div>
      </div>
  </div>
</div>
<!-- /page content -->
@endsection