<!doctype html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="{{asset('css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet"/>

    @yield('style')

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <div id="app">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/homepage">SimpleWork</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="{{ Request::path() == 'homepage' ? 'current_page_item' : ''}}"><a href="/homepage" accesskey="1" title="">Homepage</a></li>
                        <li class="{{ Request::path() == 'client' ? 'current_page_item' : ''}}"><a href="/clients" accesskey="2" title="">Our Clients</a></li>
                        <li class="{{ Request::path() == 'about' ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
                        <li class="{{ Request::path() == 'articles' ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                        <li class="{{ Request::path() == 'contact' ? 'current_page_item' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            @yield('header')
        </div>
        @yield('content')

        <div id="copyright" class="container">
            <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
        </div>
    </div>
</body>
</html>
