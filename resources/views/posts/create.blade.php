@extends('main')
@section('title','| Create New Post')

@section('stylesheets')
    {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea'
        });
    </script>--}}
    @stop

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'', 'files'=> true]) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title', null, array('class'=>'form-control','required'=>'','maxlength'=>'100')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug',null,array('class'=>'form-control', 'required'=>'', 'minlength'=>'5','maxlength'=>'255')) }}

                {{ Form::label('category_id','Category:') }}
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                </select>

                {{ Form::label('featured_image','Upload image:') }}
                {{ Form::file('featured_image') }}

                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, array('class'=>'form-control')) }}

                {{ Form::submit('Create Post', array('class'=>'btn btn-success')) }}
            {!! Form::close() !!}
        </div>
    </div>

@stop




