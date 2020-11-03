<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Daifu828') }}</title>

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @yield('styles')
</head>
<body>
    <div class="page_bg root61">
        @include('layouts.shortcut')
        <div class="line8"></div>
        @include('layouts.header')
        <div class="line10"></div>
        @include('layouts.nav')        
        <div class="line10"></div>
        <div class="line5"></div>

        @yield('content')
        
        @include('layouts.footer') 
    </div>
    @yield('scripts')
</body>
</html>
