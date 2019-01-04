@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Blog Show</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Title: </strong> {{ $blogs->title }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Content: </strong> {{ $blogs->content }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                        <strong>Image: </strong> {{ $blogs->image }}

                </div>
            </div>
            <div class="col-md-12">
                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>

        </div>
    </div>
@endsection