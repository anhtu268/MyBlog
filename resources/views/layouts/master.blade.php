<!DOCTYPE html>
<html>
@include('layouts.header')
<body>
    @include('layouts.nav')
    @yield('main')
    @include('layouts.footer')
    @yield('script')
</body>
</html>