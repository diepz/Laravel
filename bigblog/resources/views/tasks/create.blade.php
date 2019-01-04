@extends('home')
@section('title', 'BlogController')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Thêm mới Blog</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Tên BLog</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label >Nội dung</label>
                    <textarea class="form-control" rows="3" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ngày đăng</label>
                    <input type="date" name="due_date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>

@endsection