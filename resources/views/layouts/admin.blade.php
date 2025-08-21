<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeupreme Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zeupreme-light text-gray-900">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-zeupreme-dark text-white min-h-screen p-5">
            <h2 class="text-2xl font-bold mb-8">Zeupreme Admin</h2>
            <ul class="space-y-4">
                <li><a href="{{ route('dashboard') }}" class="hover:text-zeupreme-orange">Dashboard</a></li>
                <li><a href="{{ route('reservations.index') }}" class="hover:text-zeupreme-orange">Reservations</a></li>
                <li><a href="#" class="hover:text-zeupreme-orange">Menu</a></li>
                <li><a href="#" class="hover:text-zeupreme-orange">Users</a></li>
            </ul>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-semibold">@yield('title')</h1>
                <div>
                    <a href="{{ route('logout') }}" class="bg-zeupreme-orange px-4 py-2 rounded-lg text-white">Logout</a>
                </div>
            </header>

            <section>
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>
