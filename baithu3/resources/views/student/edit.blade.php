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
    <input class="form-control form-control-lg" type="text" name="name" value="{{ $students->name }}">
    <input class="form-control" type="text" placeholder="Default input" name="age" value="{{ $students->age }}">
    <input class="form-control form-control-sm" type="text"  name="addres" value="{{ $students->addres }}">
    <input class="form-control form-control-sm" type="text"  name="city" value="{{ $students->city }}">
    <input class="form-control form-control-sm" type="text"  name="phone" value="{{ $students->phone }}">
    <input  type="submit" name="crate" value="UPDATE">

</form>
</body>
</html>