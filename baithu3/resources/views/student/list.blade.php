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
<table class="table table-borderless table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">addres</th>
        <th scope="col">city</th>
        <th scope="col">phone</th>
    </tr>

    <tr>
    @foreach($students as $key => $student)
    <th scope="col">{{ ++$key  }}</th>
    <th scope="col">{{ $student->name  }}</th>
    <th scope="col">{{ $student->age  }}</th>
    <th scope="col">{{ $student->addres  }}</th>
    <th scope="col">{{ $student->city  }}</th>
    <th scope="col">{{ $student->phone  }}</th>
    <th scope="col"><a href="{{ route('student.edit', $student->id) }}">SUA</a>
        <a href="{{ route('student.destroy', $student->id) }}">Xoa</a>
    </th>
    @endforeach

    </tr>


    </thead>
</table>
<div><a href="{{ route('student.create') }}">CREATE</a></div>
<form action="{{ route('student.search') }}">
    <div><input type="text">
        <input type="submit" value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : ''  }}" name="keyword">
    </div>
</form>

</form>

</body>
</html>