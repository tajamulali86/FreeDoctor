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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased flex row">
        
            {{-- @include('layouts.navigation') --}}
            <div class="col">

                @include('layouts.NavDash')
            </div>
          
            <div class="col bg-red-800"  >
                <main class="">
                    @yield('content')
                </main>

            </div>
            <!-- Page Content -->
       
        {{-- @include('footer') --}}
    </body>
</html>
