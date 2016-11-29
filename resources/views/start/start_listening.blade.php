@extends('layouts.start')

@section('side.content')
<h3>Course</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-comment-o"></i> Listening <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Sylabus 1<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="test2.html">Level One</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Three</a>
                          </li>
                        </ul>
                      </li>
                      <li><a>Sylabus 2<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level One</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Three</a>
                          </li>
                        </ul>
                      </li>
                      <li><a>Sylabus 3<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level One</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Three</a>
                          </li>
                        </ul>
                      </li>                      
                    </ul>
                  </li>
              </div>

              <div class="menu_section">
                <h3>Quiz</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/simulation') }}"><i class="fa fa-bug"></i> Toefl Simulation</a></li>
                  <li><a><i class="fa fa-sitemap"></i> Forum Discussion <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>
@endsection

@section('content')
             <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Introduction</small></h3>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <p>The Listening Comprehension Section is always first in the examination and it is in three parts. It typically lasts 30 to 35 minutes and contains 50 questions.</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Ability Tested</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <p>This section tests your ability to understand and interpret spoken English.</p>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Basic Skills Necessary</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <p>It is necessary to have a good "ear" for ENglish, which can only be obtained with a great deal of practice. You must be able to distinguish between words that sound similar and be able to comprehend entire sentences, not just single words or phrases. Notetaking, underlining, and crossing out in the test book are not allowed. You must be able to listen only and then choose your answer.</p>
                  </div>
                </div>
                <div style="float: right">
                  <p><br/><a href="{{ url('#') }}" class="btn btn-theme">Next</a></p>
                </div>
                <div class="clearfix"></div>
              </div>
@endsection