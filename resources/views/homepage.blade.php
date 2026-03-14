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
                    <x-card title="dontknow" description="dontknow" r-time="12" date="dontknow" category="dontknow"></x-card>
                </div>
                <form class="__search_form">   
                    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <img src="{{ asset('icons/Search-icon.svg') }}">
                        </div>
                        <input type="search" id="search" class="block w-full p-3 ps-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search Something ..." required />
                    </div>
                </form>
                <div class="grid grid-cols-1 md:grid-cols-3">
                    @foreach ($posts as $post)
                        <x-card title="dontknow" description="dontknow" r-time="12" date="dontknow" category="dontknow"></x-card>
                    @endforeach
                </div>
            </div>
        </main>
        <x-footer></x-footer>
    </body>
</html>