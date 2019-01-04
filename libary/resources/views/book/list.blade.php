@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>content</th>
                <th>descviption</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $key => $book)
            <tr>

                <td>{{ ++$key }}</td>
                <td>{{ $book->title  }}</td>
                <td> {{ $book->content  }}</td>
                <td> {{ $book->descviption  }}</td>
                <td> {{ $book->Image  }}</td>
                <td><a href="{{ route('book.edit', $book->id) }}">repair</a>
                    <a href="{{ route('book.destroy', $book->id) }}" onclick="return confirm('anfjanjf')">delete</a>
                </td>


            </tr>
            @endforeach
            </tbody>


        </table>
        <a href="{{ route('book.create') }}" class="btn btn-info" role="button">ADD NEW</a>

    </div>
@endsection
