@extends('welcome')
@section('title', 'List Student')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th><abbr title="Played">Name</abbr></th>
            <th><abbr title="Won">Age</abbr></th>
            <th><abbr title="Won">Image</abbr></th>
            <th><abbr title="Won">Action</abbr></th>
        </tr>
        </thead>
        @foreach($students as $student)
            <tbody>
            <tr class="is-selected">
                <th></th>
                <th>{{ $student->name }}</th>
                <th>{{ $student->age }}</th>
                <th>{{ $student->image }}</th>
                <th><a href="{{ route('students.show', $student->id) }}" class="btn btn-xs btn-info">SHOW</a>
                <th><a href="{{ route('students.edit', $student->id) }}" class="btn btn-xs btn-primary">EDIT</a>
                <th><a href="{{ route('students.show', $student->id) }}" class="btn btn-xs btn-primary">DELETE</a>
                </th>
            </tr>
            </tbody>
        @endforeach
    </table>
    <div class="row">
        <div class="col-lg-12">
            <div class="bull-right">
                <a href="{{ route('students.create') }}" class="btn btn-xs btn-success">Create</a>
            </div>
        </div>
    </div>

@endsection