@extends('welcome')
@section('title','My blog')
    @section('content')
        <a class="navbar-brand">My Blog</a>
        <p>
            <a href="{{route('blogs.index')}}" class="btn btn-default">Return to posts</a>

        </p>
<div>
    {{ $customers->links()}}
</div>
@foreach($blogs as $blog)
        <h1>{{ $blog->due_date }}</h1>
        <p>{{ $blog->title }}</p>
        <p>{{ $blog->content }}</p>

@endforeach

        @endsection