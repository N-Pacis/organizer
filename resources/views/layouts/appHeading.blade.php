<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ config('app.env') == 'production' ? secure_asset('css/app.css') : asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ config('app.env') == 'production' ? secure_asset('css/dashboard.css') : asset('css/dashboard.css')}}">
    </head>
    <body>
        <div class="admin-dashboard">
            <div class="sidebar-div">
                <x-sidebar></x-sidebar>
            </div>
            <div class="toggle-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#f2f2f2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </div>
            <div class="main-page">
                @yield('content')
            </div>
        </div>
    </body>
</html>