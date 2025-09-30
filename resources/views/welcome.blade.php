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
    <div class="flex space-x-6">
    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600">About</a>
    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a>
    <a href="{{ route('hall.register') }}" class="text-gray-700 hover:text-blue-600">Hall Registration</a>
</div> 


@if(session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-2 text-center">
        {{ session('success') }}
    </div>
@endif


    <!-- Right: Auth simulation -->
@if (!empty($username))
    <div class="flex items-center space-x-3">
        <span class="font-semibold text-gray-800">
            {{ $username }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-lg shadow-md hover:bg-red-600 transition">
                Logout
            </button>
        </form>
    </div>
@else
    <a href="{{ route('register') }}"
       class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
        Register
    </a>
@endif

</nav>

@if(session('role') === 'admin')
    <div class="p-6">
        <h2 class="text-xl font-bold mb-4">All Registered Halls</h2>
        <table class="table-auto w-full border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border">Hall Name</th>
                    <th class="px-4 py-2 border">Location</th>
                    <th class="px-4 py-2 border">Registered By</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('halls', []) as $hall)
                    <tr>
                        <td class="px-4 py-2 border">{{ $hall['hall_name'] }}</td>
                        <td class="px-4 py-2 border">{{ $hall['location'] }}</td>
                        <td class="px-4 py-2 border">{{ $hall['user'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif


    <!-- Content -->
    <div class="flex-grow flex items-center justify-center">
        
    </div>

</body>
</html>
