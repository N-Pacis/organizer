<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ secure_asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body>
        <div class="admin-dashboard">
            <div class="sidebar-div">
                <x-sidebar></x-sidebar>
            </div>
            <div class="main-page">
                @yield('content')
            </div>
        </div>
    </body>
</html>