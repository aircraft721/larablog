@extends('main')

@section('title','| $post->title')

@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
    @stop

@section('content')

<div class="row">
    <div class="col-md-8">

            <div class="post">
                <div class="date-post">JANUARY 16, 2017</div>
                <div class="title-post">{{ $post->title }}</div>
                <div class="tags-post">Tags/Tags</div>
                <img src="css/witcher.png" alt="">
                <p>{{ $post->body }}</p>

            </div>


    </div>

    <div class="col-md-3 col-md-offset-1">
        <aside class="aside-about">
            <div class="about-image">
                <img src="https://scontent.fomr1-1.fna.fbcdn.net/v/t1.0-9/11899774_920258304686774_1487613498998042374_n.jpg?oh=797ff8c431357f07b863c5f8fa11f9ca&oe=590DD683" alt="about the author" height="150" width="150">
            </div>

            <h2 class="about-title">Who I am</h2>

            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid blanditiis dolore earum eligendi error ex itaque laboriosam laborum nam officia omnis quas quis.?</p>
            </div>
        </aside>
    </div>
</div>

    @stop