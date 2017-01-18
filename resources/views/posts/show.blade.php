@extends('main')

@section('title','| View Post')

@section('content')

    @include('partials._hero')

    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to my Blog</h1>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <div class="date-post">JANUARY 16, 2017</div>
                <div class="title-post">{{ $post->title }}</div>

                <img src="{{ asset('images/' . $post->image )}}" alt="">
                {!! $post->body !!}

            </div>


        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ url('blog', $post->slug) }}">{{ url('blog', $post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ strtoupper($post->created_at->toFormattedDateString()) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated At:</dt>
                    <dd>{{ strtoupper($post->created_at->toFormattedDateString()) }}</dd>
                </dl>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}

                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('posts.index') }}" class="btn btn-default btn-block">Back to posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop