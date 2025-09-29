<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeddingHall</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex flex-col">

    <!-- Navbar -->
    <div class="flex justify-between items-center p-6">
        <h1 class="text-2xl font-bold text-gray-700">WeddingHall</h1>
        <a href="{{ route('register') }}"
           class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
            Register
        </a>
    </div>

    <!-- Content (empty center for now) -->
    <div class="flex-grow flex items-center justify-center">
        
    </div>

</body>

</html>
