<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="UTF-8">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .text-black{
            color: #000;
        }
        .text-900{   
            font-weight: 900;
        }
        .f-50{
            font-size: 2.3rem;
        }

        body{
            background-color:#fff;
            margin: 0px;
            /* height: 100%; */
            overflow-x: hidden;
        }

        main {
            position: relative;
            height: 100%;
            width: 100%;
        }

        #app {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .content{
            width:100%;
        }

        .animation {
            background-color:#fff;
            width:100%;
            height:100%;
            display:block;
            overflow: hidden;
            transform: translate3d(0,0,0);
            text-align: center;
            opacity: 1;
        }

        .animation-mob {
            display: none;
        }

        @media (max-width: 576px) {
            .animation-mob {
                display: block;
            }

            .animation-mob svg {
                height: auto !important;
                width: 100% !important;
            }

            .animation {
                display: none;
            }
        }

    </style>
</head>
<body>

    <main>
        <div id="app" class="content">
            <absolute-component></absolute-component>
            <services-component></services-component>
            <portfolio-component></portfolio-component>
            <about-component></about-component>
            <contacts-component></contacts-component>
        </div>
    </main>
</body>
</html>
