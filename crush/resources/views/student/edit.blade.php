<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="{{ route('student.update', $students->id) }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name"
               value="{{ $students->name }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Age" name="age"
               value="{{ $students->age }}">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email"
               value="{{ $students->email }}">
    </div>
    <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="file" id="file"
               value="{{ $students->img }}">
        <input type="submit" value="Upload" name="submit">

    </div>
    </form>
    <input type="submit" value="UPDATE" name="update" class="btn btn-success">
    <button class="btn btn-success" onclick="window.history.go(-1); return false;">Hủy</button>


</form>
</body>
</html>