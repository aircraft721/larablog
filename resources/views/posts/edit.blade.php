@extends('main')

@section('title','| View Post')

@section('content')

    @include('partials._hero')



    <div class="row">
        {!! Form::model($post, array('route'=>['posts.update', $post->id], 'method'=>'PUT')) !!}
        <div class="col-md-8">
            <div class="post">
                <div class="date-post">{{ strtoupper($post->created_at->toFormattedDateString()) }}</div>
                {{ Form::label('title','Title:') }}
                <div class="title-post">{{ Form::text('title', null, ['class'=>'form-control']) }}</div>
                {{ Form::label('slug','Slug:') }}
                <div class="tags-post">{{ Form::text('slug', null, ['class'=>'form-control']) }}</div>
                {{ Form::label('tags','Tags:') }}
                <div class="tags-post">Tags/Tags</div>
                <img src="css/witcher.png" alt="">
                {{ Form::label('body','Body:') }}
                <p>{{ Form::textarea('body',null, ['class'=>'form-control']) }}</p>

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
                        {!! Html::linkRoute('posts.show','Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop