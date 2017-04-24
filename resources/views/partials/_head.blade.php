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
    <title>Laravel Blog @yield('title')</title>

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