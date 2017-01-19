@extends('main')

@section('title','| Welcome')

@section('content')

    @include('partials._hero')

    <div class="row">
        <div class="col-md-12">
                <h1>Welcome to my Blog</h1>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
                <div class="date-post">JANUARY 16, 2017</div>
                <h1 class="title-post">{{ $post->title }}</h1>

                <img src="{{ asset('images/' . $post->image )}}" alt="">
                <p>{{ str_limit(strip_tags($post->body),310) }}{{ strlen(strip_tags($post->body))>310 ? '' : '' }}</p>
                <a href="{{ url('blog', $post->slug) }}" class="btn btn-primary btn-sm read-more center-block">Read More</a>
            </div>
            @endforeach

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

            <div>
                @foreach($posts as $post)
                    <ul>
                        <li><a href="">{{ $post->category->name }}</a></li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! $posts->links() !!}
    </div>

@stop

