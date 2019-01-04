@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h3>List Task</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name: {{ $tasks->name }}</strong>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Birth: {{ $tasks->birth }}</strong>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Image: {{ $tasks->image }}</strong>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Email: {{ $tasks->email }}</strong>
            </div>
        </div>

        <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-primary">Back</a>

    </div>

</div>


@endsection