@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List news feed</h3>
            </div>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('news.create') }}" class="btn btn-sm btn-success">Create New Task</a>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-responsive-sm">
        <tr>
            <th width="50px">List</th>
            <th width="200px">Title</th>
            <th width="200px">Content</th>
            <th width="180px">Image</th>
        </tr>

    </table>



@endsection