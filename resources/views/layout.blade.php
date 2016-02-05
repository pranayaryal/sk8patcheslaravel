
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sk8 Patches</title>
    <link href='https://fonts.googleapis.com/css?family=Bangers|Orbitron' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
    <body>
        <a href="/">
            <h1 class="main-header">Sk8 PATCHES.com</h1>
        </a>
        <div class="contain-to-grid sticky">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <h1 id="header"><a href="#">GRIND HARD</a></h1>
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li class="divider"></li>
                        <li class=""><a id="o" href="/catalog">About</a></li>
                        <li class="divider"></li>
                        <li id="n"><a href="/employee">Shop</a></li>
                        <li class="divider"></li>
                        <li><a href="/contact">Contact</a></li>
                        <li class="divider"></li>
                        @if(Auth::guest())
                            <li><a href="{{url('/login')}}">Log in</a></li>
                            <li><a href="{{url('/register')}}">Register</a></li>

                        @else
                            <li><a href="{{url('/logout')}}">Log Out</a></li>
                        @endif
                        <li class="divider"></li>

                    </ul>

                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li><a id="m" href="catalog.html">Join the Movement</a></li>
                    </ul>
                </section>
            </nav>
        </div><br>
        <div class="row">
            @yield('content')

        </div>

        <footer class="row">
            <div class="large-12 columns"><hr>
                <div class="row">
                    <div class="large-6 columns">
                        <p class="copyright">&copy; Copyright Sk8Patches.com. Site Developed by JosiahSoftware Inc.</p>
                    </div>
                    <div class="large-6 small-12 columns">
                        <ul class="inline-list right">
                            <li><a href="https://www.facebook.com/search/top/?q=sk8%20patches"><img src="http://www.simply-done.net/static/img/social-icons-facebook.png"></a></li>
                            <li><a href="https://twitter.com/sk8patch"><img src="http://i.imgur.com/tXSoThF.png"></a></li>
                            <li><a href="https://www.youtube.com/watch?v=ma5SEWy5RTU"><img src="https://dpr3pl0rcps5j.cloudfront.net/img/wma/social-icons/youtube.png"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
        <script src="/js/libs.js"></script>
        @include('flash')
        <script>//<![CDATA[
            document.write('<script src="//' + (location.hostname || 'localhost') + ':35729/livereload.js?snipver=1"><\/script>')
            //]]></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
            /* ]]> */
        </script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
