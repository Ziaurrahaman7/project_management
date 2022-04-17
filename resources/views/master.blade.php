@include('header')
        <div id="layoutSidenav">
            @include('sidebar')
            <div id="layoutSidenav_content">
               @yield('body')
               @include('footer')
            