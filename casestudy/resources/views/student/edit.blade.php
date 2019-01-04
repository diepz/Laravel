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
<form action="{{ route('student.update', $students->id) }}" method="post">
    @csrf
    Name:<input type="text" class="btn-primary" name="name" value="{{ $students->name }}">
    <br>
    Age:<input type="text" class="btn-primary" name="age" value="{{ $students->age }}">
    <br>
    Birth:<input type="text" class="btn-primary" name="birth" value="{{ $students->birth }}">
    <br>
    Country:<input type="text" class="btn-primary" name="country" value="{{ $students->country}}">
    <br>
    <input type="submit" name="update" value="update">
</form>
</body>
</html>