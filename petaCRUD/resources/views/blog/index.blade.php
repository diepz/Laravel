@extends('layouts.app')

@section('content')

    <form action="{{ route('blog.search')}}" method="get">
        <a class="delete is-large" href="{{route('blog.index')}}" style="margin: 1px 90%;"></a>
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords" name="keyword">
                            </div>
                            <!--end of col-->
                            <!--end of col-->
                        </div>
                    </form>
                </div>

                <!--end of col-->
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List Book</h3>
            </div>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('blog.create') }}" class="btn btn-sm btn-success" style="margin: 0 60rem;">Create New
                Book</a>
        </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-hover table-responsive-sm">
            <tr>
                <th width="50px"><b>No.</b></th>
                <th width="200px">Title</th>
                <th width="200px">Content</th>
                <th width="200px">Image</th>
                <th width="180px">Action</th>
            </tr>

            @foreach($blogs as $blog)
                <tr>
                    <td><b>{{ ++$i }}</b></td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->image }}</td>
                    <td>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                        <a href="{{ route('blog.show' , $blog->id) }}" class="btn btn-success">show</a>
                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>



                    </td>
                </tr>
            @endforeach
        </table>
        {{ $blogs->links() }}
    </div>


@endsection