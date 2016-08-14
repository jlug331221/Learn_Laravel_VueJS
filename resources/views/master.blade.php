<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">

        <meta id="token" name="token" value="{{ csrf_token() }}" />

        <title>Laravel & VueJS</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>

    <body>

        <div class="main-parent-container" id="app">

            <header container class="siteHeader">

                <div row>
                    <h1 column="4" class="logo">The CJ-7 Blog</h1>

                    <nav column="8" class="nav">
                        <ul class="list--unstyled list--inline">
                            <li>
                                <a v-link="{ path: '/' }">Blogs</a>
                            </li>
                            <li>
                                <a v-link="{ path: '/create-blog' }">
                                    Create Blog
                                </a>
                            </li>
                            <li>
                                <a v-link="{ path: '/about' }">About</a>
                            </li>
                            <li>
                                <a v-link="{ path: '/contact' }">Contact Me</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <hr>

            </header>

            <main container class="siteMain">

                <div column="6 +3">
                    <div row>
                        <router-view></router-view>
                    </row>
                </div>

            </main>

            <footer class="siteFooter">

                <h6>This is the footer area</h6>

            </footer>

        </div> <!-- end of main-parent-container -->

        <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>
