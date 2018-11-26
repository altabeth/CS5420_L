<!doctype html>
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
                background-image: url("UFOAlertSystem/public/images/alien-invasion-background.jpg");
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
                z-index: 10;
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

            #stage{
                position:absolute;
                height:100%;
                width:66%;
                z-index:5;
            }
            
            #ali1 {
                position: absolute;
                left: 700px;
                bottom: 3%;
                width: 70px;
                -webkit-filter: brightness(.5);
                filter: brightness(.5);
                transition: left 2s ease-in 1.2s, bottom 2s ease-out 0s, width 3s ease-in 1s, filter 4s ease-out, transform 4s ease-out;
               z-index: 3;;

            }
            #stage:hover #ali1 {
                left:0px;
                bottom: 550px;
                width: 300px;
                -webkit-filter: brightness(1);
                filter: brightness(1);
                transform: rotate(-20deg);
                transition: left 2s ease-out 1s, bottom 2s ease-in 0s, width 3s ease-out 1s, filter 4s ease-in, transform 4s ease-in;
                 z-index: 0 !important;;
                 }

        </style>
    </head>
    <body>
                 <div id="stage"><img id="ali1" src="UFOAlertSystem/public/images/ufo-spaceship.png"/></div>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="UFOAlertSystem/public/home">Home</a>
                        <a href="UFOAlertSystem/public">Threat Level</a>
                        <a href="UFOAlertSystem/public/login">Login</a>
                        <a href="UFOAlertSystem/public/register">Register</a>
                </div>
            <div class="content">
                <div class="title m-b-md">
                    UFO Alert System
                </div>
                <h3>The truth is <i>totally</i> out there</h3>
                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>
