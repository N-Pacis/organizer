<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="admin-dashboard">
           <div class="sidebar-div">
                <x-sidebar></x-sidebar>
           </div>
            @if (request()->is('dashboard'))
                <x-admin-dashboard></x-admin-dashboard>
            @endif
            @if (request()->is('students'))
                <x-student-page></x-student-page>
            @endif
            @if (request()->is('teachers'))
                <x-teachers-page></x-teachers-page>
            @endif
            @if (request()->is('workers'))
                <x-workers-page></x-workers-page>
            @endif
            @if (request()->is('income'))
                <x-income-page></x-income-page>
            @endif 
            @if (request()->is('liabilities'))
                <x-liabilities-page></x-liabilities-page>
            @endif                                               
        </div>
    </body>
</html>