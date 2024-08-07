<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-2xl font-semibold">Admin Panel</h2>
            </div>
            <nav class="mt-6">
                <ul>
                    <li><a href="#" class="block p-4 hover:bg-gray-700">Dashboard</a></li>
                    <li><a href="#" class="block p-4 hover:bg-gray-700">Users</a></li>
                    <li><a href="#" class="block p-4 hover:bg-gray-700">Settings</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-gray-900 text-white p-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-semibold">Dashboard</h1>
                    <button class="text-gray-400 hover:text-white">Logout</button>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
