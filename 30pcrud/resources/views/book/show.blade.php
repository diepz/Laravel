@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3>List Book</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Title: {{ $books->title }}</strong>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Title: {{ $books->content }}</strong>
            </div>
        </div>
        <a href="{{ route('book.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>

@endsection