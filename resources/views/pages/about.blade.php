@extends('main')

@section('title', '| About Page')
@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
    @stop
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>About me</h1>
            <p>Hello. My name is Dan Constantinescu and I currently live in Cluj-Napoca, Romania. I have finished the Faculty of Geography at
                Babes Bolyai University and I have a master's degree in Geomatics.</p>
            <p>Until last year (i.e. 2016) my work was focused on creating maps and 3d models after implementing methodologies to detect landslides, inundations or
                deforestation. I have an advanced knowledge on working with softwares like:
                ArcGis 10.1, Envi 5, Erdas Imagine 9, Hec-Ras 5, Global Mapper, Idrisi and Hyfran.</p>
            <p>Last year (i.e. 2016) I started to learn the basics of Web Development (HTML, CSS, JS, PHP).
                Now I focus mainly on learning and creating websites using frameworks like
                Laravel, Vue.js and Sass. </p>
            <p>P.S This website will be used only for testing purposes.</p>
        </div>
    </div>
@stop

<footer class="footer navbar-fixed-bottom">
    <ul>
        <li>SITE CREATED BY DAN CONSTANTINESCU</li>


        <li><a href="http://laravel.com"><img class="laravel" src="{{ asset('css/laravel_final.png') }}" alt="laravel logo" /></a>
            <a href="https://git-scm.com/"><img class="laravel" src="{{ asset('css/git2.png') }}" alt="git logo" /></a>
            <a href="https://www.ubuntu.com/"><img class="laravel" src="{{ asset('css/ubuntu2.png') }}" alt="git logo" /></a>
            <a href="http://vultr.com"><img class="laravel" src="{{ asset('css/vultrr.png') }}" alt="vultr hosting logo" /></a>
        </li>

        <li class="an">&#169;2017</li>
        <span class="ans">Contact me at: <i class="fa fa-envelope" aria-hidden="true"></i></span>

    </ul>
</footer>