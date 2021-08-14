<!DOCTYPE html>
<html>
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Apple macOS version 5.6.0">
    <title></title>
</head>
<body>
    @yield('title') 
    @yield('meta') 
    <!-- style part -->
    @include('front.layouts.style') 
    @yield('style') 
    @yield('body')

   


    @include('front.layouts.footer') 
    {{-- Script area --}} 
    @include('front.layouts.script')
    @yield('script') 
    {{-- script area end --}}
</body>
</html>
