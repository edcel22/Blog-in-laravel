<!DOCTYPE html>
<html>

@include('partials._head')
    <body>
        <header>
            @include('partials._nav')
        </header>
        
        <div class="wrapper">
            @yield('content')
            @include('partials._footer')    
    </body>
</html>