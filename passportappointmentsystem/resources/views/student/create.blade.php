<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <title>Document</title>
</head>
<body>
<form action="">
<div class="wrap">
    <form action="{{ route('student.store') }}" method="post">
    <div class="mat-div">
        <label for="first-name" class="mat-label">Name</label>
        <input type="text" class="mat-input" id="first-name" name="name">
    </div>

    <div class="mat-div">
        <label for="first-name" class="mat-label">Age</label>
        <input type="text" class="mat-input" id="last-name" name="age">
    </div>

    <div class="mat-div">
        <label for="address" class="mat-label">Phone</label>
        <input type="text" class="mat-input" id="address" name="phone">
    </div>
    <div class="mat-div">
        <label for="address" class="mat-label">Alone</label>
        <input type="text" class="mat-input" id="address" name="alone">
    </div>
    <div class="mat-div">
        <label for="address" class="mat-label">CoGau</label>
        <input type="text" class="mat-input" id="address" name="cogau" >
    </div>
    <button>Create new</button>
    </form>
</div>
</form>
</div>
</body>
</html>
