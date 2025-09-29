<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased bg-gray-900 text-white">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://laravel.com/docs" class="block p-6 bg-gray-800 rounded-lg shadow hover:bg-gray-700">
                        <h2 class="font-semibold text-xl text-white">Documentation →</h2>
                        <p class="mt-2 text-gray-400">Laravel has wonderful documentation covering every aspect of the framework.</p>
                    </a>

                    <a href="https://laracasts.com" class="block p-6 bg-gray-800 rounded-lg shadow hover:bg-gray-700">
                        <h2 class="font-semibold text-xl text-white">Laracasts →</h2>
                        <p class="mt-2 text-gray-400">Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.</p>
                    </a>

                    <a href="https://laravel-news.com" class="block p-6 bg-gray-800 rounded-lg shadow hover:bg-gray-700">
                        <h2 class="font-semibold text-xl text-white">Laravel News →</h2>
                        <p class="mt-2 text-gray-400">The latest community-driven portal and newsletter aggregating all important Laravel news.</p>
                    </a>

                    <div class="block p-6 bg-gray-800 rounded-lg shadow">
                        <h2 class="font-semibold text-xl text-white">Vibrant Ecosystem</h2>
                        <p class="mt-2 text-gray-400">
                            Laravel’s robust library of tools and libraries help you take your projects to the next level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
