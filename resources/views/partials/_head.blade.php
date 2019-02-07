<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#ff685c">
    <meta name="theme-color" content="#32cafe">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <!-- Styles -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <!-- Title -->
    <title>Spain – Admin Bootstrap4 Responsive Webapp Dashboard Template</title>
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}">
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <!-- Dashboard Css -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
    <!---Font icons-->
    <link href="{{asset('assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />

</head>
<body class="login-img">
<div class="page">
    <div class="page-single">