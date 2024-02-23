<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('pageTitle')</title>
    <style>
        html {
            --text-color-normal: hsl(205, 14%, 76%);
            --text-color-light: hsl(210, 15%, 35%);
            --text-color-richer: hsl(210, 50%, 72%);
            --text-color-highlight: hsl(25, 70%, 45%);
            
        }

        html[data-theme='light'] {
            --text-color-normal: #0a244d;
            --text-color-light: #8cabd9;
        }

        body {
            background-color: #272727;
            color: rgb(237, 237, 237);
        }

        @media screen and (prefers-color-scheme: light) {
            body {
                background-color: #f1f1f1;
                color: #272727;
            }
        }

        @media (prefers-color-scheme: dark) {

            a {
                color: var(--text-color-light);
            }

            a:hover{
                color: var(--text-color-normal);
            }

        }
    </style>
</head>

<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</body>

</html>
