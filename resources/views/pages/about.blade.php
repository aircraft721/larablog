@extends('main')

@section('title', '| About Page')
@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">--}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    @stop


@section('content')

    <div class="row" id="flexi">

        <div class="col-md-4">
            <div class="card-panel hoverable small blue1" id="blue">
                <div class="card-panel-header">
                    <span class="card-panel-icon"><i class="material-icons">info</i></span>
                    <span class="card-panel-caption">About Me</span>
                </div>
                <p class="card-panel-content">My name is Dan Constantinescu. I'm a student living in Cluj-Napoca, Romania. Currently I spend my days learning and working in a few areas of web development from back end programming (PHP/Laravel) to front end engineering (HTML, CSS/Sass and JS/Vue.js).</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-panel hoverable small darken-3 blue2" id="blue">
                <div class="card-panel-header">
                    <span class="card-panel-icon"><i class="material-icons">school</i></span>
                    <span class="card-panel-caption">Education</span>
                </div>
                <p class="card-panel-content">I have finished the Faculty of Geography at Babes Bolyai University in Cluj-Napoca and I have a master's degree in Geomatics.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-panel hoverable small blue3" id="blue">
                <div class="card-panel-header">
                    <span class="card-panel-icon"><i class="material-icons">work</i></span></span>
                    <span class="card-panel-caption">Work Experience</span>
                </div>
                <p class="card-panel-content">Until last year (i.e. 2016) my work was focused on creating maps and 3D models after implementing methodologies to detect landslides, inundations or deforestations. I have an advanced knowledge on working with softwares like: ArcGis 10.1, Envi 5, Erdas Imagine 9, Hec-Ras 5, Global Mapper, Idrisi and Hyfran.
                    Now I focus mainly on learning and creating websites using frameworks like Laravel, Vue.js and Sass.
                </p>
            </div>
        </div>

    </div>

@stop

@section('footer')
<footer class="footer navbar-fixed-bottom">
    <ul>
        <li class="sus">SITE CREATED BY DAN CONSTANTINESCU</li>
        <li class="centru"><a href="http://laravel.com"><img class="laravel" src="{{ asset('css/laravel_final.png') }}" alt="laravel logo" /></a>
            <a href="https://git-scm.com/"><img class="laravel" src="{{ asset('css/git2.png') }}" alt="git logo" /></a>
            <a href="https://www.ubuntu.com/"><img class="laravel" src="{{ asset('css/ubuntu2.png') }}" alt="git logo" /></a>
            <a href="http://vultr.com"><img class="laravel" src="{{ asset('css/vultrr.png') }}" alt="vultr hosting logo" /></a>
        </li>

        {{--<li class="an">&#169;2017</li>--}}



    </ul>
    <ul class="jos">
        <li>&#169;All rights reserved</li></ul>
</footer>

    @stop