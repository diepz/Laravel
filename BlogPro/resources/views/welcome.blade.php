<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

<main>
    <main>

        @yield('content')
        {{--<section class="previews">--}}
            {{--<div>--}}
                {{--<figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=16');"></figure>--}}
                {{--<figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=1003');"></figure>--}}
                {{--<figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=433');"></figure>--}}
                {{--<figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=40');"></figure>--}}
                {{--<figure class="absolute-bg preview__img" style="background-image: url('https://unsplash.it/2000/1200?image=1074');"></figure>--}}
                {{--<div class="previews__container">--}}
                    {{--<span>Welcome to</span>--}}
                    {{--<h1>Trophy</h1>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div>--}}
                {{--<header>--}}
                    {{--<ul class="tabs">--}}
                        {{--<li class="tabs__item">Posts</li>--}}
                        {{--<li class="tabs__item">Categories</li>--}}
                    {{--</ul>--}}
                {{--</header>--}}
                {{--<div class="tab">--}}
                    {{--<ul itemscope itemtype="http://schema.org/Blog">--}}
                        {{--<li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">--}}
                            {{--<a class="preview__link" href="#" itemprop="url">--}}
                                {{--<span class="preview__date" itemprop="datePublished" datetime="2016-09-08T00:00:00-07:00">Sep 8, 2016</span>--}}
                                {{--<h2 class="preview__header" itemprop="name">Roof Party</h2>--}}
                                {{--<p class="preview__excerpt" itemprop="description">Banh mi pug you probably haven’t heard of them occupy, drinking vinegar humblebrag vinyl locavore master cleanse sartorial bicycle rights 90’s kickstarter hashtag. 3 wolf moon XOXO man braid chartreuse....</p>--}}
                                {{--<span class="preview__more">Read More</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">--}}
                            {{--<a class="preview__link" href="#" itemprop="url">--}}
                                {{--<span class="preview__date" itemprop="datePublished" datetime="2016-09-07T00:00:00-07:00">Sep 7, 2016</span>--}}
                                {{--<h2 class="preview__header" itemprop="name">Craft Beer</h2>--}}
                                {{--<p class="preview__excerpt" itemprop="description">Tbh vaporware mumblecore iceland echo park DIY. Plaid woke next level enamel pin, vegan cred salvia pug. XOXO sartorial synth gluten-free, cold-pressed mumblecore craft beer helvetica. Vegan lyft squid, vice...</p>--}}
                                {{--<span class="preview__more">Read More</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">--}}
                            {{--<a class="preview__link" href="#" itemprop="url">--}}
                                {{--<span class="preview__date" itemprop="datePublished" datetime="2016-09-06T00:00:00-07:00">Sep 6, 2016</span>--}}
                                {{--<h2 class="preview__header" itemprop="name">Next Level Blog</h2>--}}
                                {{--<p class="preview__excerpt" itemprop="description">Humblebrag ramps single-origin coffee, literally jean shorts polaroid mlkshk franzen williamsburg distillery venmo. Skateboard leggings disrupt banjo shoreditch blue bottle. Brooklyn church-key cronut hell of waistcoat, polaroid lomo chambray bitters...</p>--}}
                                {{--<span class="preview__more">Read More</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">--}}
                            {{--<a class="preview__link" href="#" itemprop="url">--}}
                                {{--<span class="preview__date" itemprop="datePublished" datetime="2016-09-05T00:00:00-07:00">Sep 5, 2016</span>--}}
                                {{--<h2 class="preview__header" itemprop="name">VHS Selfies</h2>--}}
                                {{--<p class="preview__excerpt" itemprop="description">8-bit typewriter scenester, crucifix tousled tilde leggings brunch chicharrones salvia deep v man bun. Master cleanse man braid disrupt banjo, deep v cray tumblr cronut. Truffaut street art everyday carry...</p>--}}
                                {{--<span class="preview__more">Read More</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="preview" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">--}}
                            {{--<a class="preview__link" href="#" itemprop="url">--}}
                                {{--<span class="preview__date" itemprop="datePublished" datetime="2016-09-04T00:00:00-07:00">Sep 4, 2016</span>--}}
                                {{--<h2 class="preview__header" itemprop="name">Four Dollar Toast</h2>--}}
                                {{--<p class="preview__excerpt" itemprop="description">Flexitarian fixie keytar vice craft beer. Forage normcore cred austin brunch, put a bird on it actually. Chia put a bird on it skateboard, salvia paleo heirloom semiotics knausgaard selvage...</p>--}}
                                {{--<span class="preview__more">Read More</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<footer class="section-padding--sm footer">--}}
                        {{--<a class="footer__archive" href="#">Archive</a>--}}
                        {{--<ul class="footer__social">--}}
                            {{--<li><a class="fa fa-lg fa-envelope-o" href="mailto:thomas.vaeth@gmail.com"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-github" href="https://github.com/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-codepen" href="https://codepen.io/thomasvaeth/" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-linkedin" href="https://www.linkedin.com/in/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-twitter" href="https://twitter.com/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-facebook" href="https://www.facebook.com/thomas.vaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-instagram" href="https://www.instagram.com/thomas.vaeth/" target="_blank"></a></li>--}}
                        {{--</ul>--}}
                    {{--</footer>--}}
                {{--</div>--}}

                {{--<div class="tab">--}}
                    {{--<ul class="cards">--}}
                        {{--<li class="card">--}}
                            {{--<a class="card__link" href="#">--}}
                                {{--<div class="card__img">--}}
                                    {{--<figure class="absolute-bg" style="background-image: url('https://unsplash.it/500/300?image=1074');"></figure>--}}
                                {{--</div>--}}
                                {{--<div class="card__container">--}}
                                    {{--<h2 class="card__header">Brunch</h2>--}}
                                    {{--<p class="card__count">3 Posts</p>--}}
                                    {{--<span class="card__more">View All</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="card">--}}
                            {{--<a class="card__link" href="#">--}}
                                {{--<div class="card__img">--}}
                                    {{--<figure class="absolute-bg" style="background-image: url('https://unsplash.it/500/300?image=718');"></figure>--}}
                                {{--</div>--}}
                                {{--<div class="card__container">--}}
                                    {{--<h2 class="card__header">Gluten-free</h2>--}}
                                    {{--<p class="card__count">2 Posts</p>--}}
                                    {{--<span class="card__more">View All</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="card">--}}
                            {{--<a class="card__link" href="#">--}}
                                {{--<div class="card__img">--}}
                                    {{--<figure class="absolute-bg" style="background-image: url('https://unsplash.it/500/300?image=1060');"></figure>--}}
                                {{--</div>--}}
                                {{--<div class="card__container">--}}
                                    {{--<h2 class="card__header">Cities</h2>--}}
                                    {{--<p class="card__count">3 Posts</p>--}}
                                    {{--<span class="card__more">View All</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="card">--}}
                            {{--<a class="card__link" href="#">--}}
                                {{--<div class="card__img">--}}
                                    {{--<figure class="absolute-bg" style="background-image: url('https://unsplash.it/500/300?image=16');"></figure>--}}
                                {{--</div>--}}
                                {{--<div class="card__container">--}}
                                    {{--<h2 class="card__header">Juice</h2>--}}
                                    {{--<p class="card__count">2 Posts</p>--}}
                                    {{--<span class="card__more">View All</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<footer class="section-padding--sm footer">--}}
                        {{--<a class="footer__archive" href="#">Archive</a>--}}
                        {{--<ul class="footer__social">--}}
                            {{--<li><a class="fa fa-lg fa-envelope-o" href="mailto:thomas.vaeth@gmail.com"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-github" href="https://github.com/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-codepen" href="https://codepen.io/thomasvaeth/" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-linkedin" href="https://www.linkedin.com/in/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-twitter" href="https://twitter.com/thomasvaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-facebook" href="https://www.facebook.com/thomas.vaeth" target="_blank"></a></li>--}}
                            {{--<li><a class="fa fa-lg fa-instagram" href="https://www.instagram.com/thomas.vaeth/" target="_blank"></a></li>--}}
                        {{--</ul>--}}
                    {{--</footer>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--</section>--}}
    </main>

    </main>

</main>

</body>
</html>