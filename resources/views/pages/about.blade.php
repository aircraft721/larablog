@extends('main')

@section('title', '| About Page')
@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
    @stop
@section('content')

    <div class="row">
        <div class="col-md-12 new-page">
            <h1>About me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, assumenda atque cumque distinctio dolorem doloribus eligendi hic molestiae molestias natus, neque perferendis porro quasi repellendus reprehenderit repudiandae sunt tempora veniam.</p>
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