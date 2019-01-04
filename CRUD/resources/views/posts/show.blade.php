@extends('posts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Show Post</h3>
                <a href="{{ route('posts.index') }}" class="btn btn-xs btn-primary ">BACK</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>Title: </h3>
                {{ $posts->title }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>Body: </h3>
                {{ $posts->body }}
            </div>
        </div>
    </div>
    @endsection