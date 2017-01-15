@extends('main')
@section('title','| Create New Post')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            {!! Form::open(['route' => 'posts.store']) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title', null, array('class'=>'form-control')) }}

                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, array('class'=>'form-control')) }}

                {{ Form::submit('Create Post', array('class'=>'btn btn-success')) }}
            {!! Form::close() !!}
        </div>
    </div>

@stop