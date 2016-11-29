<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EU-ASEAN Youth Photo Competition</title>
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/favicon/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/favicon/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/favicon/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('img/favicon/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('img/favicon/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('img/favicon/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-196x196.png') }}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-128.png') }}" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ asset('img/favicon/mstile-70x70.png') }}" />
        <meta name="msapplication-square150x150logo" content="{{ asset('img/favicon/mstile-150x150.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ asset('img/favicon/mstile-310x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ asset('img/favicon/mstile-310x310.png') }}" />


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script>
            var VOTE_URL = '{{ env('BASE_URL', 'http://eu-asean.dev') . '/api/vote' }}';
            var isMobile = {{ (Agent::isMobile()) ? 1 : 0}};

        </script>

        @yield('styles')

    </head>
    <body>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87496915-1', 'auto');
      ga('send', 'pageview');

    </script>

    <main class="wrapper {{ $bodyClass or ""}}">

        <header class="header">
            <div class="container-fluid">
                <div class="col-xs-3 col-sm-6">
                    <div class="burger" id="js-toggle"><span></span></div>
                </div>

                <aside id="menu" class="main">
                    <ul class="main__menu">
                        <li class="main__menu__item">
                            <a href="{{ route('home') }}" title="Home">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                        <li class="main__menu__item">
                            <a href="{{ route('about') }}" title="About">About <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                        <li class="main__menu__item">
                            <a href="{{  route('register') }}" title="Register">Register <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                        <li class="main__menu__item">
                            <a href="{{ route('gallery') }}" title="Gallery">Gallery <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                        <li class="main__menu__item">
                            <a href="{{ route('contact') }}" title="Contact">Contact <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </aside>

                <div class="col-xs-9 col-sm-6 text-right">
                    <div class="header__social">
                        <a href="https://twitter.com/EUAmbASEAN" target="_blank"><i class="fa fa-twitter" aria-hidden="true" onclick="ga('send', 'event', 'Follow', 'Click', 'Twitter EUAmbASEAN')"></i></a>
                        <a href="https://twitter.com/EUinASEAN" target="_blank" title="Twitter" onclick="ga('send', 'event', 'Follow', 'Click', 'Twitter EUinASEAN')"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/EUinASEAN/" target="_blank" title="Instagram" onclick="ga('send', 'event', 'Follow', 'Click', 'Instagram')"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-box">

            @yield('content')

        </div>

    </main> <!-- end Main -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="col-sm-6 hidden-xs hidden-sm">
                <ul class="footer__menu">
                    <li class="footer__menu__item">
                        <a href="{{ route('home') }}" title="Home">Home</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{ route('about') }}" title="About">About</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{  route('register') }}" title="Register">Register</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{ route('gallery') }}" title="Gallery">Gallery</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{ route('contact') }}" title="Contact">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="text-right">
                    <img src="{{ asset('img/flag.png') }}" alt="" class="footer__flag"> <br>
                    <p><strong><a href="http://www.peopleofasean.com">www.peopleofasean.com</a></strong></p>
                    <p>Copyright &copy; <?php echo date('Y'); ?> EU-ASEAN. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')

    </body>
</html>