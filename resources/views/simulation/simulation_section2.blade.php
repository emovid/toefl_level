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
            <h3>Structure and Written Expression</h3>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-horizontal form-label-left">
        <h4>Questions 1-10 are incomplete sentences. Beneath each sentence you will see four words or phrases that best completes the sentence. Then on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen.</h4>
        <ol>
          <li><h4>George did not do well in the class because___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios1_1" name="optionsRadios1"> He studied bad
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios1_2" name="optionsRadios1"> he was not good studywise
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option3" id="optionsRadios1_3" name="optionsRadios1"> he was a badly student
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios1_4" name="optionsRadios1"> he failed to study properly
              </label>
            </div>
          
            
            <li><h4>This university's programs___those of Harvard. </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios2_1" name="optionsRadios2"> come second after
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios2_2" name="optionsRadios2"> are second only to
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios2_3" name="optionsRadios2"> re first except for
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios2_4" name="optionsRadios2"> are in second place from 
              </label>
            </div>
            

            <li><h4>The more she worked,___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios3_1" name="optionsRadios3"> the less she achieved
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios3_2" name="optionsRadios3"> she achieved not enough
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios3_3" name="optionsRadios3"> she did not achieve enough
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios3_4" name="optionsRadios3"> she was achieving less
              </label>
            </div>

            <li><h4>___ the best car to buy is a Mercedes Benz.</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios4_1" name="optionsRadios4"> Because of its durability and economy
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios4_2" name="optionsRadios4"> Because it last a long time and it is very economical
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios4_3" name="optionsRadios4"> Because of its durability and it is economical
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios4_4" name="optionsRadios4">  Because durability and economywise it is better than all the others
              </label>
            </div>

            <li><h4>When Henry arrived home after a hard day at work,___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios5_1" name="optionsRadios5"> his wife was sleeping
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios5_2" name="optionsRadios5"> his wife slept
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios5_3" name="optionsRadios5"> his wife has slept
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios5_4" name="optionsRadios5"> his wife has been sleeping 
              </label>
            </div>

            <li><h4>He gave___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios6_1" name="optionsRadios6"> to the class a tough assignment
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios6_2" name="optionsRadios6"> the class a tough assignment
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios6_3" name="optionsRadios6"> a tough assignment for the class
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios6_4" name="optionsRadios6"> an assignment very tough to the class
              </label>
            </div>

            <li><h4> People all over the world are starving___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios7_1" name="optionsRadios7"> greater in numbers
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios7_2" name="optionsRadios7"> in more numbers
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios7_3" name="optionsRadios7"> more numerously
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios7_4" name="optionsRadios7"> in greater numbers 
              </label>
            </div>

            <li><h4>It was not until she arrived in class___realized she had forgotten her book .</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios8_1" name="optionsRadios8"> and she
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios8_2" name="optionsRadios8"> when she
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios8_3" name="optionsRadios8">  She
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios8_4" name="optionsRadios8"> that she
              </label>
            </div>

            <li><h4>John has not been able to recall where___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios9_1" name="optionsRadios9"> does she live
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios9_2" name="optionsRadios9"> she lives 
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios9_3" name="optionsRadios9"> did she live
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios9_4" name="optionsRadios9"> lived the girl 
              </label>
            </div>

            <li><h4> Ben would have studied medicine he___to a medical school </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios10_1" name="optionsRadios10"> could be able to enter
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios10_2" name="optionsRadios10"> had been admitted
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios10_3" name="optionsRadios10"> was admitted
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios10_4" name="optionsRadios10"> were admitted 
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