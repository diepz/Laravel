<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add new Task
        </div>
        <form class="text-left" method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
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
            <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

        </form>
    </div>
</div>





</body>
</html>