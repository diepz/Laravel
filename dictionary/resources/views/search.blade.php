<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('css/style.css')}}" rel="stylesheet">/
<head>

</head>
<body>

<div id="container">
    <h1>Từ Điển Anh - Việt</h1>
    <img id="igpay" src="https://courd.ga/igpay.png">
    <form method="post" action="">
        <input type="text" id="sentence" placeholder="Enter your sentence here.">
        <input type="submit" onclick="handleClick()" value="Translate" id="translate">
    </form>
    <button id="reverse">Translate Reverse</button>
    <button id="clear">Clear</button>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">See Translation Logic</button>
    <button id="mute">Mute</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span id="close">&times;</span>
               <p><h2 class="left">Pig</h2>
            <h2 class="right">Latin</h2>
            <img src="https://pngimg.com/uploads/pig/pig_PNG2210.png">
            <a href="https://en.wikipedia.org/wiki/Pig_Latin" target="_blank">Pig Latin</a> takes the first consonant (or consonant cluster) of an English word, moves it to the end of the word and suffixes an "ay". If a word begins with a vowel you just add "way" to the end. <br> <br> This actually makes translating back impossible without comparing the translation with a dictionary since you have no way to tell if a word actually started with a "w" or how many consonants from the beginning were actually moved.<br> <br>Even though this app does compare the output with a dictionary and 2000 popular names there are still issues with words that share the same pig latin translation with other words. For expample, "win" when translated to pig latin it would become "inway" which is the same translation as the word "in".</p>
        </div>

    </div>
    <div id='x'/>

</div>

</body>