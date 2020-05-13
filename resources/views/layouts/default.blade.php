<!doctype html>
<html>
<head>
    @include('includes.header')
    @stack('styles')
</head>
<body>
    <div id="content">
        @include('includes.head')
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>
