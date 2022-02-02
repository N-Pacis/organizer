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
            <div class="sidebar-div" id="sidebar-div">
                <x-sidebar></x-sidebar>
            </div>
            <div class="toggle-btn" onclick="openSidebar()" id="open-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#f2f2f2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </div>
            <div class="toggle-btn close-sidebar" onclick="closeSidebar()" id="close-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M15 4l-8 8l8 8" stroke="#f8f8f8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
            </div>
            <div class="main-page">
                @yield('content')
            </div>
        </div>
        <script type="text/javascript">
            function openSidebar(){
                let sidebar = document.getElementById("sidebar-div");
                sidebar.style.display = "block";
                let openSidebarBtn = document.getElementById("open-sidebar").style.display = "none";
                let closeSidebarBtn = document.getElementById("close-sidebar").style.display = "block";
            }
            function closeSidebar(){
                if(window.innerWidth < 700){
                    let sidebar = document.getElementById("sidebar-div");
                    sidebar.style.display = "none";
                    let closeSidebarBtn = document.getElementById("close-sidebar").style.display = "none";
                    let openSidebarBtn = document.getElementById("open-sidebar").style.display = "block";
                }
            }
            if(window.innerWidth < 700){
                let sidebarDiv = document.getElementById("sidebar-div")
                let my_modal = document.getElementById("my-modal");
                window.onclick = function(event){
                    if(event.target == sidebarDiv){
                        let openSidebarBtn = document.getElementById("open-sidebar").style.display = "block";
                        let closeSidebarBtn = document.getElementById("close-sidebar").style.display = "none";
                        sidebarDiv.style.display = "none"
                    }
                    else if(event.target == my_modal){
                        my_modal.style.display = "none"
                    }
                }
            }
        </script>
    </body>
</html>