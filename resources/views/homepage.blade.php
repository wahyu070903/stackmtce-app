<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-navbar></x-navbar>
        <main class="w-full">
            <div class="px-5 pt-5 pb-8 bg-primary w-full font-inter">
                <p class="inline-block text-text text-base px-1 py-0.5 bg-[#FF9BDD]">
                    HOME
                </p>
                <p class="text-primaryText text-2xl font-semibold mt-5">
                    IDEAS, INSIGHT AND AI INNOVATION 
                </p>
                <p class="text-white font-light mt-7">
                    Expert content for builders and product teams shaping connected products — from quick tips to strategic insights.
                </p>
            </div>
            <div class="__featured_area flex flex-col w-full pt-6 px-5">
                <p class="self-start inline-block text-sm text-subPurple border-2 border-subPurple px-1 py-0.5 font-semibold">
                    FEATURED
                </p>
                <div class="flex justify-center mt-5">
                    <x-card></x-card>
                </div>
            </div>
        </main>
        <x-footer></x-footer>
    </body>
</html>