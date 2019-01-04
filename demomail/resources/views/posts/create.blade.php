@extends('home')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Create new post</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Birth</label>
                    <textarea name="teaser" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>