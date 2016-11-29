@extends('layouts.start')

@section('side.content')
<h3>Course</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-pencil"></i> Structure <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Sylabus 1<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level One</a>
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
                    <h3>Writing I <small>Level One</small></h3>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <p>This is content</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Semi Content</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <p>Semi Content</p>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div>
@endsection