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
    <body class="login-wrap">

        <div class="ui container">
            <div class="ui centered grid">
                <div class="five wide computer sixteen wide mobile column">
                    <div class="ui login-container">
                    {!! Form::open([
                        'class' => 'ui form'
                    ]) !!}
                        {{-- <form class="ui form"> --}}
                            <div class="field">
                                <img class="ui centered Mini image" src="https://definite.co.id/wp-content/themes/definite/static/svg/elevate.svg" alt="">
                            </div>
                            <div class="field">
                                {{-- <input type="text" class="field" placeholder="Username"> --}}
                                {!! Form::text('email', null, [
                                    'class' => 'field',
                                    'placeholder' => 'Email'
                                ]) !!}
                            </div>

                            <div class="field">
                                {{-- <input type="password" class="field" placeholder="Password"> --}}
                                {!! Form::password('password', [
                                    'class' => 'field',
                                    'placeholder' => 'Password'

                                ]) !!}
                            </div>

                            <div class="field">
                                <div class="ui checkbox">
                                  <input type="checkbox" tabindex="0" class="hidden">
                                  <label>Keep me logged in</label>
                                </div>
                            </div>

                            <div class="field">
                                <button class="fluid ui button primary" type="submit">Login</button>
                            </div>
                        {!! Form::close() !!}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('dashboard/semantic-ui/semantic.min.js') }}"></script>
        <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
        <script src="{{ asset('dashboard/js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/script.js') }}"></script>
    </body>
</html>