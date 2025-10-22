<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        @if (session('error'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" name="username" id="username" required
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-700">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Register</a>
            </p>
        </div>
    </div>
</body>
</html>
