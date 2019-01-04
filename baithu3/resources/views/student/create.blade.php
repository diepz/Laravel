<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{ route('student.store') }}" method="post">
    @csrf
    <input class="form-control form-control-lg" type="text" name="name" value="name">
    <input class="form-control" type="text" placeholder="Default input" name="age" value="age">
    <input class="form-control form-control-sm" type="text"  name="addres" value="addres">
    <input class="form-control form-control-sm" type="text"  name="city" value="city">
    <input class="form-control form-control-sm" type="text"  name="phone" value="phone">
    <input  type="submit" name="crate" value="CREATE">
</form>
</body>
</html>