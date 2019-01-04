<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('book.store')  }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!--  General -->
    <div class="form-group">
        <h2 class="heading">Booking & contact</h2>
        <div class="controls">
            <input type="text" id="name" class="floatLabel" name="title" placeholder="title" >
            @if($errors->has('title'))
                <a href="">{{ $errors->first('title') }}</a>
            @endif
        </div>
        <div class="controls">
            <input type="text" id="country" class="floatLabel" name="descviption" >
        </div>
        <div class="controls">
            <input type="text" id="email" class="floatLabel" name="content">
        </div>
        <div class="controls">
            <input type="file" id="phone" class="floatLabel" name="img">
        </div>
        <button type="submit" class="btn btn-primary" name="add" value="add">add</button>
        <a href="" class="btn btn-primary" onclick="window.history.go(-1); return false">Can</a>
    </div>
</form>
</body>
</html>