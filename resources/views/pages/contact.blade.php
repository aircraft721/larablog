@extends('main')

@section('title', '| Contact Page')
@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12 new-page">
            <h1>Contact me</h1>
            <span>Hey there! To get in touch, <a href="mailto:dan_constantinescu@outlook.com">send me an email.</a></span>
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