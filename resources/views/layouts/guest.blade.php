<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark" x-data="{ darkMode: $persist(false) }"
    :class="{ 'dark': darkMode === true }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative font-sans text-gray-900 antialiased theme bg-gradient-to-r bg-opacity-5 from-blue-50/10 via-slate-50/10 to-gray-50/10" x-cloak>
    {{-- <div class="absolute left-0 top-0 -z-10 h-full w-full"> --}}
        {{-- <img alt="bg" loading="lazy" width="1920" height="1036" decoding="async" data-nimg="1"
            class="absolute left-0 top-0 -z-10 h-[100%] w-full opacity-10" src="{{ asset('assets/images/hero-default.webp') }}"
            style="color: transparent;"> --}}
        {{-- <div class="absolute left-0 top-0 -z-10 h-full w-full bg-gradient-to-b from-transparent to-gray">
        </div> --}}

        {{-- <div class="absolute left-0 top-0 -z-10 bg-gradient-to-b from-purple-600 to-blue-600"></div> --}}

    {{-- </div> --}}
    @include('layouts.partials.nav')
    <main class="my-6 lg:my-10">
        {{ $slot }}
    </main>
    @include('layouts.partials.footer')
</body>

</html>
