<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

        <!-- Externa/CDN css -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        
        <style>
            .tri7-header-dark-blue{
                background-color:#001e5a;
            }
            .tri7-header-menu{
                 background-color:#003c82;
            }
   
        </style> 
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <!-- Externa/CDN javascripts -->

        @inertia
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    </body>
</html>
