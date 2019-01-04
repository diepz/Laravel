@extends('welcome')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List Book</h3>
            </div>
        </div>
        <div class="col-sm-2">
            <a href="{{route('book.create')}}" class="btn btn-sm btn-success">Create New</a>
        </div>
    </div>

    @if($messages = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $messages }}</p>
        </div>
    @endif


    <table class="table table-hover table-responsive-sm">
        <tr>
            <th width="50px">No.</th>
            <th width="200px">Tittle</th>
            <th width="200px">Content</th>
            <th width="200px">Action</th>
        </tr>
        @foreach($books as $book)
        <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->content }}</td>
        <td>
        <a href="{{ route('book.show', $book->id) }}" class="btn btn-sm btn-warning">Show</a>
        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-success">Edit</a>
        <a href="{{ route('book.destroy' , $book->id) }}" class="btn btn-sm btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
    </table>



@endsection