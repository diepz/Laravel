@extends('posts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Diep Z</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
            <a href="{{ route('posts.create') }}" class="btn btn-xs btn-success">Create New</a>
            </div>
        </div>
    </div>

@if($message = Session::get('succes'))
    <div class="alert alert-succes">
        <p>{{ $message }}</p>
    </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Body</th>
        <th width="300px">Actions</th>
    </tr>

    @foreach($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-xs btn-info">SHOW</a>
                <a href="{{ route('posts.update', $post->id) }}" class="btn btn-xs btn-primary">EDIT</a>
                <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-xs btn-primary">DELETE</a>

                {{--{!! From::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'style' => 'display:inline'])  !!}--}}
                {{--{!! From::submit('Delete', ['class' => 'btn btn-xs btn-danger'])  !!}--}}
                {{--{!! From::close()!!}--}}
            </td>
        </tr>
        @endforeach
</table>

    {!! $posts->links() !!}
    @endsection