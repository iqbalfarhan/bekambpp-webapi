<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/css/app.css')
    </head>

    <body>
        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <div class="flex flex-col h-screen">
                        <div class="flex-none">
                            @livewire('partial.navbar')
                        </div>
                        <div class="flex-1 h-full overflow-y-scroll scrollbar-hide">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                <div class="drawer-side">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="flex flex-col justify-center items-center h-screen p-6 space-y-8">
                <h3 class="text-3xl font-bold">{{ config('app.name') }}</h3>
                {{ $slot }}
            </div>
        @endguest
    </body>

</html>
