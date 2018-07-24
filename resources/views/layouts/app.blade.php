<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body class="@yield('body-class')">
    
    @include('includes.navbar')
    	
        @yield('content')
    
    @include('includes.script')
    
    @yield('script-extra')
</body>
</html>
