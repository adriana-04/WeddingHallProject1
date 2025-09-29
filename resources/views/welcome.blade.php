<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeddingHall</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex flex-col">

   <nav class="flex justify-between items-center p-6 bg-white shadow">
    <!-- Left: Logo -->
    <h1 class="text-2xl font-bold text-gray-700">WeddingHall</h1>

    <!-- Center: Navigation Links -->
    <div class="space-x-6">
        <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
    </div>

    <!-- Right: Auth simulation -->
    @if (!empty($username))
        <span class="font-semibold text-gray-800">
            {{ $username }}
        </span>
    @else
        <a href="{{ route('register') }}"
           class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
            Register
        </a>
    @endif
</nav>


    <!-- Content -->
    <div class="flex-grow flex items-center justify-center">
        
    </div>

</body>


</html>
