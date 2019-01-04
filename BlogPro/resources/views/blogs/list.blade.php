@extends('welcome')
@section('title','Blog pro')
    @section('content')
        <a class="navbar-brand">My Blog</a>

        {{--<p>--}}
{{--            <a href="{{route('blogs.create')}}" class="btn btn-primary">Create new post</a>--}}
        {{--</p>--}}
        {{ $blogs->links()}}
        <hr>
        <ul>
            <?php foreach ($blogs as $blog): ?>

            <li>
                <h1>{{ $blog->due_date }}</h1>
                <h2><a href="{{route('blogs.view', $blog->id)}}">{{ $blog->title }}</a></h2>
                <span>{{ $blog->content }}</span>
                <br>
                <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-primary btn-sm">Update</a>
                <a href="{{route('blogs.destroy', $blog->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>

            </li>

            <?php endforeach; ?>'blogs.edit', $blog->id)}}" class="btn btn-primary btn-sm">Update</a>
                <a href="{{route('blogs.destroy', $blog->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>

        </ul>
<hr><button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

    @endsection