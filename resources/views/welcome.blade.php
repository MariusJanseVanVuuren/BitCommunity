<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 6em;
                color: #3F598C;
                font-weight: bold;
            }

            a {
                border-radius: 2rem;
                color: #fff;
                padding-right: 1.5rem;
                padding-left: 1.5rem;
                padding-top: 0.3rem;
                padding-bottom: 0.3rem;
                background-color: #55B3F1;
                border-color: #55B3F1;
                -webkit-box-shadow: 2px 2px 1px -1px rgba(0,0,0,0.2);
                -moz-box-shadow: 2px 2px 1px -1px rgba(0,0,0,0.2);
                box-shadow: 2px 2px 1px -1px rgba(0,0,0,0.2);
                font-size: 1em;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links:hover {
              background-color: #227dc7;
            }

            .links:focus {
              box-shadow: 0 0 0 0.2rem rgba(82, 161, 225, 0.5);
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a class="links" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="links" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="links" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                  <img src="img/Social.png" height="20%" width="20%" />
                </div>
                <div class="title m-b-md">
                    BitCommunity
                </div>
            </div>
        </div>
    </body>
</html>
