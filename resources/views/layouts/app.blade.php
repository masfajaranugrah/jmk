<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'PT Jernih Multi Komunikasi - Provider ISP Klaten Terpercaya')</title>
    <meta name="description" content="@yield('meta_description', 'Provider ISP Klaten terpercaya sejak 2005. Internet fiber optik cepat, stabil, dan murah mulai Rp 120.000/bulan. Langganan WiFi Klaten dengan support 24/7.')">
    <meta name="keywords" content="provider internet klaten, isp klaten, wifi murah klaten, pasang wifi klaten, internet fiber optik klaten, langganan wifi klaten, jmk jernih multi komunikasi">
    <meta name="author" content="PT Jernih Multi Komunikasi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'PT Jernih Multi Komunikasi - Provider ISP Klaten Terpercaya')">
    <meta property="og:description" content="@yield('meta_description', 'Provider ISP Klaten terpercaya sejak 2005. Internet fiber optik cepat, stabil, dan murah.')">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="antialiased font-sans bg-white text-slate-900">
    @yield('content')
    
    @stack('scripts')
</body>
</html>
