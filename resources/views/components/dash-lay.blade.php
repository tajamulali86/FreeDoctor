<!DOCTYPE html>
    <html lang="en">
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
            <title>@yield('title')</title>
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Scripts -->
        </head>
        <body class="font-sans antialiased ">
            {{-- <div class="bg-slate-800 text-2xl text-white text-center "><h2>welcome {{$user->name}}</h2></div> --}}
                <div class="flex">
                    <div class=" bg-gray-100">
                        {{-- @include('layouts.navigation') --}}
                         @include($nav)
                     </div>
                    
                    <!-- Page Content -->
                    <main class="w-full p-5 m-5">
                        @yield('content')
                    </main>
                </div>
            {{-- @include('footer') --}}
        </body>
</html>
