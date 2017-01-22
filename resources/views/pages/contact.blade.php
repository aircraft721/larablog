@extends('main')

@section('title', '| Contact Page')
@section('stylesheets')

    <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('after-content')

    <div id="flexi">
        <a href="https://www.facebook.com/dan.constantinescu.9" class="box" id="facebook"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        <a href="https://github.com/aircraft721" class="box" id="github"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
        <a href="https://ro.linkedin.com/in/dan-constantinescu-3708b9116
" class="box" id="linkedin"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
        <a href="mailto:dan_constantinescu@outlook.com" class="box" id="outlook"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
    </div>

@stop

@section('footer')
<footer class="footer navbar-fixed-bottom">
    <ul>
        <li>SITE CREATED BY DAN CONSTANTINESCU</li>


        <li><a href="http://laravel.com"><img class="laravel" src="{{ asset('css/laravel_final.png') }}" alt="laravel logo" /></a>
            <a href="https://git-scm.com/"><img class="laravel" src="{{ asset('css/git2.png') }}" alt="git logo" /></a>
            <a href="https://www.ubuntu.com/"><img class="laravel" src="{{ asset('css/ubuntu2.png') }}" alt="git logo" /></a>
            <a href="http://vultr.com"><img class="laravel" src="{{ asset('css/vultrr.png') }}" alt="vultr hosting logo" /></a>
        </li>

        <li class="ans">&#169;All rights reserved</li>


    </ul>
</footer>

    @stop