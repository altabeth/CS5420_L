<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UFO Alert System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
             #ani1:hover {
                -webkit-transform: translate(-50em,-20em) scale(4) rotate(15deg);
                -moz-transform: translate(-50em,-20em) scale(4) rotate(15deg);
                -o-transform: translate(-50em,-20em) scale(4) rotate(15deg);
                -ms-transform: translate(-50em,-20em) scale(4) rotate(15deg);
             transform: translate(-50em,-20em) scale(4) rotate(15deg);

                 /*
                -webkit-transform: translate(3m,2m) scale(.8);
                -moz-transform: translate(3m,2m) scale(.8);
                 -o-transform: translate(3m,2m) scale(.8);
                -ms-transform: translate(3m,2m) scale(.8);
                transform: translate(3m,2m) scale(.8);
                -webkit-transform: translate(4m,3m) scale(.6);
                -moz-transform: translate(3m,3m) scale(.6);
                 -o-transform: translate(3m,3m) scale(.6);
                -ms-transform: translate(3m,3m) scale(.6);
                transform: translate(3m,3m) scale(.6);
                */
  }
              #ani1{
                  float:right;
                 background-color: transparent;
                -webkit-transition: 5s ease-in-out;
                -moz-transition: 5s ease-in-out;
                 -o-transition: 5s ease-in-out;
                transition: 5s ease-in-out;
  }
            html, body {
                background-color: #000;
                color: #06c400;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("../public/images/alien-invasion-background.jpg");
                text-shadow: 0 0 8px black;
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
                color:#06c400;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: 'Orbitron', sans-serif;
            }

            .links > a {
                color: #06c400;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
 
            <div class="content">
                <div class="title m-b-md">
                    UFO Alert System
                </div>
                <h3>The truth is <i>totally</i> out there</h3>
                                <!--<div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
           
                </div> -->
                <div id="ani1"><img src="images/ufo-spaceship.png" width="70px"></div>
            </div>
        </div>
    </body>
</html>
