@extends('welcome')
@section('content')
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <label for="inputUsername">Ten Nguoi dung</label>
        <input type="text" class="form-control" name="inputUsername" placeholder="" id="inputUsername" required>

    </div>
    <div class="form-login">
        <label for="inputPassword">Ten Nguoi dung</label>
        <input type="text" class="form-control" name="inputPassword" placeholder="" id="inputPassword" required>

    </div>
    <div class="btn btn-primary">Dang Nhap</div>
    @endsection