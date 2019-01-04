<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="side">
        <div class="bg"></div>
        <div>
            <h3>Libary</h3>
        </div>
        <input type="text" class="search" placeholder="Search" />
        <ul class="menu">
            <li title="" class="selected"><i class="zmdi zmdi-label-alt"></i> Today</li>
            <li title="Ladies Night"><i class="zmdi zmdi-female"></i> Thrusday</li>
            <li title="Family Friday"><i class="zmdi zmdi-male-female"></i> Friday</li>
            <li title=""><i class="zmdi zmdi-collection-item-1"></i> Saturday</li>
            <li title=""><i class="zmdi zmdi-collection-item-2"></i> Sunday</li>
            <li title="Monday for All"><i class="zmdi zmdi-accounts-alt"></i> Monday</li>
            <li title="Kids Tuesday"><i class="zmdi zmdi-face"></i> Tuesday</li>
            <li class="divider">
                <i class="zmdi zmdi-calendar"></i> Coming Soon
            </li>
        </ul>
    </div>
    <div class="main-wrap">
        <div class="main">
            <div class="list">
                <div class="scroll">
                    <button class="scrollTop"><i class="zmdi zmdi-arrow-left"></i></button>
                    <button class="scrollDown"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
                <header>
                    <ul class="filter">
                        <li data-gid="," class="selected">All</li>
                        <li data-gid="28">Action</li>
                        <li data-gid="12">Adventures</li>
                        <li data-gid="35">Comedy</li>
                        <li data-gid="18">Drama</li>
                    </ul>
                </header>
                <div class="content">
                    <ul class="covers"></ul>
                </div>
            </div>
            <div class="checkout">
                <div class="sinopsis">
                    <button class="back">
                        <i class="zmdi zmdi-arrow-left"></i>
                    </button>
                    <img class="cover" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8zw8AAhMBENYXhyAAAAAASUVORK5CYII=" style="background-image: url(https://image.tmdb.org/t/p/w300//gfJGlDaHuWimErCr5Ql0I8x9QSy.jpg)">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>