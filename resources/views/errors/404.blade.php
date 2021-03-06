<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Blog</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
    {!! Html::style('css/parsley.css') !!}
        <link href="{{ asset('css/error.css') }}" rel="stylesheet" type="text/css">
    @section('stylesheets')

    @stop

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
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
                                <li class="meniu"><a href="/">Home</a></li>
                                <li class="meniu"><a href="/about">About</a></li>
                                <li class="meniu"><a href="/contact">Contact</a></li>
                                <li class="social-media"><a href="https://www.facebook.com/dan.constantinescu.9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-media"><a href="https://github.com/aircraft721"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                <li class="social-media"><a href="/auth/login"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </div>
    </div>
</div>

<section>
    <div class="code-area">
      <span style="color: #777;font-style:italic;">
        // 404 page not found.
      </span>
      <span>
        <span style="color:#d65562;">
          if
        </span>
          (<span style="color:#4ca8ef;">!</span><span style="font-style: italic;color:#bdbdbd;">found</span>)
        {
      </span>
      <span>
        <span style="padding-left: 15px;color:#2796ec">
           <i style="width: 10px;display:inline-block"></i>throw
        </span>
        <span>
          (<span style="color: #a6a61f">"(╯°□°)╯︵ ┻━┻"</span>);
        </span>
          <span style="display:block">}</span>
      </span>
    </div>
</section>

</body>
</html>