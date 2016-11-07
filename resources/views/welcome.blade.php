@extends('layouts.app')

@section('content')
<!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Improve Your English Skill for Free.</h1>           
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/img/toefl_people.png">
                </div>
                <div class="col-sm-6">
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <h4>SIGN UP AND UPGRADE YOUR TOEFL SCORE</h4>
                    <form class="form-horizontal register" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <input type="text" class="form-control input-lg{{ $errors->has('name') ? ' has-error' : '' }}" id="name" placeholder="Full Name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      <input type="text" class="form-control input-lg{{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      <input type="password" class="form-control input-lg{{ $errors->has('password') ? ' has-error' : '' }}" id="password" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                       <input type="password" class="form-control input-lg{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" id="password-confirm" type="password" name="password" placeholder="Password Confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif 
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-theme btn-lg btn-block">SINGUP</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger col-md-5"><i class="fa fa fa-google-plus"></i>&nbspGOOGLE</button>
                        <button type="button" class="btn btn-primary col-md-5 col-md-offset-2"><i class="fa fa-facebook-square"></i>&nbspFACEBOOK</button>
                    </div>
                  </form>
                </div>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /headerwrap -->

        <!-- *****************************************************************************************************************
     STORIES SECTION
     ***************************************************************************************************************** -->
     <div id="stories">
        <div class="container text-center">
            <div class="row centered">
            <h2>Their Stories</h2>
                <div class="people col-md-4 text-center">
                <div class="inside">
                    <img class="img-responsive img-circle" src="assets/img/imad.png" alt="doni">
                    <h4>Doni Van Haylem</h4>
                    <i class="fa fa-trophy"><span>&nbsp TOEFL 550</span></i>
                    <p>Alhamdulillah keterima LPDP. Course di Toefl Level emang keren abis, nggak ada duanya!</p>
                </div>
                </div>
                <div class="people col-md-4">
                <div class="inside">
                    <img class="img-responsive img-circle" src="assets/img/team01.jpg" alt="lorenzo">           
                    <h4>Valentino Lorenzo</h4>
                    <i class="fa fa-trophy"><span>&nbsp TOEFL 573</span></i>
                    <p>Katanya belajar Teofl musti mahal? Menurut gue yang penting niat Toefl Level jalannya.</p>
                    </div>
                </div>
                <div class="people col-md-4">
                <div class="inside">
                    <img class="img-responsive img-circle" src="assets/img/team03.jpg" alt="laila">
                    <h4>Laila Istiqomah</h4>
                    <i class="fa fa-trophy"><span>&nbsp TOEFL 610</span></i>
                    <p>Toefl Level jadi solusi buat saya untuk meningkatkan Toefl secara cepat, mudah, dan murah!</p>
                    </div>
                </div>
                <p><a href="{{ url('/stories') }}">Read more stories</a></p>
            </div>                  
        </div><!--/container -->
     </div><!--/stories -->

     <!-- *****************************************************************************************************************
     COURSE SECTION
     ***************************************************************************************************************** -->
        <div class="container-fluid badge-theme" id="course">
                <div class="row text-center">
                    <div class="course col-md-6">
                        <div class="he-wrap tpl6">
                        <a href="{{ url('/reading') }}">
                        <img src="assets/img/body_reading.jpg" alt="reading book">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown">Reading</h3>
                                    <p></p>
                                </div><!-- he bg -->
                            </div><!-- he view -->
                        </a>            
                        </div><!-- he wrap -->
                    </div>
                    <div class="course col-md-6">
                        <div class="he-wrap tpl6">
                        <a href="{{ url('/writing') }}">
                        <img src="assets/img/writing.jpg" alt="writing">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown">Writing</h3>
                                    <p></p>
                                </div><!-- he bg -->
                            </div><!-- he view -->
                        </a>            
                        </div><!-- he wrap -->
                    </div>
                </div>
                <div class="row text-center">
                    <div class="course col-md-6">
                        <div class="he-wrap tpl6">
                        <a href="{{ url('/listening') }}">
                        <img src="assets/img/listening_2.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown">Listening</h3>
                                    <p></p>
                                </div><!-- he bg -->
                            </div><!-- he view -->
                        </a>            
                        </div><!-- he wrap -->
                    </div>
                    <div class="course col-md-6">
                        <div class="he-wrap tpl6">
                        <a href="{{ url('/speaking') }}">
                        <img src="assets/img/speaking_2.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown">Speaking</h3>
                                    <p></p>
                                </div><!-- he bg -->
                            </div><!-- he view -->
                        </a>            
                        </div><!-- he wrap -->
                    </div>
                </div>
        </div>
@endsection
