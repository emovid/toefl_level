<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('resources/assets/ico/favicon.ico') }}">

    <title>TOEFL Level</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    @yield('head.style')

    @yield('head.script')
  </head>

  <body>

 @section('navbar')
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/home') }}">TOEFL Level</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">LOGIN</a></li>
                <li><a href="{{ url('/register') }}">REGISTER</a></li>
            @else
                <li><a href="{{ url('/home') }}">LEARN</a></li>
                <li><a href="{{ url('/catalog') }}">CATALOG</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;"><span>Settings</span></a>
                    </li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            @endif
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
@show

    <!-- *****************************************************************************************************************
     MAIN CONTENT
     ***************************************************************************************************************** -->
    
    @yield('content')
    

<!-- *****************************************************************************************************************
     FOOTER
     ***************************************************************************************************************** -->
     <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                    <img src="assets/img/logo.png">
                    <h4>More About Us</h4>
                    <p class="share">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </p>
                </div>
                <div class="col-lg-3">
                    <h4>About Us</h4>
                    <div class="hline-w"></div>
                    <p><a href="{{ url('/about') }}">Our Team</a></p>
                </div>

                <div class="col-lg-3">
                    <h4>Contact Us</h4>
                    <div class="hline-w"></div>
                    <p>
                        (0274)6482691 <br/>
                        Jalan Grafika 1 Yogyakarta<br/>
                        Teknik Elektro dan Teknologi Informasi UGM.<br/>
                    </p>
                </div>
            </div>
        </div>
     </div>

     <div id="copyright" class="container-fluid">
        <div class="row">
        <h5>Made in Yogyakarta &copy 2016 TOEFL Level</h5>
        </div>
     </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/retina-1.1.0.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.hoverex.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>


    <script>
// Portfolio
(function($) {
    "use strict";
    var $container = $('.portfolio'),
        $items = $container.find('.portfolio-item'),
        portfolioLayout = 'fitRows';
        
        if( $container.hasClass('portfolio-centered') ) {
            portfolioLayout = 'masonry';
        }
                
        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        },
        masonry: {
        }
        }, refreshWaypoints());
        
        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);   
        }
                
        $('nav.portfolio-filter ul a').on('click', function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector }, refreshWaypoints());
                $('nav.portfolio-filter ul a').removeClass('active');
                $(this).addClass('active');
                return false;
        });
        
        function getColumnNumber() { 
            var winWidth = $(window).width(), 
            columnNumber = 1;
        
            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
                return columnNumber;
            }       
            
            function setColumns() {
                var winWidth = $(window).width(), 
                columnNumber = getColumnNumber(), 
                itemWidth = Math.floor(winWidth / columnNumber);
                
                $container.find('.portfolio-item').each(function() { 
                    $(this).css( { 
                    width : itemWidth + 'px' 
                });
            });
        }
        
        function setPortfolio() { 
            setColumns();
            $container.isotope('reLayout');
        }
            
        $container.imagesLoaded(function () { 
            setPortfolio();
        });
        
        $(window).on('resize', function () { 
        setPortfolio();          
    });
})(jQuery);
</script>
    @yield('body.script')
  </body>
</html>
