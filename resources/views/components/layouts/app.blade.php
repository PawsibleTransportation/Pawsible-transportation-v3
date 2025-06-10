<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>
    <meta name="description"
        content="At Pawsible Transportation, we specialize in safe, reliable, and pet-loving transportation services. Whether it's a local or cross-country travel, your furry friend is in great hands.">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Pawsible Transportation">
    <meta property="og:description"
        content="At Pawsible Transportation, we specialize in safe, reliable, and pet-loving transportation services. Whether it's a local or cross-country travel, your furry friend is in great hands.">
    <meta property="og:image" content="{{ asset('/landscape_logo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pawsible Transportation">
    <meta name="twitter:description"
        content="At Pawsible Transportation, we specialize in safe, reliable, and pet-loving transportation services. Whether it's a local or cross-country travel, your furry friend is in great hands.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen font-sans antialiased bg-base-200">

    {{-- NAVBAR mobile only --}}
    <x-nav sticky class="lg:hidden">
        <x-slot:brand>
            <x-app-brand />
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden me-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>

    {{-- MAIN --}}
    <x-main>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit !max-w-60">

            {{-- BRAND --}}
            <x-app-brand class="px-5 pt-4" />

            {{-- MENU --}}
            <x-menu activate-by-route>
                <x-menu-item title="Home" icon="o-home" link="/" />
                <x-menu-item title="Reviews" icon="o-star" link="/reviews" />
                <x-menu-item title="About Us" icon="o-information-circle" link="/about" />
            </x-menu>
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>

</html>
