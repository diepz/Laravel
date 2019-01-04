<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700,800,900&subset=latin-ext');

        body {
            font-family:'Quicksand';
            margin:0;
        }

        .container {
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            width:100vw;
            max-width:100%;
            height:100vh;
            /*background:url('https://images.unsplash.com/photo-1511227499331-25c621db940e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2e7e55bd948e728345b7ed558d550053&auto=format&fit=crop&w=1400&q=80');
            background-size:cover;
            background-position:50% 50%;*/
        }

        .gradient-purple-blue {
            background-image: linear-gradient(30deg, #8E78FF, #B9DEDB,#00BFFF);
        }

        .under-container {
            width:100vw;
            max-width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }

        .title {
            font-size:50px;
            color:white;
        }

        .menu {
            width:100vw;
            max-width:100%;
            display:flex;
            justify-content:space-around;
            position:fixed;
            transition:opacity 0.5s;
            z-index:1;
        }

        .menu li {
            padding:30px;
            list-style: none;
        }

        .menu li a {
            color:white;
            text-decoration:none;
            font-weight:900;
        }


        .line {
            display:flex;
            position:relative;
            z-index:3;
        }

        .square {
            font-size:100px;
            font-weight:900;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            cursor:default;
            transition:all 0.3s;
            color:#fff;
        }

        .square:hover {
            color: 	#8B0000;
        }

        @-webkit-keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            30% {
                -webkit-transform: scale3d(1.25, .75, 1);
                transform: scale3d(1.25, .75, 1)
            }
            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1)
            }
            50% {
                -webkit-transform: scale3d(1.15, .85, 1);
                transform: scale3d(1.15, .85, 1)
            }
            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1)
            }
            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1)
            }
            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        @keyframes rubberBand {
            0% {
                -webkit-transform: scale3d(1, 1, 1);
                -ms-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            30% {
                -webkit-transform: scale3d(1.25, .75, 1);
                -ms-transform: scale3d(1.25, .75, 1);
                transform: scale3d(1.25, .75, 1)
            }
            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                -ms-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1)
            }
            50% {
                -webkit-transform: scale3d(1.15, .85, 1);
                -ms-transform: scale3d(1.15, .85, 1);
                transform: scale3d(1.15, .85, 1)
            }
            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                -ms-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1)
            }
            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                -ms-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1)
            }
            100% {
                -webkit-transform: scale3d(1, 1, 1);
                -ms-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        .rubberBand {
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand
        }

        .mouse {
            display:flex;
            width:30px;
            height:50px;
            border:2px solid #fff;
            border-radius:30px;
        }

        .molette {
            margin:12px auto auto auto;
            width:3px;
            height:3px;
            background-color:#fff;
            border: 1px solid #fff;
            border-radius: 90px;
            animation: scroll 2s ease infinite;
        }

        @keyframes scroll {
            0%{opacity:0; margin:10px auto auto auto;}
            10%{opacity:1;}
            50%{margin:10px auto auto auto;}
            90%{opacity:1;}
            100%{opacity:0; margin:18px auto auto auto;}
        }

        .mousetext{
            color:#fff;
            font-weight: 500;
        }

        /* bubble inspired by Mattia Astorino https://codepen.io/equinusocio/pen/jezBdZ*/

        .bubble {
            position:relative;
        }

        .bubble::before
        {
            content: '';
            position:absolute;
            z-index:2;
            top: 35%;
            left: 35%;
            transform: translate(-50%, -50%);
            display: block;
            width: 40vh;
            height: 40vh;
            min-height: 200px;
            min-width: 200px;
            background: linear-gradient(
                    270deg,
                    #43e97b,
                    #38f9d7,
                    #e0c3fc,
                    #8ec5fc,
                    #4facfe,
                    #00f2fe,
                    #a8edea,
                    #fed6e3
            );
            background-size: 1600% 1600%;
            box-shadow: inset 0px -20px 100px 0px rgba(255, 255, 255, 0.48);
            animation:
                    transform 20s linear infinite alternate,
                    movement 40s linear infinite alternate,
                    shade 60s linear infinite alternate;
        }

        .bubble::after
        {
            content: '';
            position:absolute;
            z-index:2;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
            width: 20vh;
            height: 10vh;
            min-height: 200px;
            min-width: 200px;
            background: linear-gradient(
                    270deg,
                    #00f2fe,
                    #8ec5fc,
                    #38f9d7,
                    #4facfe,
                    #a8edea,
                    #43e97b,
                    #e0c3fc,
                    #fed6e3
            );
            background-size: 1600% 1600%;
            box-shadow: inset 0px -20px 100px 0px rgba(255, 255, 255, 0.48);
            animation:
                    transform2 20s linear infinite alternate-reverse,
                    movement 40s linear infinite alternate-reverse,
                    shade 60s linear infinite alternate-reverse;
        }

        @keyframes transform
        {
            0%,
            100% { border-radius: 33% 67% 70% 30% / 30% 30% 70% 70%; }
            20% { border-radius: 37% 63% 51% 49% / 37% 65% 35% 63%; }
            40% { border-radius: 36% 64% 64% 36% / 64% 48% 52% 36%; }
            60% { border-radius: 37% 63% 51% 49% / 30% 30% 70% 70%; }
            80% { border-radius: 40% 60% 42% 58% / 41% 51% 49% 59%; }
        }

        @keyframes transform2 {
            0%{border-radius: 42% 58% 60% 40% / 32% 54% 46% 68%}
            20%{border-radius: 59% 41% 36% 64% / 32% 64% 36% 68%}
            40%{border-radius: 48% 52% 52% 48% / 54% 53% 47% 46%}
            60%{border-radius: 42% 58% 51% 49% / 63% 64% 36% 37%}
            80%{border-radius: 32% 68% 33% 67% / 63% 35% 65% 37%}
            100%{border-radius: 34% 66% 52% 48% / 34% 53% 47% 66%}
        }

        @keyframes movement
        {
            from { -webkit-transform: rotate(-1turn) translateY(-50px); transform: rotate(-1turn) translateY(-50px); }
            to { -webkit-transform: none; transform: none; }
        }

        @keyframes shade
        {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }


        .profil-picture {
            display:flex;
            justify-content:center;
            align-items:center;
            width:150px;
            height:150px;
            border-radius:100%;
            background:linear-gradient(30deg, #232323, #B9BCC3);
            opacity:0;
        }

        .profilpicture-animation {
            animation:showprofil 0.5s forwards;
        }

        .profil-picture img{
            width:95%;
            height:95%;
            border-radius:100%;
        }

        @keyframes showprofil {
            0%{
                transform:translateY(-100%);
                opacity:0;
            }
            100%{
                transform:translateY(0%);
                opacity:1;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="menu" id="menu">
    <li><a href="{{ route('z') }}">MASTER</a></li>
    <li><a href="#">ABOUT ME</a></li>
    <li><a href="#">MY WORKS</a></li>
    <li><a href="#">CONTACT ME</a></li>
</div>
<div class="container gradient-purple-blue">
    <div class="under-container bubble" style="height:90vh;">
        <div class="line">
            <div class="square" id="square">H</div>
            <div class="square" >e</div>
            <div class="square" >l</div>
            <div class="square" >l</div>
            <div class="square" >o</div>
            <div class="square" style="margin-left:30px;">I</div>
            <div class="square" >'</div>
            <div class="square" >m</div>
        </div>
        <div class="line">
            <div class="square" >Đ</div>
            <div class="square" >I</div>
            <div class="square" >Ệ</div>
            <div class="square" >P</div>
            <div class="square" >Z</div>
        </div>
    </div>
    <div class="under-container" style="height:10vh">
        <div class="mouse">
            <div class="molette"></div>
        </div>
    </div>
</div>
</div>
<div class="container" id="secondcontainer">
    <div class="under-container">
        <div class="profil-picture" id="profilpicture">
            <img src="https://scontent.fhan6-1.fna.fbcdn.net/v/t1.0-9/18157450_1312423968876149_7621970972373061783_n.jpg?_nc_cat=104&_nc_ht=scontent.fhan6-1.fna&oh=f4e84ea237811559dd365d5d8cdafec4&oe=5C509AB5">
        </div>
    </div>
</div>
<script>
    var square = document.getElementsByClassName('square');

    for(var i = 0; i<square.length; i++){
        square[i].addEventListener('mouseenter', function(){
            this.classList.add("rubberBand");
            this.addEventListener("animationend", function(){
                this.classList.remove("rubberBand");
            }, false);
        })
    }

    var menu = document.getElementById('menu');
    var secondcontainer = document.getElementById('secondcontainer');
    var scposition = secondcontainer.getBoundingClientRect();
    var profilpicture = document.getElementById('profilpicture');

    document.addEventListener("scroll", function(event) {
        if(window.pageYOffset >= scposition.top-150){
            menu.style.opacity="0";
        }
        if (window.pageYOffset <= scposition.top-150){
            menu.style.opacity="1";
        }

        if(window.pageYOffset >= scposition.top-100){
            profilpicture.classList.add('profilpicture-animation');
        }
        if(window.pageYOffset <= scposition.top-600){
            profilpicture.classList.remove('profilpicture-animation');
        }
    });
</script>
</body>
</html>