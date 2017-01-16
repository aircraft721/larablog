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
                <div class="tags-post">Tags/Tags</div>
                <img src="css/witcher.png" alt="">
                <p>{{ $post->body }}</p>
                <div class="btn btn-primary btn-sm read-more center-block">Read More</div>
            </div>


        </div>

        <div class="col-md-4">
            <div class="well">
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
                        {!! Html::linkRoute('posts.destroy','Delete', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop