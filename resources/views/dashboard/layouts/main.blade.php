<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Elevate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('dashboard/semantic-ui/semantic.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/semantic-ui/calendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/custom.css') }}">

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
    </head>

    <body>

        <aside class="main-sidebar">
             @include('dashboard.partials.nav')
        </aside>

        <main class="main-container">
            <div class="ui inverted menu top-panel borderless">
                <a class="item" href="#linktowebsite" target="_blank"><i class="home icon"></i> Website Name</a>

                <div class="right menu">
                    <div class="ui dropdown item">
                        <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/large/jenny.jpg">
                        <span>Administrator</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item">Edit Profile</a>
                            <a class="item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-container-box">
                <section class="ui container">

                    @yield('content')

                </section>
            </div>
        </main>

        <script src="{{ asset('dashboard/semantic-ui/semantic.min.js') }}"></script>
        <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
        <script src="{{ asset('dashboard/js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/script.js') }}"></script>
    </body>
</html>
