<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>


<html>

<head>

    <meta charset="utf-8">

    <title>My first trial</title>
    <meta name="description" content="This is a trial">
    <meta name="author" content="jlalovi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/90320a65cd/UntitledProject2/style.css">

</head>

<body>

<div id="main-container">
    <div id="left-container"> <!-- Left part -->
        <div id="newPost" class="container"> <!-- Add New Post -->

            <div class="side bar">
                <ul>
                    <li><a href="#1"><span class="fontawesome-dashboard"></span></a></li>
                    <li><a href="#2" id="document"><span class="fontawesome-file-alt"></span></a></li>
                    <li><a href="#3"><span class="fontawesome-picture"></span></a></li>
                    <li><a href="#4"><span class="entypo-link"></span></a></li>
                    <li><a href="#5"><span class="fontawesome-comments"></span></a></li>
                </ul>
            </div>

            <div class="newPostContent">
                @yield('content')
                <h1>Add New Post</h1>

                <input type="text" placeholder="Enter title here" id="post-title">

                <div class="format-bar bar">
                    <ul>
                        <li><a href="#6"><span class="fontawesome-bold"></span></a></li>
                        <li><a href="#7"><span class="fontawesome-italic"></span></a></li>
                        <li><a href="#8"><span class="fontawesome-underline"></span></a></li>
                        <li><a href="#9"><span class="fontawesome-strikethrough"></span></a></li>
                        <li><a href="#10"><span class="fontawesome-list-ul"></span></a></li>
                        <li><a href="#11"><span class="fontawesome-list-ol"></span></a></li>
                    </ul>
                </div>
                <textarea class="post-body"></textarea>

                <a href="#12" class="btn disabled">save draft</a>
                <a href="#13" class="btn disabled">preview</a>
                <a href="#14" class="btn">publish</a>
            </div>
        </div>

        <div id="messages" class="bar"> <!-- Messages -->
            <ul>
                <li><a href="#15"><span class="fontawesome-comment"></span></a></li>
                <li><a href="#16"><span class="entypo-mail"></span></a></li>
                <li><a href="#17"><span class="entypo-heart"></span></a></li>
                <li><input type="text" id="search-message"></li>
            </ul>
            <div class="lupa"><span class="fontawesome-search"></span></div>
        </div>

        <div id="suscribe" class="container"> <!-- Suscribe -->
            <div class="bar title-bar">
                <h2>Subscribe</h2>
            </div>

            <p>Get our feed through email.</p>
            <input type="text" placeholder="e.g. simbad@montecristo.com">
            <a href="#18" class="btn">suscribe</a>
        </div>
    </div>

    <div id="middle-container"> <!-- Middle Part -->
        <div id="relatedPosts" class="container"> <!-- Related Posts -->
            <div class="bar title-bar">
                <h2>Related Posts</h2>
            </div>

            <div class="rpost">
                <p><a href="#19">Philosophy cannot be taught; it is the application of the sciences to truth</a> <br/>
                    <a href="#20">by Lord Wilmore</a></p>
            </div>
            <input type="checkbox" class="rpost-checkbox" name="chk1" id="chk1" checked>
            <label for="chk1"></label>

            <div class="rpost">
                <p><a href="#21">Now let the avenging god make way for me to punish the wrongdoer!</a> <br/>
                    <a href="#22">by Abbe Busoni</a></p>
            </div>
            <input type="checkbox" class="rpost-checkbox" name="chk2" id="chk2">
            <label for="chk2"></label>

            <div class="rpost">
                <p><a href="#23">There is neither happiness nor misery in the world</a> <br/>
                    <a href="#24">by Monsieur Zaccone</a></p>
            </div>
            <input type="checkbox" class="rpost-checkbox" name="chk3" id="chk3" checked>
            <label for="chk3"></label>
        </div>

        <div id="tags" class="container"> <!-- Tags -->
            <div class="bar title-bar">
                <h2>Tags</h2>
            </div>
            <input type="text">
            <a href="#25" class="btn">add</a>
            <p>Separate tags with commas</p>
        </div>

        <div id="map" class="container"> <!-- Map -->
            <div class="map">
                <img src="https://maps.googleapis.com/maps/api/staticmap?center=Paris&zoom=13&size=430x295&maptype=roadmap%20&&sensor=false">
                <a href="#26" class="btn"><span class="fontawesome-plus"></span></a>
                <a href="#27" class="btn"><span class="fontawesome-minus"></span></a>
            </div>
            <input type="text">
            <div class="lupa"><span class="fontawesome-search"></span></div>
            <a href="#28" class="btn addMap">add map</a>
        </div>
    </div>

    <div id="right-container"> <!-- Right Part -->
        <div id="calendar" class="container"> <!-- Calendar -->
            <div class="bar title-bar calendar-bar">
                <ul>
                    <li><a href="#29" class="arrow"><h2>&lt;</h2></a></li>
                    <li><a href="#30" class="month"><h2>September</h2></a></li>
                    <li><a href="#31" class="arrow"><h2>&gt;</h2></a></li>
                </ul>
            </div>
            <div class="calendar-container">
                <div class="daysWeek">
                    <ul>
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                </div>
                <table class="calendar">
                    <tbody class="days">
                    <tr>
                        <td class="daysOut"><a href="#48">24</a></td>
                        <td class="daysOut"><a href="#49">25</a></td>
                        <td class="daysOut"><a href="#50">26</a></td>
                        <td class="daysOut"><a href="#51">27</a></td>
                        <td class="daysOut"><a href="#52">28</a></td>
                        <td><a href="#53">1</a></td>
                        <td><a href="#54">2</a></td>
                    </tr>
                    <tr>
                        <td><a href="#55">3</a></td>
                        <td><a href="#56">4</a></td>
                        <td class="today"><a href="#57">5</a></td>
                        <td><a href="#58">6</a></td>
                        <td><a href="#59">7</a></td>
                        <td><a href="#60">8</a></td>
                        <td><a href="#61">9</a></td>
                    </tr>
                    <tr>
                        <td><a href="#62">10</a></td>
                        <td><a href="#63">11</a></td>
                        <td><a href="#64">12</a></td>
                        <td><a href="#65">13</a></td>
                        <td><a href="#66">14</a></td>
                        <td><a href="#67">15</a></td>
                        <td><a href="#68">16</a></td>
                    </tr>
                    <tr>
                        <td><a href="#69">17</a></td>
                        <td><a href="#70">18</a></td>
                        <td><a href="#71">19</a></td>
                        <td><a href="#72">20</a></td>
                        <td><a href="#73">21</a></td>
                        <td><a href="#74">22</a></td>
                        <td><a href="#75">23</a></td>
                    </tr>
                    <tr>
                        <td><a href="#76">24</a></td>
                        <td><a href="#77">25</a></td>
                        <td><a href="#78">26</a></td>
                        <td><a href="#79">27</a></td>
                        <td><a href="#80">28</a></td>
                        <td class="daysOut"><a href="#81">1</a></td>
                        <td class="daysOut"><a href="#82">2</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="recentPosts" class="title-bar more-bar"> <!-- Recent Posts -->
            <ul>
                <li><h2>Recent Posts</h2></li>
                <li><a href="#32" class="scroll"><span class="entypo-right-dir"></span></a></li>
            </ul>
        </div>

        <div id="categories" class="container"> <!-- Categories -->
            <div class="title-bar more-bar">
                <ul>
                    <li><h2>Categories</h2></li>
                    <li><a href="#33" class="scroll"><span class="entypo-down-dir"></span></a></li>
                </ul>
            </div>
            <ul>
                <input type="text" placeholder="Title">
                <li class="categories-opt">
                    <input type="checkbox" class="categories-checkbox" name="chk4" id="chk4" checked>
                    <label for="chk4">Display as dropdown</label>

                </li>
                <li>
                    <input type="checkbox" class="categories-checkbox" name="chk5" id="chk5">
                    <label for="chk5">Show posts counts</label>

                </li>
                <li>
                    <input type="checkbox" class="categories-checkbox" name="chk6" id="chk6" checked>
                    <label for="chk6">Show hierarchy</label>

                </li>
            </ul>
            <ul>
                <li><a href="#41" class="btn save">save</a></li>
                <li><a href="#42" class="btn delete">delete</a></li>
            </ul>
        </div>

        <div id="moreOptions" class="container"> <!-- More Options -->
            <div class="title-bar more-bar moreOptions-bar">
                <ul>
                    <li><a href="#34" class="popular">Popular</a></li>
                    <li><a href="#35" class="comments-recent">Comments</a></li>
                    <li><a href="#36" class="comments-recent">Recent</a></li>
                </ul>
            </div>
            <div class="popular">
                <img src="http://lorempixel.com/55/55/people/3" alt="Profile img" class="profile-img">
                <p><a href="#37">Fourteen years in Châteu d'lf</a> <br/>
                    <a href="#38">by Edmond Dantès</a></p>
            </div>
            <div class="popular">
                <img src="http://lorempixel.com/55/55/people/4" alt="Profile img" class="profile-img">
                <p><a href="#39">Number 34 and number 27</a> <br/>
                    <a href="#40">by The Count of Monte Cristo</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</body>
</html>