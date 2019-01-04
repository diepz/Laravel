@extends('home')
@section('title', 'Update')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Cap nhat
        </div>
        <form class="text-left" method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputTitle">id_khach_hang</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>

            <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>

            <div class="form-group">
                <label for="inputTitle">email</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>

            <div class="form-group">
                <label for="inputTitle">Dia chi</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>

            <div class="form-group">
                <label for="inputTitle">number phone</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

        </form>
    </div>
</div>