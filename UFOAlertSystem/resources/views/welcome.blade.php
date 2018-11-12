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
            html, body {
                background-color: #000;
                color: #06c400;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("images/alien-invasion-background.jpg");
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
                z-index:2 !important;
            }
            h3{ z-index:2 !important;}
            
            #ali1 {
                position: absolute;
                left: 47%;
                bottom: 3%;
                width: 70px;
                -webkit-filter: brightness(.5);
                filter: brightness(.5);
                /*
                -webkit-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,.5,.5,1), width 4s cubic-bezier(1,.5,.5,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                -moz-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,.5,.5,1), width 4s cubic-bezier(1,.5,.5,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                -o-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,.5,.5,1), width 4s cubic-bezier(1,.5,.5,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,.5,.5,1), width 4s cubic-bezier(1,.5,.5,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);*/
                transition: left 2s ease-in 1.2s, bottom 2s ease-out 0s, width 3s ease-in 1s, filter 4s ease-out, transform 4s ease-out;
               z-index: 3;;

            }
            #stage:hover #ali1 {
                /*left: calc(100% - 100px);*/
                left:950px;
                bottom: 550px;
                width: 300px;
                -webkit-filter: brightness(1);
                filter: brightness(1);
                transform: rotate(-20deg);
                /*
                -webkit-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,1,0,1), width 4s cubic-bezier(1,1,0,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                -moz-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,1,0,1), width 4s cubic-bezier(1,1,0,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                -o-transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,1,0,1), width 4s cubic-bezier(1,1,0,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                transition: left 4s cubic-bezier(1,1,0,1), bottom 4s cubic-bezier(1,1,0,1), width 4s cubic-bezier(1,1,0,1), filter 4s cubic-bezier(1,1,0,1), transform 4s cubic-bezier(1,1,0,1);
                */
                transition: left 2s ease-out 1s, bottom 2s ease-in 0s, width 3s ease-out 1s, filter 4s ease-in, transform 4s ease-in;
                 z-index: 0 !important;;
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
            <div id="stage" class="content">
            <img id="ali1" src="images/ufo-spaceship.png"/>
                <div class="title m-b-md">
                    UFO Alert System<br>
                    <a href="ImageUpload">Upload</a>
                </div>
                <h3>The truth is <i>totally</i> out there</h3>
                <div class="links">
                <!--
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    -->
                </div>
            </div>
        </div>
    </body>
</html>
