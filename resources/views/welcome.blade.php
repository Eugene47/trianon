<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <script
                src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .content .divider {
                border-top: 1px #dfdfe0 solid;
                margin: 20px 0px;
            }
            .content textarea {
                resize: none;
            }
            .content label{
                float: left;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Your IP: <?= $ip ?>
                </div>
                <div class="divider"></div>
                    <p>Symbols per minute <span id="spm">0</span></p>
                    <p>Symbolcount <span id="scount">0</span></p>
                    <p>Timer <span id="timer">0</span></p>
                <div class="divider"></div>
                <div class="form-inline">
                    <div class="form-group mx-sm-5 mb-2">
                        <input id="input_pass" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button id="send" type="submit" class="btn btn-outline-secondary mb-2" onclick="send()">Login</button>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/typespeed.js') }}" defer></script>
    </body>
</html>
