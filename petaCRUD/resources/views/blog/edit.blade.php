@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Blog</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>
            </div>
            <ul>
                @foreach($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('blog.update', $blogs->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="tile" value="{{ $blogs->title }}">
            </div>
            <div class="col-lg-12">
                <strong>Content:</strong>
                <input type="text" name="content" class="form-control" placeholder="content" value="{{ $blogs->content }}">
            </div>
            <div class="col-lg-12">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image"  value="{{ $blogs->image }}">
            </div>

            <div class="col-lg-12">
                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-danger">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection