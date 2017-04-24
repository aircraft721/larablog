@include('partials._head')
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