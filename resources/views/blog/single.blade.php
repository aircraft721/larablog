@extends('main')

@section('title','| $post->title')

@section('stylesheets')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/single.css') }}" rel="stylesheet" type="text/css">
    @stop

@section('content')

<div class="row">
    <div class="col-md-8">

            <div class="post">
                <div class="date-post">JANUARY 16, 2017</div>
                <h1 class="title-post">{{ $post->title }}</h1>

                <img src="{{ asset('images/' . $post->image )}}" alt="">
                <p>{!! $post->body !!}</p>
            </div>

        <div id="disqus_thread"></div>
        <script>

            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

            var disqus_config = function () {
                this.page.url = www.blogf.dev;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = aircraft72; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//aircraft72.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


    </div>

    <div class="col-md-3 col-md-offset-1">
        <aside class="aside-about">
            {{--<div class="about-image">
                <img src="https://scontent.fomr1-1.fna.fbcdn.net/v/t1.0-9/11899774_920258304686774_1487613498998042374_n.jpg?oh=797ff8c431357f07b863c5f8fa11f9ca&oe=590DD683" alt="about the author" height="150" width="150">
            </div>

            <h2 class="about-title">Who I am</h2>

            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid blanditiis dolore earum eligendi error ex itaque laboriosam laborum nam officia omnis quas quis.?</p>--}}

            <div id="second">
                <h2 class="categories-title">Categories</h2>
                <div class="categories">

                    @foreach($categories as $category)
                        <ul>
                            <li><a href="{{ url('filter' . '/' . $category->id ) }}">{{ $category->name }}</a></li>
                        </ul>
                    @endforeach
                </div>
            </div>

            <div id="third">
                <h2 class="categories-title">Latest Posts</h2>
                <div class="categories">
                    @foreach($latest as $late)
                        <ul>

                            <li><a href="{{ url('blog' . '/' . $late->slug) }}">{{ $late->title }}</a></li>


                        </ul>
                    @endforeach

                </div>
            </div>


        </aside>
    </div>
</div>

@stop

@section('footer')
    @include('partials._footer')
@stop

