@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h3>Create List</h3>
            </div>
        </div>

        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div class="col-lg-12">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col-lg-12">
                <strong>Birth:</strong>
                <input type="text" name="birth" class="form-control" placeholder="birth">
            </div>
            <div class="col-lg-12">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
            <div class="col-lg-12">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="col-lg-12">
                <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-danger">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection