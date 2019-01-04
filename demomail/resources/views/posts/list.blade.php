@extends('home')

<a class="navbar-brand">My Blog</a>

<div class="col-6">
    <p>
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create new post</a>
    </p>
</div>
<div class="col-6">
    <form class="navbar-form navbar-right" action="" method="get">
        @csrf
        <div class="row">


        </div>
    </form>
</div>
<ul>
    @if(count($posts) == 0)
        <tr>
            <td colspan="7" class="text-center">Không có dữ liệu</td>
        </tr>
    @else
        <?php foreach ($posts as $post): ?>
        <li>
           p        </li>
        <?php endforeach; ?>
    @endif
</ul>
<div class="col-12">
    <div class="row">
        <div class="col-6">
            <div class="pagination float-right">
                {{ $posts->appends(request()->query()) }}
            </div>
        </div>
    </div>
</div>
</div>
