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
<table class="table table-active">
    <head>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">age</th>
        <th scope="col">birth</th>
        <th scope="col">country</th>
    </head>

    <head>
        @foreach($students as $key => $student)
        <th scope="col">{{ ++$key }}</th>
        {{--<th scope="col">{{ $student->name }}</th>--}}
        <th scope="col">{{ $student->age }}</th>
        <th scope="col">{{ $student->birth }}</th>
        <th scope="col">{{ $student->country }}</th>
        @endforeach
    </head>

</table>
<a href="{{ route('student.create') }}">create</a>
<a href="{{ route('student.edit', $student->id) }}">sua</a>
</body>
</html>