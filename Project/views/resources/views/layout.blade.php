<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    @yield('mainjs')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>App Name - @yield('title')</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <ul>
                <li>
                    <a href="/main">Admin area</a>
                    <a href="/">Comments</a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>
