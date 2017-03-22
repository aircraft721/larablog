<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="PGGWOSRnGIKQhNS8sH-EAcOB6FrWaCL5bF8rFZqsRCc" />
    <meta name="google-site-verification" content="54XzIw3Kjzv68FarQnDUtk9CUcyDSWTzo6vsf1dHhP0" />
    <link rel="shortcut icon" href="http://i.imgur.com/7xSLAT4.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dan Constantinescu first website</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
    {!! Html::style('css/parsley.css') !!}

@yield('stylesheets')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="page-wrapper">
<div class="container container1">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default navbar-fixed-top navi">
                <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header" id="navos">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/"><img class="navbar-brand" src="{{ asset('css/burial.png') }}"  /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">


                        </ul>

                        <ul class="nav navbar-nav navbar-right navi1">
                            <li id="meniu"><a href="/">HOME</a></li>
                            <li id="meniu"><a href="/about">ABOUT</a></li>
                            <li id="meniu"><a href="/contact">CONTACT</a></li>
                           {{-- <li class="social-media"><a href="https://www.facebook.com/dan.constantinescu.9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-media"><a href="https://github.com/aircraft721"><i class="fa fa-github" aria-hidden="true"></i></a></li>--}}
                            <li id="meniu"><a href="/auth/login"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </div>
            </nav>
        </div>
    </div>
</div>


    @yield('hero-image')



<div class="container">
    @include('partials._messages')
    @yield('content')




</div>

@yield('after-content')
</div>
@yield('footer')







<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{!! Html::script('js/SmoothScroll.js') !!}
{!! Html::script('js/analytics.js') !!}
{!! Html::script('js/parsley.min.js') !!}
@yield('script')

</body>
</html>