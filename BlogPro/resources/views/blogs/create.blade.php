@extends('welcome')
@section('title','Create new post')
    @section('content')
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Create new post</h1>
                </div>
                <div class="col-12">

              <form method="post" action="{{route('blogs.store')}}">
                        @csrf

                        <div class="form-group">
                            <label>Created</label>
                            <input type="date" name="due_date" class="form-control" value='{{ date("Y-m-d") }}'/>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                       <input type="text" name="title" class="form-control @if($errors->has('title')) is-invalid @endif"/>
                            @if($errors->has('title') )
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endiftitle
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control @if($errors->has('content')) is-invalid @endif"></textarea>
                            @if($errors->has('content') )
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection