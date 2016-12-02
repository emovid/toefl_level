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
            <h3>Reading Comprehensionn</h3>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-horizontal form-label-left">
        <h4>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For questions 1-10, choose the one best answer to each question. Answer all questions following a passage on the basis of what is stated or implied in that passage.</h4>
      </br>
        <h4>The First Amandement to the American Constitution declares freedom of the press to all people. Although this right was not officially adopted until 1791, the famous Zenger trial of 1735 laid the groundwork for insuring this precious freedom. 
        John Peter Zenger emigrated as a teenager feom Germany. In 1733, he begam pubkishing the New York Weekly Journal. The following year, he was arrested for writing a story about the crown-appointed governor of New York. While Zenger was imprisoned for nine months, his wife dutifully published the newspaper every day, bravely telling the truth about the corrupt goverment officials sent by the king to govern the colonies. 
        Finally Zenger's long-awaited trial took place. The hostile judge dismissed Zenger's local lawyers, making it necessary for his wife to seeo out Andrew Hamilton, a prominent Philadelphia lawyer. Persuaded by Hamiltor the jury bravely returned a not-guilty verdict, defying the judge's orders for a conviction. 
        As a result of determination and bravery on the part of the colonists, a lasting victory for freedom of the press was gained by a young immigrant. </h4>
        <ol>
          <li><h4>John Peter Zenger was a___</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios1_1" name="optionsRadios1"> corrupt governor of New York
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios1_2" name="optionsRadios1"> famous lawyer
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option3" id="optionsRadios1_3" name="optionsRadios1"> brave newspaper publisher
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios1_4" name="optionsRadios1"> hostile judge
              </label>
            </div>
          
            
            <li><h4> What political problem existed in the colonies at that time? </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios2_1" name="optionsRadios2"> Government officials were corrupt
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios2_2" name="optionsRadios2"> Newspapers exaggerated the truth about the political officials
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios2_3" name="optionsRadios2"> Lawyers were hostile to witnesses
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios2_4" name="optionsRadios2"> All newspaler publishers were imprisoned
              </label>
            </div>
            

            <li><h4> How long did it take after the Zenger trial before the concept of freedom of the press was officially adopted? </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios3_1" name="optionsRadios3"> 9 months
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios3_2" name="optionsRadios3"> 1 year
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios3_3" name="optionsRadios3"> 56 years
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios3_4" name="optionsRadios3"> 58 years
              </label>
            </div>

            <li><h4> All of the following are true EXCEPT </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios4_1" name="optionsRadios4"> despite Zenger's imprisonment, his newspaper continued to be published
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios4_2" name="optionsRadios4"> Andrew Hamilton encouraged the jury to fight for freedom
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios4_3" name="optionsRadios4"> the Jury obeyed tge judge's orders and convicted Zenger
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios4_4" name="optionsRadios4">  the king controlled the colonies through his own appointed rulers
              </label>
            </div>

            <li><h4> Why was Peter Zenger arrested? </h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios5_1" name="optionsRadios5"> He emigrated from Germany
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios5_2" name="optionsRadios5"> His wife published his newspaper from him
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios5_3" name="optionsRadios5"> He wrote a story about the governor of New York
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios5_4" name="optionsRadios5"> He persuaded a jury to defy the judge's orders
              </label>
            </div>

            <li><h4> It can be inferred that the judge was hostile toward Peter Zenger because the judge</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios6_1" name="optionsRadios6"> represented the ideas of the king
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios6_2" name="optionsRadios6"> hated newspaper publishers
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios6_3" name="optionsRadios6"> didn't like interference with the Constitution
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios6_4" name="optionsRadios6"> had appointed the governor about whom Zenger wrote
              </label>
            </div>

            <li><h4> The word "defying"  in line XX is closest in meaning to</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios7_1" name="optionsRadios7"> altering
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios7_2" name="optionsRadios7"> defecting
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios7_3" name="optionsRadios7"> disregarding
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios7_4" name="optionsRadios7"> defending
              </label>
            </div>

            <li><h4> In line 11, the wird "dutyfully" is closest in meaning to</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios8_1" name="optionsRadios8"> faithfully
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios8_2" name="optionsRadios8"> carelessly
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios8_3" name="optionsRadios8">  unfortunately
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios8_4" name="optionsRadios8"> vigorously
              </label>
            </div>

            <li><h4> The main idea of this passage is</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios9_1" name="optionsRadios9"> Andrew Hamilton gave Americans freedom of the press
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios9_2" name="optionsRadios9"> Peter Zenger's persistent fight paved the way for freedom of the press
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios9_3" name="optionsRadios9"> judges don't always get juries to agree with them
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios9_4" name="optionsRadios9"> Peter Zenger's trial prepared the way for jurors to defy judge's orders
              </label>
            </div>

            <li><h4> The passage indicates that the governor was appointed by the monarch of another country in lines</h4> </li>
            <div class="form-group" >
            <div class="radio">
              <label>
                <input type="radio"  value="option1" id="optionsRadios10_1" name="optionsRadios10"> 3-5
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option2" id="optionsRadios10_2" name="optionsRadios10"> 6-8
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  value="option3" id="optionsRadios10_3" name="optionsRadios10"> 8-9
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" value="option4" id="optionsRadios10_4" name="optionsRadios10"> 14-16
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