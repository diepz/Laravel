@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h3>Create Book</h3>
            </div>
        </div>

        <form action="{{ route('book.update', $books->id) }}" method="post">
            @csrf
            <div class="col-lg-12">
                <strong>Title:</strong>
                <input type="text" class="form-controller" placeholder="title" value="{{ $books->title }}">
            </div>
            <div class="col-lg-12">
                <strong>Content:</strong>
                <input type="text" class="form-controller" placeholder="content" value="{{ $books->content }}">
            </div>
            <div class="col-lg-12">
                <a href="{{ route('book.index') }}" class="btn btn-sm btn-danger">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection