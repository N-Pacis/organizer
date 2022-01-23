<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
        <div class="admin-dashboard">
            <div class="sidebar">
              <div class="sidebar-logo">
                <x-jet-application-logo></x-jet-application-logo>
              </div>
              <ul>
                  <li>
                      <h3>Dashboard</h3>
                  </li>
                  <li>
                    <h3>Students</h3>
                </li>
                <li>
                    <h3>Teachers</h3>
                </li>
                <li>
                    <h3>Computers</h3>
                </li>
              </ul>
            </div>
        </div>
    </body>
</html>