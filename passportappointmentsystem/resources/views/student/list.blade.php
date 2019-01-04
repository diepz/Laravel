<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
<section>
    <!--for demo wrap-->
    <h1>Table Diep Z</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Alone</th>
                <th>CoGau </th>
            </tr>
            </thead>

        </table>
        <div class="title">
            <a href="{{ route('student.create') }}"><input type="submit" value="Create New" >
            </a>   </div>
    </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/nikhil8krishnan">DiepZ</a>
</div>
</body>
</html>