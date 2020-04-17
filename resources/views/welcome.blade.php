<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #7b32a8;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
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
                font-size: 72px;
                letter-spacing: .2rem;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: none;
            }

            .get{
                width: 100%;
                background: #7b32a8;
                color: white;
                margin-top:425px;
                border-radius: 2rem;  
                text-align:center;
                }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links get">
                        <a href="{{ url('login') }}" class="btn btn-alt">Get Started</a>
                </div>


            <div class="content">
    
                <div class="title m-b-md">
                    GOOD LAUNDRY
                </div>
            
            </div>
    </div>
    </body>
</html>
