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
<form action="{{ route('student.store') }}" method="post">
    @csrf
Name:<input type="text" class="btn-primary" name="name">
    <br>
Age:<input type="text" class="btn-primary" name="age">
    <br>
Birth:<input type="text" class="btn-primary" name="birth">
    <br>
Country:<input type="text" class="btn-primary" name="country">
    <br>
    <input type="submit" name="create" value="create">
</form>
</body>
</html>