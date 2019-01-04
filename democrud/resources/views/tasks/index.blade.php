@extends('layouts.app')
@section('content')
    @can('permission', 'user')

    @endcan

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Task List</h3>
            </div>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-success">Create New Task</a>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive-sm">
        <tr>
            <th width="50px">No.</th>
            <th width="200px">Name</th>
            <th width="200px">Birth</th>
            <th width="200px">Image</th>
            <th width="180px">email</th>
            <th width="180px">Action</th>
        </tr>

        @foreach($tasks as $task)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->birth }}</td>
                <td>{{ $task->image }}</td>
                <td>{{ $task->email }}</td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-warning">Show</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection