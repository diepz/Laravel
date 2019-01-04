@extends('welcome')
@section('title','Cập nhật Blog')
    @section('content')
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Cập nhật Blog</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="">
                        @csrf
                        <input type="hidden" name="id" value="<?php echo $blogs->id; ?>"/>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $blogs->title; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control"><?php echo $blogs->content; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Created</label>
                            <input type="date" name="created" value="<?php echo $blogs->due_date;?>" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>z
        </div>
        @endsection