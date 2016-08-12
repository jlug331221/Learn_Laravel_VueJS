<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">

        <title>Laravel & VueJS</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <script src="https://use.fontawesome.com/28895756cc.js"></script>

    </head>

    <body>

        <header container class="siteHeader">

            <div row>
                <h1 column="4" class="logo">The CJ-7 Blog</h1>

                <nav column="8" class="nav">
                    <ul class="list--unstyled list--inline">
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Me</a></li>
                    </ul>
                </nav>
            </div>

            <hr>

        </header>

        <main container class="siteMain" id="blogs">

            <div row>
                @yield('content')
            </div>

        </main>

        <footer container class="siteFooter">

            <div row>
                <h6>This is the footer area</h6>
            </div>

        </footer>

        <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>
