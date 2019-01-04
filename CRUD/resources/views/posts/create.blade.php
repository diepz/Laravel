@extends('posts.master')
@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
    <div class="row">
        <div class="col-1g-12">
            <div class="pull-left">
                <h3>Add new Post</h3>
            </div>
        </div>
    </div>

    @if(count($errors) >0)
            <div class="alert alert-danger">
                <strong>Whooopss!! </strong>@ABCADNJANDJNJ.<br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
    @endif

    @include('posts.form')
    </form>
    @endsection