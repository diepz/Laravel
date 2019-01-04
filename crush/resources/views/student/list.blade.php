<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->

    <title>Document</title>
</head>
<body>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
    </tr>
    @foreach($students as $key => $student)
        <tr>
            <th scope="col">{{ ++$key }}</th>
            <th scope="col">{{ $student->name }}</th>
            <th scope="col"> {{ $student->age }}</th>
            <th scope="col">{{ $student->email }}</th>
            <th scope="col">{{ $student->img }}</th>
            <th scope="col">
                <a href="{{ route('student.edit', $student->id) }}">Repair</a>
                <a href="{{ route('student.destroy', $student->id) }}">Delete</a>
            </th>
        </tr>
    @endforeach
    <tr>
        <th scope="col">
        <th scope="col"><a href="{{ route('student.create') }}">CREATE</a></th>

    </tr>

    </thead>
    <div class="col-6">
        <form class="navbar-form navbar-left" action="{{ route('student.search') }}" method='post'>
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search"
                               value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </div>
            </div>return
        </form>
    </div>
    </div>

    </div>
</table>

</body>
</html>