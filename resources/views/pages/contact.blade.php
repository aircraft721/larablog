@extends('main')

@section('title', '| Contact Page')
@section('stylesheets')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12 new-page">
            <h1>Contact me</h1>
            <span>Hey there! To get in touch, <a href="http://www.facebook.com">send me an email.</a></span>
        </div>
    </div>

@stop